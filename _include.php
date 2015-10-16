<?php


/****************************************/
/* Set Error Reporting 					*/
/****************************************/
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	global $do_not_redirect;
	$do_not_redirect = true;

	

/****************************************/
/* LOAD DRUPAL BOOSTRAP					*/
/****************************************/
	$document_root = '/var/www/vhosts/newlooknow';	
	ini_set('memory_limit', '-1');	
	// $_SERVER['REMOTE_ADDR'] = "127.0.0.1";
	// $_SERVER['DOCUMENT_ROOT'] = $document_root;
	chdir($document_root.'/');
	define("DRUPAL_ROOT", $document_root."/");
	require_once '/var/www/vhosts/newlooknow/includes/bootstrap.inc'; // duplicate for module files
	drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);	
	gc_enable();	
	$admin_account = user_load(1);
	
/****************************************/
/* LOAD PHP FILES						*/
/****************************************/
	require_once('includes/form_submission.php');
	require_once('includes/helpers.php');
	require_once('includes/leads.php');
	
	
/****************************************/
/* START SESSION	 					*/
/****************************************/
	// reset workflow variables
	if (isset($_GET['start'])) $_SESSION['nln_workflow'] = array();
	
	session_start(); 	
	
/****************************************/
/* VIEW SESSION VARIABLES				*/
/****************************************/
	// print("<!-- \$_SESSION ".print_r($_SESSION,true)." -->");
	
	

?>