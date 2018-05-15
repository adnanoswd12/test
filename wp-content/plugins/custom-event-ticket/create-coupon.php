<?php 
global $wpdb;
 if(isset($_REQUEST['submit'])){
	 $coupon_name = $_REQUEST['coupon_name'];
	 $getExistCoupon = $wpdb->get_row( "SELECT * FROM `wp_coupons` WHERE `coupon_name` = '$coupon_name'" );
	 if(empty($getExistCoupon)){
	     $wpdb->insert( 
	        'wp_coupons', 
     	array( 
			'coupon_name' => $_REQUEST['coupon_name'],
			'coupon_percentage' => $_REQUEST['coupon_percentage'],
			'coupon_number' => $_REQUEST['coupon_number'],
			'coupon_status' => 'Active'
		));
	   }
	 else{
	 echo 'This coupon already exists';
	   }
	 }
?>
<form action="" name="couponForm" method="post">
  <label>Coupon Name</label><br>
  <input type="text" name="coupon_name" ><br>
  <label>Coupon Percentage</label><br>
  <input type="number" name="coupon_percentage"><br>
  <label>Coupon Amount</label><br>
  <input type="number" name="coupon_number"><br>
  <input type="submit" name="submit">
</form>

