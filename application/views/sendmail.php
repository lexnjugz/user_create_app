<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["firstname"]==""||$_POST["lastname"]||$_POST["username"]||$_POST["password"]||$_POST["email"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$to = $_POST['email'];
$user =$_POST['username'];
$pass =$_POST['password'];
$subject = 'successful Registration';
$message = 'Your credentials are:'."\r\n".$user."\r\n".$pass."\r\n";
$headers = 'From: App'. "\r\n"; // Sender's Email
//$headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail($to, $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>