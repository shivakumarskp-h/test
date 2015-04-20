<?php
/******** START OF CONFIG SECTION ******info@novelidealnfotech.com*/
  
  $sendto  ="Abhijith@homeadda.co.in,Sahadev@homeadda.co.in,info@homeadda.co.in";
  $subject = "ENQUIRY FROM Brigade Northridge";
  $channelmailid="Abhijith@homeadda.co.in,Sahadev@homeadda.co.in,info@homeadda.co.in";
// Select if you want to check form for standard spam text
  $SpamCheck = "Y"; // Y or N
  $SpamReplaceText = "*content removed*";
// Error comment prited if spam form attack found
$SpamErrorcomment = "<p align=\"center\"><font color=\"red\">Malicious code content detected.
</font><br><b>Your IP Number of <b>".getenv("REMOTE_ADDR")."</b> has been logged.</b></p>";


/******** END OF CONFIG SECTION *******/
//HTTP_POST_VARS
  $name = $_POST['name']; 
  $email = $_POST['email']; 
  $phone = $_POST['phone']; 
  $phone1 = $_POST['phone1']; 
  $comment = $_POST['comment'];
  
  
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
if ($SpamCheck == "Y") {	

	   
// Check for Website URL's in the form input boxes as if we block website URLs from the form,
// then this will stop the spammers wastignt ime sending emails


if (preg_match("/http/i", "$name")) {echo "$SpamErrorcomment"; exit();} 
if (preg_match("/http/i", "$email")) {echo "$SpamErrorcomment"; exit();} 
if (preg_match("/http/i", "$phone")) {echo "$SpamErrorcomment"; exit();} 
if (preg_match("/http/i", "$comment")) {echo "$SpamErrorcomment"; exit();}
 

// Patterm match search to strip out the invalid charcaters, this prevents the mail injection spammer 
  $pattern = '/(;|\||`|>|<|&|^|"|'."\n|\r|'".'|{|}|[|]|\)|\()/i'; // build the pattern match string 
                            
  $name = preg_replace($pattern, "", $name);
  $email = preg_replace($pattern, "", $email);
  $phone = preg_replace($pattern, "", $phone);
   $comment = preg_replace($pattern, "", $comment); 
  
// Check for the injected headers from the spammer attempt 
// This will replace the injection attempt text with the string you have set in the above config section
  $find = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i"); 
  $name = preg_replace($find, "$SpamReplaceText", $name); 
  $email = preg_replace($find, "$SpamReplaceText", $email);
    $phone = preg_replace($find, "$SpamReplaceText", $phone);
	 $comment = preg_replace($find, "$SpamReplaceText", $comment);
	 
    
// Check to see if the fields contain any content we want to ban
 if(stristr($name, $SpamReplaceText) !== FALSE) {echo "$SpamErrorcomment"; exit();} 
 if(stristr($phone, $SpamReplaceText) !== FALSE) {echo "$SpamErrorcomment"; exit();} 
 
 // Do a check on the send email and subject text
 if(stristr($sendto, $SpamReplaceText) !== FALSE) {echo "$SpamErrorcomment"; exit();} 
 if(stristr($subject, $SpamReplaceText) !== FALSE) {echo "$SpamErrorcomment"; exit();} 
}
// Build the email body text
  $emailcontent = " 
----------------------------------------------------------------------------------------------------- 
   WEBSITE ENQUIRY FROM Brigade Northridge
----------------------------------------------------------------------------------------------------- 
Name: 	$name

Phone: 	$phone- $phone1

Email : $email

Comment: ENQUIRY FROM http://www.brigade-northridge.location-price-bangalore.com 
		
		$comment


_____________________________________________________________________________ 
End of Email 
"; 


// Check the email address enmtered matches the standard email address format
if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$", $email)) { 
  echo "<p>It appears you entered an invalid email address</p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
} 

 elseif (!trim($name)) { 
  echo "<p>Please go back and enter a Name</p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
} 
 

 elseif (!trim($email)) { 
  echo "<p>Please go back and enter an Email</p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
} 

// Sends out the email or will output the error comment 
 elseif (mail($sendto, $subject, $emailcontent, $headers) ) { 
  echo "<p><b>Thank You $name</b></p><p>We will be in touch as soon as possible.</p>";
  echo "<script language='javascript'> showpage();</script>";
 } 




?>