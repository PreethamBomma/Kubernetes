<?php
$f = fopen("/var/www/html/messages/messages.txt","a");
fwrite($f, "\n" . $_GET['mes']);
echo 'Thank you, your message will be recorded';
?>

