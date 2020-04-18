<?php

//create Variables to store form data
$name = $_POST["name"];
//$contact = $_POST["contact"];
$phone = $_POST["phone"];
$e_mail = $_POST["e_mail"];
$query = $_POST["query"];

//compose email
$to = "sandranmanuel@gmail.com";
$subject = "Contact from webside";
$message = "You have received a new email from $name 
Contact Number: $phone 
Email: $e_mail  
Query: $query";
$from = $e_mail;
$headers = $e_mail;

//send email
mail($to,$subject,$message,$headers);

//Redirect to page query_confirmed.php
header( 'Location: thanks.php') ;
?>