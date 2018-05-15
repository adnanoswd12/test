<?php 
//if($_POST['a_couponName']){
//$connect = mysql_connect('e3173230416512.db.3230416.hostedresource.com:3312','e3173230416512','dn{1{Z5LncX');
//$connect = mysql_connect('localhost','root','');

$mysqli = new mysqli('e3173230416512.db.3230416.hostedresource.com','e3173230416512','dn{1{Z5LncX','e3173230416512','3312');
//$mysqli = new mysqli('localhost','root','','oswd');

 
 
// make blog the current database  
//$db_selected = mysqli_select_db('e3173230416512', $connect);  
//$db_selected = mysql_select_db('oswd', $connect);  
/*if (!$db_selected) {  
    die (mysql_error());  
}  */
	  $couponName = $_POST['a_couponName'];
	   
	  
	  $couponExistsQuery = mysqli_query($mysqli,"SELECT * FROM `wp_coupons` WHERE `coupon_name` = '$couponName' AND `coupon_status` = 'Active' ");
	  
	  $couponExists =  mysqli_fetch_array($couponExistsQuery);
	  

  if(empty($couponExists)){
	  //check if coupon exists
	  echo json_encode('error');
	  exit;
	  }
  else{
	  
	 
	  if(!empty($couponExists['coupon_percentage'])){
		   $coupon_percentage = $couponExists['coupon_percentage'];		   
		   $ar = array('percentage',$coupon_percentage);
		  }
	  else{
		   $coupon_percentage = $couponExists['coupon_number'];
		   $ar = array('number',$coupon_percentage);
		  }
	  echo json_encode($ar);
	  exit;
	  }
  //}
	  ?>