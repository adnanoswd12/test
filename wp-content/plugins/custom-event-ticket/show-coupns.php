<style>table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style> 
<?php 
if(isset($_REQUEST['changeCoupon'])){
	if($_REQUEST['expireCoupon']){
       $wpdb->update( 'wp_coupons', array('coupon_status' => 'Expire'), array("coupon_name" => $_REQUEST['changeCoupon'])); 
		}
	if($_REQUEST['activeCoupon']){
       $wpdb->update( 'wp_coupons', array('coupon_status' => 'Active'), array("coupon_name" => $_REQUEST['changeCoupon'])); 
		}
	} 
?>
<form action="" method="post">
  <input type="text" name="changeCoupon">
  <input type="submit" name="expireCoupon" value="Expire Coupon">
  <input type="submit" name="activeCoupon" value="Active Coupon">
</form>

<?php 

$getResults = $wpdb->get_results("SELECT * FROM `wp_coupons`");
$getEncode = json_encode($getResults,true);
//print_r($getEncode);
$getDeocdeData = json_decode($getEncode,true);
//print_r($getDeocdeData);

echo '<table>  <tr>
    <th>Coupon Name</th>
    <th>Coupon Percentage</th>
	 <th>Coupon Amount</th>
    <th>Coupon Status</th>
    ';  
foreach($getDeocdeData as $data){
	//print_r($bigData);
	//foreach($bigData as $data){
	 echo '<tr>';
    echo '<td>'.$data['coupon_name'].'</td>';
	echo '<td>'.$data['coupon_percentage'].'</td>';
	echo '<td>'.$data['coupon_number'].'</td>';
    echo '<td>'.$data['coupon_status'].'</td>';
	
	echo '</tr>';
	//}
}
echo '</table>';

?>