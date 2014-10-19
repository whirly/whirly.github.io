<?php
// check if fields passed are empty
if(empty($_POST['first_name'])  ||
   empty($_POST['last_name'])   ||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email'];
$message = $_POST['message'];




// -------------------------------------------
// --- ENTER YOUR EMAIL ADDRESS HERE
// -------------------------------------------

$to = 'youremail@example.com';

// -------------------------------------------



$email_subject = "Contact form submitted by:  $name";
$email_body = "You have received a new message. \n\n".
				  " Here are the details:\n \nName: $first_name $last_name \n ".
				  "Email: $email_address\n Message \n $message";
$headers = "From: $to\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>