<?php 
//global $wpdb;
//function custom_registration_function() {
	global $wpdb;
    if ( isset($_REQUEST['submit'] ) ) {
		
     //echo 'it works';
        // sanitize user form input
       // global $nogt, $pogt, $novt;//$povt, $nopt, $popt, $bulk_amount, $bulk_discount;
        $nogt   =   sanitize_text_field( $_REQUEST['nogt'] );
        $poft   =   sanitize_text_field( $_REQUEST['poft'] );
        $novt   =   sanitize_text_field( $_REQUEST['novt'] );
		//echo $nogt,$poft,$novt;
        $povt   =   sanitize_text_field( $_POST['povt'] );
        $nopt   =   sanitize_text_field( $_POST['nopt'] );
        $popt   =   sanitize_text_field( $_POST['popt'] );
        $bulk_amount   =   sanitize_text_field( $_POST['bulk_amount'] );
        $bulk_discount =   sanitize_text_field( $_POST['bulk_discount'] );

		$data =  
		array(
		'nogt' => $nogt,
		'pogt' => $poft,
		'novt' => $novt,
        'povt' => $povt,
        'nopt' => $nopt,
        'popt' => $popt,
        'bulk_amount' => $bulk_amount,
        'bulk_discount' => $bulk_discount   
		);
		 if($wpdb->update( 'wp_form_settings', $data,array('ID' => 1 ))){
			// echo 'yes';
			 }
		
     }

$getdata = $wpdb->get_row("SELECT * FROM `wp_form_settings` WHERE `id` = 1");
//print_r($getdata);

?>

    <form action="" method="post">
    <div>
    <label for="nogt">Numbers of General Tickets <strong>*</strong></label>
    <input type="text" name="nogt" value="<?php    echo  $getdata->nogt; ?>">
    </div>
     
    <div>
    <label for="pogt">Price of General Tickets <strong>*</strong></label>
    <input type="text" name="poft" value="<?php echo $getdata->pogt; ?>">
    </div>
     
    <div>
    <label for="novt">Numbers of Vip Tickets <strong>*</strong></label>
    <input type="text" name="novt" value="<?php echo  $getdata->novt;  ?>">
    </div>
     
    <div>
    <label for="povt">Price of Vip Tickets</label>
    <input type="text" name="povt" value="<?php echo $getdata->povt;  ?>">
    </div>
     
    <div>
    <label for="nopt">Numbers of Platnium Tickets</label>
    <input type="text" name="nopt" value="<?php echo $getdata->nopt; ?>">
    </div>
     
    <div>
    <label for="popt">Price of platinium ticket</label>
    <input type="text" name="popt" value="<?php echo $getdata->popt;  ?>">
    </div>
     
    <div>
    <label for="Bulk Amount">Bulk amount</label>
    <input type="text" name="bulk_amount" value="<?php echo $getdata->bulk_amount;  ?>">
    </div>
     
	 <div>
    <label for="Bulk Discount">Bulk discount</label>
    <input type="text" name="bulk_discount" value="<?php echo $getdata->bulk_discount;  ?>">
    </div>
	
    <input type="submit" name="submit" value="submit"/>
    </form>
  
  
