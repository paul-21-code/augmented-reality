<?php

//require_once 'Mail.php';

$msg="First line of text\nSecond line line of text";
$msg=wordwrap($msg,70);
mail("paulinojulio16@gmail.com", "Mysubject", $msg,"From: paulinojulio56@gmail.com") or die("Error!");echo "Email sent!";

?>