<?php
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Rumi-app  ' . "\r\n";
$headers .='Content-Type: text/html; charset=UTF-8'."\r\n";
?>
$name=$_POST['Nom'];
$tel=$_POST['phone'];
$message=$_POST['message'];
$to ='admin@Rumi-App.org';
$subject='Email';
$body="<br>de :<br>$name\n <br> tel : $tem\n";
if ($_POST['submit']) {
    if(mail($to, $subject, $message.$body, $headers)) { 
        echo '<p>Merci pour votre email!</p>';
    } else { 
        echo '<p>Oops! erreur , verifiez encore les champs .</p>'; 
    }}?>