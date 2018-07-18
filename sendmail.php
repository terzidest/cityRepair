<?php
require 'PHPMailer-master/PHPMailerAutoload.php';


// Fetching data that is entered by the user
$email = $_REQUEST['Email'];
$password ="6979248855";
$emailto = "smartdrink1@gmail.com";
$message = $_REQUEST['Message'];
$subject = "City of Athens";
$name = $_REQUEST['Name'];
$surname = $_REQUEST['Surname'];
$telephone = $_REQUEST['Telephone'];
$formdata = "User with these data: Name: ".$name.", Surname:" .$surname.", Telephone: ".$telephone.", Email. :".$email." has sent the following message: ".$message;
// Configuring SMTP server settings
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $emailto;
$mail->Password = $password;

// Email Sending Details
$mail->addAddress($emailto);
$mail->Subject = $subject;
$mail->msgHTML($formdata);

// Success or Failure
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message sent!</p>';
}
 


?>