<style>
table {
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
<table >
  <tr>
   <th>Ticket Number</th>
   <th>First Name</th>
 
    <th>Last Name</th>
    <th>Company</th>
    <th>Industry</th>
    <th>Job Title</th>
    <th>Phone</th>
    <th>email</th>
    <th>address 1</th>
    <th>address 2</th>
    <th>city</th>
     <th>province</th>
      <th>postal_code</th>
       <th>country</th>
        <th>how did you hear</th>
         <th>General Tickets</th>
          <th>Vip Tickets</th>
          <th>Platinium Tickets</th>
          <th>Total </th>
   
  </tr>
<?php 
$getResults = $wpdb->get_results("SELECT * FROM `wp_ticket_users`");
$getEncode = json_encode($getResults,true);
//print_r($getEncode);
$getDeocdeData = json_decode($getEncode,true);
//print_r($getDeocdeData);
foreach($getDeocdeData as $data){
	echo '<tr>';
    echo '<td>'.'100'.$data['user_id'].'</td>';
	echo '<td>'.$data['first_name'].'</td>';
	echo '<td>'.$data['last_name'].'</td>';
    echo '<td>'.$data['company'].'</td>';
	echo '<td>'.$data['industry'].'</td>';
	echo '<td>'.$data['job_title'].'</td>';
	echo '<td>'.$data['phone'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	echo '<td>'.$data['address_1'].'</td>';
	echo '<td>'.$data['address_2'].'</td>';
	echo '<td>'.$data['city'].'</td>';
	echo '<td>'.$data['province'].'</td>';
	echo '<td>'.$data['postal_code'].'</td>';
	echo '<td>'.$data['country'].'</td>';
	echo '<td>'.$data['how_did_you_hear'].'</td>';
	echo '<td>'.$data['gen_quantity'].'</td>';
	echo '<td>'.$data['vip_quantity'].'</td>';
	echo '<td>'.$data['pla_quantity'].'</td>';
	echo '<td>'.$data['totalAmount'].'</td>';
  echo '</tr>';
	}
?>
</table>