<?php

if (isset($_POST['submit'])) {
    $firstname= $_post['first name']
    $lastname= $_post['last name']
    $mailfrom= $_post['mail']
    $message= $_post['message']

$mailTo = "cdsmith@deakin.edu.au"
$headers = "From: ".$mailfrom;
$txt = "You have recieved an e-mail from".$name.".n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend")
}