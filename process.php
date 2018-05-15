<?php 
//if($_POST['a_couponName']){
$connect = mysql_connect('e3173230416512.db.3230416.hostedresource.com:3312','e3173230416512','dn{1{Z5LncX');
//$connect = mysql_connect('localhost','root','');
if (!$connect) {  
    die('Not connected : ' . mysql_error());  
}  
  
// make blog the current database  
$db_selected = mysql_select_db('e3173230416512', $connect);  
//$db_selected = mysql_select_db('oswd', $connect);  
if (!$db_selected) {  
    die (mysql_error());  
}  
	  $couponName = $_POST['a_couponName'];
	  
	  $couponExistsQuery = mysql_query("SELECT * FROM `wp_coupons` WHERE `coupon_name` = '$couponName' AND `coupon_status` = 'Active' ");
	  $couponExists =  mysql_fetch_array($couponExistsQuery);
	
  if(empty($couponExists)){
	  //check if coupon exists
	  echo json_encode('error');
	  exit;
	  }
  else{
	  $coupon_percentage = $couponExists['coupon_percentage'];
	  echo json_encode($coupon_percentage);
	  exit;
	  }
  //}
	  ?>