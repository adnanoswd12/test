<?php 
$name = $_GET['id'];
$ip = $_SERVER["REMOTE_ADDR"];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: '.$_SERVER['REQUEST_URI'].' <adnan@outsourcewebdev.com>' . "\r\n";
$to='adnan@outsourcewebdev.com';
$subject="The ".$name." has reached to the end level ";
$message='This is his IP Address:'.$ip;
mail($to,$subject,$message,$headers); 
header("Location: https://moz.com/blog/how-website-speed-actually-impacts-search-ranking");
?>