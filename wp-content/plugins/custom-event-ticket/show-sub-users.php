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
$getResults = $wpdb->get_results("SELECT * FROM `wp_ticket_users`");
$getEncode = json_encode($getResults,true);
//print_r($getEncode);
$getDeocdeData = json_decode($getEncode,true);
//print_r($getDeocdeData);

?>
<form method="post" action="">
<select name="nameSelect">
<?php foreach($getDeocdeData as $data){
echo '<option>'.$data['email'].'</option>';	
	}?>
</select>
<input type="submit" name="selectSubmit">
</form>

<?php 
if(isset($_REQUEST['selectSubmit'])){
	$user = $_REQUEST['nameSelect'];
	$getRe = $wpdb->get_results("SELECT * FROM `wp_ticket_users_meta` WHERE `user_email` = '$user'");
$getEn = json_encode($getRe,true);
//print_r($getEncode);
$getDe = json_decode($getEn,true);
//print_r($getDe);
echo '<table>';
echo '  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Company</th>
    
    <th>Job Title</th>
    <th>Phone</th>
    <th>email</th></tr>';  
foreach($getDe as $data){
	//print_r($bigData);
	//foreach($bigData as $data){
	 echo '<tr>';
    echo '<td>'.$data['first_name'].'</td>';
	echo '<td>'.$data['last_name'].'</td>';
    echo '<td>'.$data['company'].'</td>';
	
	echo '<td>'.$data['job_title'].'</td>';
	echo '<td>'.$data['phone'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	echo '</tr>';
	//}
}
echo '</table>';
	
	
	
	}
?>