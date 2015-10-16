<?php

// Lead Submit
function _nln_bootstrap_lead_insert() {

	$workflow = $_SESSION['nln_workflow'];	  
	// die("<pre>".print_r($workflow,true));
	  /*
	  [nln_workflow] => Array
        (
            [concern_select] => sagging_neck
            [treatment] => non_surgical
            [sponsor] => ultherapy
            [cost] => 0
            [before_photo] => Array
                (
                    [target_filename] => rT4uWRPVm9GL28wVzkphUZmqQ.jpg
                    [target_file] => /var/www/vhosts/newlooknow/bootstrap/uploads/rT4uWRPVm9GL28wVzkphUZmqQ.jpg
                    [type] => image/jpeg
                    [size] => 7731
                    [original_filename] => images.jpg
                )

            [contact] => Array
                (
                    [first_name] => Christopher
                    [last_name] => Fitkin
                    [email] => chris@blinkdev.com
                    [zip] => 92780
                    [phone] => 9499391251
                )

        )
	  */

	// dpm($object, "\$object");
	
	$node = new stdClass();
	$node->type = 'lead';
	$node->status = 1;
	$node->uid = 0;
	$node->title = "Lead from Boostrap Workflow";
	$node->promote = 1;
	$node->created = time(); //$new_node['timestamp'];
	$node->timestamp = time(); //$new_node['timestamp'];
	$node->sticky = 0;
	$node->format = 3;
	$node->language = 'en';
	$node->revision = 0;
	
	
	// SET AFFILIATE
	if (isset($workflow['sponsor']) && $workflow['sponsor']>0)
		$node->field_affiliate['und'][0]['nid'] = $workflow['sponsor'];
	
	// if (isset($_SESSION['nln_desktop_v6']['affiliate_id']) && $_SESSION['nln_desktop_v6']['affiliate_id'] != '') {
		// $query = "
			// select *
			// from field_data_field_code
			// where field_code_value = '".addslashes($_SESSION['nln_desktop_v6']['affiliate_id'])."'
		// ";
		// $result = db_query($query);
		// if ($row = $result->fetchObject())
		// {
			// $node->field_affiliate['und'][0]['nid'] = $row->entity_id;
		// }
		
		// if ($_SESSION['nln_desktop_v6']['affiliate_id'] == 'cosmeticare') $node->field_affiliate['und'][0]['nid'] = 3;
	// }
	
	// if (isset($_SESSION['nln_desktop_v6']['affiliate_id']) && $_SESSION['nln_desktop_v6']['affiliate_id'] != '')
	// {
		// $node->field_source['und'][0]['tid'] = 135; // "Affiliate"
	// }
	// else
	// {
		$node->field_source['und'][0]['tid'] = 136; // "Consumer"
	// }
	
	$node->field_are_you_over_18_years_old_['und'][0]['value'] = 1;
	// $node->field_intent['und'][0]['value'] = $_SESSION['nln_desktop_v6']['steps']['step1_welcome']['input']['intent'];
	// $node->field_gender['und'][0]['value'] = $_SESSION['nln_desktop_v6']['steps']['step1_welcome']['input']['gender'];
	
	// TODO DETERMINE TREATMENT INTEREST
	// if ($_SESSION['nln_desktop_v6']['steps']['step1_welcome']['input']['checkbox_1'] == "on")
	// {
		// $node->field_treatment_interest['und'][] = array(
			// 'value' => 0,
		// );
	// }
	
	// if ($_SESSION['nln_desktop_v6']['steps']['step1_welcome']['input']['checkbox_2'] == "on")
	// {
		// $node->field_treatment_interest['und'][] = array(
			// 'value' => 1,
		// );
	// }
	
	
	// TODO Campaign Tracking 	
	// $node->field_aid['und'][] = array(
		// 'value' => $_SESSION['nln_desktop_v6']['steps']['step1_welcome']['input']['aid'],
	// );
	
	// $node->field_utm_source['und'][] = array(
		// 'value' => $_SESSION['nln_desktop_v6']['steps']['step1_welcome']['input']['utm_source'],
	// );
	
	// $node->field_utm_medium['und'][] = array(
		// 'value' => $_SESSION['nln_desktop_v6']['steps']['step1_welcome']['input']['utm_medium'],
	// );
	
	// $node->field_utm_campaign['und'][] = array(
		// 'value' => $_SESSION['nln_desktop_v6']['steps']['step1_welcome']['input']['utm_campaign'],
	// );
	
	// field_patient_id
	$node->field_first_name['und'][0]['value'] = $workflow['contact']['first_name'];
	$node->field_last_name['und'][0]['value'] = $workflow['contact']['last_name'];
	$node->field_email['und'][0]['value'] = $workflow['contact']['email'];
	$node->field_zip_code['und'][0]['value'] = $workflow['contact']['zip'];
	$node->field_phone['und'][0]['value'] = $workflow['contact']['phone'];
	// field_notes
	
//	$node->field_notes['und'][0]['value'] = $object->notes;

	if (isset($workflow['notes'])) {
		$node->field_notes['und'][0]['value'] = $workflow['notes'];
	}

	
	//$node->field_area_of_concern['und'] = array();	
	// $node->field_treatments = array('und');	
	// AREA OF CONCERN
	// dpm($_SESSION['nln_desktop_v6']['steps']['step2_areas']['input']['aoc'], "\$_SESSION['nln_desktop_v6']['steps']['step2_areas']['input']['aoc']");
	$node->field_area_of_concern_v5 = array ('und' => array());
	// foreach($_SESSION['nln_desktop_v6']['steps']['step2_areas']['input']['aoc'] as $aoc_key => $aoc_value)
	// {
	
		$surgery = ($workflow['treatment']=='surgical') ? 1 : 0;
		$non_surgery = ($workflow['treatment']=='non_surgical') ? 1 : 0;
		
		$node->field_treatment_interest['und'][0]['value'] = ($workflow['treatment']=='surgical') ? 0 : 1;
		
		
		// if ($_SESSION['nln_desktop_v6']['steps']['step1_welcome']['input']['checkbox_1'] == "on")
		// {
			// $surgery = 1;
		// }
		
		// if ($_SESSION['nln_desktop_v6']['steps']['step1_welcome']['input']['checkbox_2'] == "on")
		// {
			// $non_surgery = 1;
		// }
		
		// TODO: Set surgical, non-surgical bools
		
		// dpm("adding area of concern tid:$aoc_value");
		$node->field_area_of_concern_v5['und'][] = array(
			'tid' => $workflow['concern_select'],
		);
		

	// }
	
	// TODO: Generate GUID
	// $node->field_url_guid['und'][0]['value'] = _create_guid();
	// $_SESSION['nln_desktop_v6']['steps']['newnode_guid'] = $node->field_url_guid['und'][0]['value'];
	
	// dpm($node, "\$node");
	
	// DEBUG
	// print "<pre>\$_SESSION['nln_desktop_v6'] =>";
	// print print_r($_SESSION['nln_desktop_v6'], true);
	// print "</pre>";
	// print "<pre>\$node =>";
	// print print_r($node, true);
	// print "</pre>";
	// exit();
	
	// $fc_item = entity_create('field_collection_item', array('field_name' => 'field_images'));
	// $fc_item->setHostEntity('node', $node);
	// $fc_wrapper = entity_metadata_wrapper('field_collection_item', $fc_item);
	// $fc_wrapper->field_image_status->set(551);
	// $fc_wrapper->save(TRUE);
	
	node_save($node);
	
	
	// SAVE IMAGE UPLOAD
	$source = $workflow['before_photo']['target_file'];
	$filename = $workflow['before_photo']['target_filename'];
	$dest = 'public://upload/';
	$uri = $dest.$filename;
	// $file = file_save_upload($source, array(), $dest, FILE_EXISTS_RENAME);
		// $file->status = FILE_STATUS_PERMANENT;
		// file_save($file);
		
	$file = file_save((object) array(
		  'filename' => basename($uri),
		  'uri' => $uri,
		  'status' => FILE_STATUS_PERMANENT,
		  'filemime' => file_get_mimetype($uri),
		));
	$fid = $file->fid;
	
	// foreach($_SESSION['nln_desktop_v6']['steps']['step3_photos']['photos'] as $photos_aoc => $photos_fid) {
		$field_collection_value = entity_create('field_collection_item', array('field_name' => 'field_images'));
		$field_collection_value->setHostEntity('node', $node);
		$field_collection_value->field_before_collection['und'][] = array('fid' => $fid);
		$field_collection_value->save();
	// }
	
	/**********************************
	// DEBUG
	**********************************/	
		// print("source => <pre>".print_r($source,true)."</pre>");
		// print("dest => <pre>".print_r($dest,true)."</pre>");
		// print("uri => <pre>".print_r($uri,true)."</pre>");
		// print("file => <pre>".print_r($file,true)."</pre>");
		// print("workflow => <pre>".print_r($workflow,true)."</pre>");
		// print("node => <pre>".print_r($node,true)."</pre>");
		// exit();
	
		// dpm($node, "\$node");
	
	// Queue Email
	$email_response = nln_email__consumer__send_confirmation_email($node->nid, $type='desktop');
	$email_response = nln_email__affiliate__send_confirmation_email($node->nid, $type='desktop');
	$email_response = nln_email__staff__send_confirmation_email($node->nid, $type='desktop');
	
	// Send SMS
	// $sms_response = nln_sms_send_verification($node->nid, $node->field_phone['und'][0]['value']);
	
	return $node;
	
}
?>