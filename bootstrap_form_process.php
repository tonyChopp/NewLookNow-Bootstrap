<?php
// die('test');
error_reporting(E_ALL);
ini_set('display_errors', 1);
	// die("<pre>_SERVER: ".print_r($_SERVER,true)."</pre>");
	
	//$_SERVER['REQUEST_URI']="/newlook/bootstrap_form_process.php";


/** SAVE TO FILE **/
// $file_dir = '/var/www/vhosts/newlooknow/bootstrap';
$file_dir = '/mnt/cbs01/files/csv';
$file = $file_dir.'/bootstrap_submissions.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "\n";
$current .= '"'.$_POST['firstname'].'",';
$current .= '"'.$_POST['lastname'].'",';
$current .= '"'.$_POST['phone'].'",';
$current .= '"'.$_POST['email'].'",';
$current .= '"'.$_POST['zip'].'",';
$current .= ''.$_SERVER['REQUEST_TIME']."";
// Write the contents back to the file
$result = file_put_contents($file, $current);
// die("\$result=".$result."<br>".$current.$file);

// die('here');
// if (isset($_POST['destination'])) {
	// header('Location: '.$_POST['destination']);
	// exit();	
// }


// get drupal bootstrap
require_once('_include.php');
$module = 'nln_email';
    $key = 'bootstrap';
	$email = 'info@newlooknow.com';
    $language = language_default();
    $params = array();
    $from = 'info@newlooknow.com';
    $send = FALSE;
    $message = drupal_mail($module, $key, $email, $language, $params, $from, $send);
    $message['subject'] = 'NLN Bootstrap Lead Form Submission';
    $message['body'] = array();
    $message['body'][] = "NLN Bootstrap Lead Form Submission";
    $message['body'][] = "==================================";
    $message['body'][] = "";
	foreach($_POST as $key=>$value) {
    $message['body'][] = $key.": ".$value;
	}


    // Retrieve the responsible implementation for this message.
    $system = drupal_mail_system($module, $key);


    // Format the message body.
    $message = $system->format($message);


    // Send e-mail.
    $message['result'] = $system->mail($message);
	
	// DEBUG
	// print "<pre>\$message => ".print_r($message,true)."</pre>";
	// exit();


// die('/bootstrap/index.php?msg=thankyou');
header('Location: /bootstrap/index.php?msg=thankyou');
exit();

function _lead_insert() {

	// dpm($object, "\$object");
	
	// die('here');
	
	$node = new stdClass();
	$node->type = 'lead';
	$node->status = 1;
	$node->uid = 0;
	$node->title = "Lead from /newlook";
	$node->promote = 1;
	$node->created = time(); //$new_node['timestamp'];
	$node->timestamp = time(); //$new_node['timestamp'];
	$node->sticky = 0;
	$node->format = 3;
	$node->language = 'en';
	// $node->teaser = $new_node['teaser'];
	// $node->body = $new_node['body'];
	$node->revision = 0;
	
	$node->field_first_name['und'][0]['value'] = $_POST['firstname'];
	$node->field_last_name['und'][0]['value'] = $_POST['lastname'];
	$node->field_email['und'][0]['value'] = $_POST['email'];
	$node->field_zip_code['und'][0]['value'] = $_POST['zip'];
	$node->field_phone['und'][0]['value'] = $_POST['phone'];
	
	node_save($node);
	// die("<pre>NEW NODE: ".print_r($node,true)."</pre>");
	
	
	// SEND EMAILS
	
	$email_response = nln_email__consumer__send_confirmation_email($node->nid, $type='desktop');
	// $email_response = nln_email__affiliate__send_confirmation_email($node->nid, $type='desktop');
	$email_response = nln_email__staff__send_confirmation_email($node->nid, $type='desktop');
	
	// print('$email_response => '.$email_response);
	// exit();
}


// print "<h4>file<h4>";
// print "<pre>";
// print print_r($file,true);
// print "</pre>";

// print "<h4>current<h4>";
// print "<pre>";
// print print_r($current,true);
// print "</pre>";



// print "<h4>_REQUEST<h4>";
// print "<pre>";
// print print_r($_REQUEST,true);
// print "</pre>";

// print "<h4>_POST<h4>";
// print "<pre>";
// print print_r($_POST,true);
// print "</pre>";

// print "<h4>_GET<h4>";
// print "<pre>";
// print print_r($_GET,true);
// print "</pre>";

// print "<h4>_SERVER<h4>";
// print "<pre>";
// print print_r($_SERVER,true);
// print "</pre>";

?>