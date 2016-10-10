<?php

$WorkRequired = $_POST['WorkRequired'];
$Timescale = $_POST['Timescale'];
$Person = $_POST['Person'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$EmailAddress = $_POST['EmailAddress'];
$HouseNumber = $_POST['HouseNumber'];
$Postcode = $_POST['Postcode'];
$Phone = $_POST['Phone'];


$subject = 'New request from webpage "Boilerhub.com"';	

// $headers= "From: noreply <noreply@noreply.ru>\r\n";
// $headers.= "Reply-To: noreply <noreply@noreply.ru>\r\n";
// $headers.= "X-Mailer: PHP/" . phpversion()."\r\n";
$headers.= "MIME-Version: 1.0" . "\r\n";
$headers.= "Content-type: text/plain; charset=utf-8\r\n";

// $headers = "MIME-Version: 1.0" . PHP_EOL .
// "Content-Type: text/html; charset=utf-8" . PHP_EOL .
// 'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
// 'Reply-To: '.$admin_email.'' . PHP_EOL;

$to = "tom@ocere.com";


$message .= "REQUEST DETAILS\n\n";
$message .= "Work Required: $WorkRequired\n";
$message .= "Timescale: $Timescale\n";
$message .= "Person: $Person $FirstName $LastName\n";
$message .= "Email Address: $EmailAddress\n";
$message .= "House Number: $HouseNumber\n";
$message .= "Postcode: $Postcode\n";
$message .= "Phone: $Phone\n";


mail ($to,$subject,$message,$headers);
include("http://boilerhub.com/application/files/5014/7413/0779/amocrm_api.php");
?>