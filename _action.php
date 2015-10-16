<?php

// die('_FILE='.print_r($_FILE,true));

require_once('_include.php');

	


	/****************************************/
	/* PAYMENT (physician-five.php)			*/
	/****************************************/
	if (isset($_GET['stripe_token'])) {
		$token = $_GET['stripe_token'];
		$email = $_SESSION['nln_workflow']['contact']['email'];
		$amount = $_SESSION['nln_workflow']['cost'] * 100;
		require_once('stripeconfig.php');
		

		$customer = \Stripe\Customer::create(array(
		  'email' => $email,
		  'card'  => $token
		));

		$charge = \Stripe\Charge::create(array(
		  'customer' => $customer->id,
		  'amount'   => $amount,
		  'currency' => 'usd'
		));
		
		
		// print("\$customer =><pre>".print_r($customer,true)."</pre>");
		// print("\$charge =><pre>".print_r($charge,true)."</pre>");
		// print("\$token =><pre>".print_r($token,true)."</pre>");
		// exit();
		
		// TODO save charge information to node from session variables
		$_SESSION['nln_workflow']['stripe_token'] = $token;
		$nid = $_SESSION['nln_workflow']['nid'];
		// $node = node_load($nid);
		// $node->field_REPLACEME['und'][0]['value'] = $token; // stripe token id
		// $node->field_REPLACEME['und'][0]['value'] = 1; // boolean stripe is paid
		// node_save($node);
		
		
		
		// REDIRECT
		header('Location: physician-six.php');
		exit();	
	}


	/****************************************/
	/* CONCERNS (visualizer.php)			*/
	/****************************************/
	if (isset($_GET['concern_select'])) {
		
		// set workflow session array
		if (!isset($_SESSION['nln_workflow'])) $_SESSION['nln_workflow'] = array();
		$_SESSION['nln_workflow'] = array(); // reset workflow
		
		$_SESSION['nln_workflow']['concern_select'] = $_GET['concern_select'];
		$_SESSION['nln_workflow']['treatment'] = $_GET['treatment'];
		$_SESSION['nln_workflow']['sponsor'] = $_GET['sponsor'];
		$_SESSION['nln_workflow']['cost'] = $_GET['cost'];
		
		// redirect to step 3
		// redirect to step 3
		header('Location: physician-three.php');
		exit();
	}

	/****************************************/
	/* CONCERNS (physician-four.php)		*/
	/****************************************/
	if (isset($_POST['first_name'])) {
		
		// set workflow session array
		if (!isset($_SESSION['nln_workflow'])) $_SESSION['nln_workflow'] = array();
		
		$_SESSION['nln_workflow']['contact'] = array();
		// Add all post input variables		
		foreach($_POST as $key => $value) {
			$_SESSION['nln_workflow']['contact'][$key] = $value;
		}
		
		$lead_node = _nln_bootstrap_lead_insert();
		$_SESSION['nln_workflow']['nid'] = $lead_node->nid;
		
		// require_once('/var/www/vhosts/newlooknow/sites/all/modules/nln_sms/nln_sms.module');
		// $sms_response = nln_sms_send_verification($lead_node->nid, _numbers_only($_SESSION['nln_workflow']['contact']['phone']));
		
		if (isset($_SESSION['nln_workflow']['cost']) && $_SESSION['nln_workflow']['cost'] > 0) {
			// redirect to payment
			header('Location: physician-five.php');
		} else {
			// redirect to thank you
			header('Location: physician-six.php');
		}
	}


	/****************************************************************/
	/* IMAGE UPLOAD (physician-one.php & physician-three.php)		*/
	/****************************************************************/
		// Skip this process if the image was already uploaded from dropzone
		if (isset($_SESSION['nln_workflow']['before_photo']['size']) && isset($_POST['dropzone_upload_flag'])) {
				if (isset($_POST['next_step'])) {
					// redirect to step 2
					header('Location: '.$_POST['next_step']);
					exit();
				}
				
				// redirect to step 2
				header('Location: physician-two.php');
				exit();
			}
			
			
		if (isset($_FILES['file'])) {
			$_FILES['before_photo'] = $_FILES['file'];
		}
		if (isset($_FILES['before_photo'])) {
			
			// Skip this process if the image was already uploaded from dropzone
			if (isset($_SESSION['nln_workflow']['before_photo']['size'])) {
				if (isset($_POST['next_step'])) {
					// redirect to step 2
					header('Location: '.$_POST['next_step']);
					exit();
				}
				
				// redirect to step 2
				header('Location: physician-two.php');
				exit();
			}
			
			
			
			// TODO : Generate GUID for new filename
			// $target_filename = basename($_FILES["before_photo"]["name"]);
			$target_filename = _generateRandomString(25).".".pathinfo(basename($_FILES["before_photo"]["name"]),PATHINFO_EXTENSION);
			
			// $target_dir = "uploads/";
			$target_dir = "/var/www/vhosts/newlooknow/sites/default/files/upload/";
			$target_file = $target_dir . $target_filename;
			// die($target_file);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["before_photo"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["before_photo"]["size"] > 5000000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["before_photo"]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["before_photo"]["name"]). " has been uploaded.";
					
					if (!isset($_SESSION['nln_workflow'])) $_SESSION['nln_workflow'] = array();
					$_SESSION['nln_workflow']['before_photo'] = array(
						'target_filename' => $target_filename,
						'target_file' => $target_file,
						'type' => $_FILES['before_photo']['type'],
						'size' => $_FILES['before_photo']['size'],
						'original_filename' => $_FILES['before_photo']['name'],
					);
					
					if (isset($_POST['next_step'])) {
						// redirect to step 2
						header('Location: '.$_POST['next_step']);
						exit();
					}
					
					// redirect to step 2
					header('Location: physician-two.php');
					exit();
					
				} else {
					echo "<br/>Sorry, there was an error uploading your file.";
					echo "<br/>\$target_file => $target_file";
					echo "<br/>basename( \$_FILES[\"before_photo\"][\"name\"]) => ".basename( $_FILES["before_photo"]["name"]);
				}
			}
		}
		
	/****************************************/
	/* CONCERSN (physician-two.php)			*/
	/****************************************/
	if (isset($_POST['concerns'])) {
		
		$_SESSION['nln_workflow']['notes'] = $_POST['concerns'];
		$_SESSION['nln_workflow']['concern_select'] = 562; // "562:Other"
		
		// redirect to step 3
		header('Location: physician-four.php');
		exit();
	}
		
		
// mobile memory limit
if (isset($_POST['dropzone_upload_flag'])) {
	
	print "<h1>Device Memory Limit Error</h1>";
	print "<h2>Your photo could not be uploaded due to memory limitations on your device.  Please try uploading from your photo gallery and not your camera app.</h2>";
	print "<h2><a href='physician-three.php'><< Go Back </a></h2>";
	exit();
}
	
print("\$_POST =><pre>".print_r($_POST,true)."</pre>");
print("\$_GET =><pre>".print_r($_GET,true)."</pre>");
print("\$_REQUEST =><pre>".print_r($_REQUEST,true)."</pre>");
print("\$_FILES =><pre>".print_r($_FILES,true)."</pre>");
print("\$_SESSION =><pre>".print_r($_SESSION,true)."</pre>");
	
?>