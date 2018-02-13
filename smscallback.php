<?php
$deliverto = "myemail@wherever.com";
$from = $_REQUEST['from'];
$to = $_REQUEST['to'];
$message = $_REQUEST['message'];
$subject="SMS Message from $from to $to";
$comment="SMS Message\nFROM: $from\nTO: $to\nMSG: $message\n--------\n";
mail($deliverto, $subject, $comment, $from);
?>
