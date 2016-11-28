<?php
$name    = $_REQUEST['name'];
$email   = $_REQUEST['email'];
$message = $_REQUEST['message'];
if (($name == '') || ($email == '') || ($message == '')) {
    echo 'All fields are required, please check the form again.';
} else {
    $from    = 'From: $name<$email>\r\nReturn-path: $email';
    $subject = 'Message sent using your contact form';
    mail('ryan@createadrenaline.com', $subject, $message, $from);
    echo 'Thanks for contacting us! We will respond to your message soon!';
}
