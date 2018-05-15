<?php 
$ip = $_SERVER["REMOTE_ADDR"];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: '.$_SERVER['REQUEST_URI'].' <adnan@outsourcewebdev.com>' . "\r\n";
$to='adnan@outsourcewebdev.com';
$subject="The client from the proposal ".$_REQUEST['p']." has visited the site ".$_SERVER['REQUEST_URI'];
$message='This is his IP Address:'.$ip;
mail($to,$subject,$message,$headers); 
header('Location: https://ca.linkedin.com/in/adnan-safir-975b94b0');

