<?php

header('Content-Type:text/html; charset=UTF-8');

// read the variables form the string, (this is not needed with some servers).
$subject = $_REQUEST["subject"];
$sender = $_REQUEST["sender"];

$name = $_REQUEST["name"];
$message = $_REQUEST["message"];

// include all information in the message.
$full_message = $name."\n\n"."message:"."\n".$message;
$message= $full_message;


// remove the backslashes that normally appears when entering " or '
$sender = stripslashes($sender); 
$subject = stripslashes($subject); 
$message = stripslashes($message); 



// send the email, make sure you replace email@yourserver.com with your email address
if(isset($message) and isset($subject) and isset($sender))
{
	mail("benny0309@hotmail.com", $subject, $message, "From: $sender");
header('Location: '.$uri.'index1.html');
}
?>