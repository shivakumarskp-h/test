<?php

function sendFeedback($name, $email, $phone1, $phone, $comment) {


  $sendto  			="Abhijith@homeadda.co.in,Sahadev@homeadda.co.in,info@homeadda.co.in";
  $subject 			= "ENQUIRY FROM Brigade Northridge";
  $channelmailid	="Abhijith@homeadda.co.in,Sahadev@homeadda.co.in,info@homeadda.co.in";
/******** END OF CONFIG SECTION *******/
//HTTP_POST_VARS

//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		
		$output = json_encode(array( //create JSON data
			'type'=>'error', 
			'text' => 'Sorry Request must be Ajax POST'
		));
		die($output); //exit script outputting json data
    }  

  
  $consumerheaders = "From: $channelmailid\n";
  $consumerheaders . "MIME-Version: 1.0\n"
		   . "Content-Transfer-Encoding: 7bit\n"
		   . "Content-type: text/plain;  charset = \"iso-8859-1\";\n\n";

  $headers = "From: $email\n" 
			. "MIME-Version: 1.0\n"
		   . "Content-Transfer-Encoding: 7bit\n"
		   . "Content-type: text/plain;  charset = \"iso-8859-1\";\n\n";
		   
$from="contact@homeadda.co.in";
$headers = 'From:' . $name." <".$from.">\r\n" .
    'Reply-To:' . $name." <".$email.">\r\n" .
	//'Return-Path:' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  $purl= curPageURL();
	   
// Build the email body text
  $emailcontent = " 
----------------------------------------------------------------------------------------------------- 
   WEBSITE ENQUIRY FROM Brigade Northridge
----------------------------------------------------------------------------------------------------- 
Name: 	$name

Phone: 	$phone1- $phone

Email : $email

Comment: ENQUIRY FROM  $purl 
		
		$comment


_____________________________________________________________________________ 
End of Email 
"; 

//Sanitize input data using PHP filter_var().
	$name		= filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$email		= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$phone1	= filter_var($_POST["phone1"], FILTER_SANITIZE_NUMBER_INT);
	$phone	= filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
	//$subject		= filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
	$comment		= filter_var($_POST["comment"], FILTER_SANITIZE_STRING);
	
if(strlen($name)<=2){ // If length is less than 4 it will output JSON error.
		$output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
		die($output);
	}
	else if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{
	$output = json_encode(array('type'=>'error', 'text' => 'Only letters allowed in Name'));
		die($output);
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //email validation
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
		die($output);
	}
if(!filter_var($phone1, FILTER_VALIDATE_INT)){ //check for valid numbers in country code field
		$output = json_encode(array('type'=>'error', 'text' => 'Enter only digits in country code'));
		die($output);
	}
	if(!preg_match("/^([0-9]{10})$/",$phone)){ //check for valid numbers in phone number field
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid phone number!'));
		die($output);
	}
	
	if(strlen($comment)<3){ //check emtpy message
		$output = json_encode(array('type'=>'error', 'text' => 'Too short message! Please enter something.'));
		die($output);
	}
	
	$send_mail= mail($sendto, $subject, $emailcontent, $headers);
	
if(!$send_mail)
	{
		//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
		$output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
		die($output);
	}else{
		$output = json_encode(array('type'=>'message', 'text' => 'Hi '.$name .' Thank you for your email'));
		die($output);
	}
}

sendFeedback($_POST['name'], $_POST['email'], $_POST['phone1'], $_POST['phone'], $_POST['comment']);


function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"];
 }
 
 return $pageURL;
}

?>