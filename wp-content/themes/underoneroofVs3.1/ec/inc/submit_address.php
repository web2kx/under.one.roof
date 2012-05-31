<?php

if(isset($_POST['emailsubscription']) && $_POST['emailsubscription'] == "go"){
	$email = $_POST['email'];
	echo storeAddress2($email);
	//echo $email;
}

function storeAddress2($email){
	
	// Validation
	if(!$email){ return "No email address provided"; } 

	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $email)) {
		return "Email address is invalid"; 
	}

	require_once('MCAPI.class.php');
	// grab an API Key from http://admin.mailchimp.com/account/api/
	$api = new MCAPI('af1be40bb4f8ee6ce47757bb66524c95-us4');
	
	// grab your List's Unique Id by going to http://admin.mailchimp.com/lists/
	// Click the "settings" link for the list - the Unique Id is at the bottom of that page. 
	$list_id = "3c43eafba0";

	if($api->listSubscribe($list_id, $email, '') === true) {
		// It worked!
		return 'Success! Check your email to confirm sign up.';
	}else{
		// An error ocurred, return error message	
		return 'Error: ' . $api->errorMessage;
	}
}
?>