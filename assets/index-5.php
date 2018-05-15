<?php 
require_once 'CallerService.php';
ob_start();
 ?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
        <meta charset="utf-8" />

    <!-- load google web fonts as soon as possible -->
    <link href='//fonts.googleapis.com/css?family=Montserrat:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Patua+One'          rel='stylesheet' type='text/css'>

    <!-- http://t.co/dKP3o1e -->
    <meta name="HandheldFriendly"   content="True" />
    <meta name="MobileOptimized"    content="320"  />
    <meta name="viewport"           content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="cleartype"    content="on" />
    <meta name="robots"             content="NOODP">
    <meta name="googlebot"          content="NOODP">
    <meta name="bitly-verification" content="b6545d69c93b"/>

    <title>Register for The Change Leadership Conference | The Change Leadership Conference - Toronto - 2017 </title>
    <!-- Included CSS Files (Compressed) -->
    <link rel="stylesheet" href="assets/css/foundation.css?v=16">
    <link rel="stylesheet" href="assets/css/app.css?v=18">

    <script src="assets/js/modernizr.foundation.js"></script>



<link rel="stylesheet" href="assets/css/app-events.css?v=9">

    <!-- Included JS Files (Compressed) -->
    <script src="jquery.js"></script>
    <script src="foundation.min.js"></script>
    <script src="jquery.validate.min.js"></script>
    <script src="jquery.format-currency.min.js"></script>

      </head>
<?php 

 
global $wpdb;
$mysqli = new mysqli('e3173230416512.db.3230416.hostedresource.com','e3173230416512','dn{1{Z5LncX','e3173230416512','3312');
//$mysqli = new mysqli('localhost','root','','oswd');
if ($mysqli->connect_errno) {
    throw new Exception($mysqli->connect_error, $mysqli->connect_errno);
}
$mysqli->set_charset('utf8');
//$connect = mysql_connect('e3173230416512.db.3230416.hostedresource.com:3312','e3173230416512','dn{1{Z5LncX');
//$connect = mysql_connect('localhost','root','');
/*if (!$connect) {  
    die('Not connected : ' . mysql_error());  
}  */
  
// make blog the current database  
//$db_selected = mysql_select_db('e3173230416512', $connect);  
//$db_selected = mysql_select_db('oswd', $connect);  
//if (!$db_selected) {  
  //  die (mysql_error());  
//}  
//if(isset($_POST['a_couponName'])){
	//echo json_encode('hey');
	/*  exit;
  $couponName = $_POST['a_couponName'];
  $couponExistsQuery = mysql_query("SELECT * FROM `wp_coupons` WHERE `coupon_name` = '$couponName' AND `coupon_status` = 'Active' ");
 $couponExists =  mysql_fetch_array($couponExistsQuery);
 echo json_encode($couponExists);
	  exit;
  if(empty($couponExists)){
	  //check if coupon exists
	  echo json_encode('error');
	  exit;
	  }
  else{
	  $coupon_percentage = $couponExists['coupon_percentage'];
	  echo json_encode($coupon_percentage);
	  exit;
	  }*/
  //}
 //$couponExists = mysqli_query($mysqli,'SELECT * FROM `wp_coupons`');
 //print_r(mysqli_fetch_array($couponExists));
//  echo 'couponExists';print_r($couponExists);
  $gData = mysqli_query($mysqli,"SELECT * FROM `wp_form_settings` WHERE `id` = '1' ");
 if (!$gData) {
    printf("Error: %s\n", mysqli_error($mysqli));
    exit();
}
  $getData = mysqli_fetch_array($gData);
 // print_r($row);
  $generalTickets = $getData['nogt'];
  $vipTickets = $getData['novt'];
  $platiniumTickets = $getData['nopt'];
  $pogt = $getData['pogt'];
  $povt = $getData['povt'];
  $popt = $getData['popt'];
  $bulk_disc = $getData['bulk_discount'];
  $bulk_amt = $getData['bulk_amount'];
  ?>
  <body id="" class="off-canvas slide-nav register microsite microsite-marketing">
    
    <!-- Header Content -->
        <!-- Mobile Menu -->

    <!-- Header Content -->
    <header id="header" class="row">
    <div class="vsv" align="center"><a href="https://thechangeleadership.com/"><img src="assets/images/1.png"></a></div>
<br>
<br>

  </header>


    <!-- Flyout Container -->
    <div role="main">

        <!-- Body Content -->
        <div class="row" id="content">
            <section class="nine columns body" id="main">
                <!-- Body Content -->
                
<div class="row">
    <div class="twelve columns content" id="content-rollup">
<!--        <div class="article-title bg-marketing">
            <h1 style="color:#fff; padding: 0px; margin: 0em .5em; font-weight: normal; font-size: 36px; padding: 0.5em 0 0.2em 0;">Register for The Change Leadership Conference</h3>
        </div>-->

        

                    
        
        <div class="error-msg flash-warning">
            <span></span>
        </div>

        <form id="register" method="post" action="#">

        <div class="row">
            <div class="four columns push-eight mobile-2">
            
            <div class="price-break-message" style="display: inline-block; padding: 25px 25px 25px 90px; margin-bottom: 20px; background: #D03602 url('assets/images/bulk.png') no-repeat; color:#FFF; background-position: 10px center; width:100%; font-size: 16px;">
        Group Discounts - $<?php echo $bulk_disc?> off each ticket when you buy <?php echo $bulk_amt?> or more!
                 </div>
            
            
                <div class="panel">
                    <div id="ticket-box">
                        <h4 style="margin-top:0;">Ticket Quantity</h4>

 <div class="input select"><label for="gen_quantity">General Pass<br /><span class='price link-highlight' id='gen-price'><?php echo '$'.$pogt;?></span></label><select name="data[gen_quantity]" id="gen_quantity">
<?php 
   for($i = 0;$i < $generalTickets;$i++){
   echo '<option id="'.$i.'">'.$i.'</option><br>';
   }
   ?>
</select></div><div class="input select"><label for="vip_quantity">Professional Pass<br /><span class='price link-highlight' id='vip-price'><?php echo '$'.$povt;?></span></label><select name="data[vip_quantity]" id="vip_quantity">
   <?php 
   for($i = 0;$i < $vipTickets;$i++){
   echo '<option id="'.$i.'">'.$i.'</option><br>';
   }
   ?>
</select></div><div class="input select"><label for="pla_quantity">VIP Pass<br /><span class='price link-highlight' id='pla-price'><?php echo '$'.$popt?></span></label><select name="data[pla_quantity]" id="pla_quantity">
<?php 
   for($i = 0;$i < $platiniumTickets;$i++){
   echo '<option id="'.$i.'">'.$i.'</option><br>';
   }
   ?>
</select></div>
                        
      <input type="hidden" id="per_gen_ticket" value="<?php echo $pogt?>">
      <input type="hidden" id="per_vip_ticket" value="<?php echo $povt?>">
      <input type="hidden" id="per_pla_ticket" value="<?php echo $popt?>">
      <input type="hidden" id="bulk_gen_ticket" name="bulk_gen_ticket" value="<?php echo ($pogt-$bulk_disc)?>" />
      <input type="hidden" id="bulk_vip_ticket" name="bulk_vip_ticket" value="<?php echo ($povt-$bulk_disc)?>" />
      <input type="hidden" id="bulk_pla_ticket" name="bulk_pla_ticket" value="<?php echo ($popt-$bulk_disc)?>" />
      <input type="hidden" id="total_tax" name="data[total_tax]" >
      <input type="hidden" id="total_ticket" name="extra_data[tickets]" >
      <input type="hidden" id="total_amount" name="data[total_amount]" >
      <input type="hidden" id="saving" name="data[saving]">

                        <div class="input text">
                            <label>Sub-Total</label>
                            <span id="calc-subtotal"></span>
                        </div>

                        <div class="input text" >
                            
                                                            <label>Tax (13% HST)</label>
                                                        <span id="calc-tax"></span>
                        </div>

                        <div class="input text">
                            <label>Total</label>
                            <span id="calc-total" style="font-weight:bold;"></span>
                        </div>

                        <div class="input text">
                            <label>Savings</label>
                            <span id="calc-savings" style="color:green; font-style:italic; font-size: 12px;"></span>
                        </div>
                        <br clear="all">

                  </div>

                    <div class="center" id="fullpromo"><a href="javascript:void(0);" id="show-promo">Have a Promo Code?</a></div>

                    <div class="input text promo">
                        <label>Promo Code</label>
                        <input name="data[promo]" type="text" size="8" id="promo" />                 
                               <div class="apply-promo">
                            <a href="#" id='applyCoupon'>apply</a>
                            
                   
                        </div>
                   <p id="promoError"></p>
                    </div>
                    
                </div>

                <div id="bogo-in-effect" style="display:none; font-size: 11px; color:#444; line-height: 1.4em; font-weight: bold; text-align: center;">
                    Your <span style="color:green;">FREE</span> ticket(s) will be included in this transaction
                </div>
            </div>

            <div class="eight columns pull-four mobile-2 form-fields">
                <div class="input radio"><strong>Salutation <em>*</em></strong><input type="radio" name="data[salutation]" id="SalutationMrs" value="Mrs." checked="checked"  /><label for="SalutationMrs">Mrs.</label><input type="radio" name="data[salutation]" id="SalutationMs" value="Ms."  /><label for="SalutationMs">Ms.</label><input type="radio" name="data[salutation]" id="SalutationMiss" value="Miss"  /><label for="SalutationMiss">Miss</label><input type="radio" name="data[salutation]" id="SalutationMr" value="Mr."  /><label for="SalutationMr">Mr.</label></div>                <div style="clear:left;"></div>
                <div class="input text"><label for="first_name">First Name <em>*</em></label><input name="data[first_name]" type="text" class="required" id="first_name" /></div><div class="input text"><label for="last_name">Last Name <em>*</em></label><input name="data[last_name]" type="text" class="required" id="last_name" /></div><div class="input text"><label for="company">Company <em>*</em></label><input name="data[company]" type="text" class="required" id="company" /></div><div class="input select"><label for="industry">Industry <em>*</em></label><select name="data[industry]" class="required" id="industry">
<option value="">Please Select</option>
<option value="Agriculture & Forestry">Agriculture &amp; Forestry</option>
<option value="Arts, Entertainment & Recreation">Arts, Entertainment &amp; Recreation</option>
<option value="Association">Association</option>
<option value="Business Services">Business Services</option>
<option value="Biotechnology">Biotechnology</option>
<option value="Computer Hardware & Software">Computer Hardware &amp; Software</option>
<option value="Consumer Services">Consumer Services</option>
<option value="Education">Education</option>
<option value="Energy, Mining & Utilities">Energy, Mining &amp; Utilities</option>
<option value="Financial Services">Financial Services</option>
<option value="Food & Beverage">Food &amp; Beverage</option>
<option value="Government/Public Service">Government/Public Service</option>
<option value="Health Care">Health Care</option>
<option value="Manufacturing">Manufacturing</option>
<option value="Insurance">Insurance</option>
<option value="Tourism, Lodging and Hospitality">Tourism, Lodging and Hospitality</option>
<option value="Media">Media</option>
<option value="Professional Services (Marketing, Consulting, etc)">Professional Services (Marketing, Consulting, etc)</option>
<option value="Real Estate & Construction">Real Estate &amp; Construction</option>
<option value="Retail">Retail</option>
<option value="Telecommunications">Telecommunications</option>
<option value="Transportation">Transportation</option>
<option value="Wholesale">Wholesale</option>
<option value="-">-----------------------------</option>
<option value="Other">Other / Not Listed</option>
</select></div><div class="input text"><label for="title">Job Title <em>*</em></label><input name="data[title]" type="text" class="required" id="title" /></div><div class="input text"><label for="phone">Phone <em>*</em></label><input name="data[phone]" type="text" class="required" id="phone" />Ext: <input name="data[extension]" type="text" size="3" id="extension" /></div><div class="input text"><label for="email">Email <em>*</em></label><input name="data[email]" type="text" class="required email" id="email" /></div><div class="input text"><label for="address_1">Address <em>*</em></label><input name="data[address_1]" type="text" class="required" id="address_1" /></div><div class="input text"><label for="address_2">Unit / Suite #</label><input name="data[address_2]" type="text" id="address_2" /></div><div class="input text"><label for="city">City <em>*</em></label><input name="data[city]" type="text" class="required" id="city" /></div><div class="input select"><label for="province">Province <em>*</em></label><select name="data[province]" class="required" id="province">
<option value="">Please Select</option>
<option value="AB">Alberta</option>
<option value="BC">British Columbia</option>
<option value="MB">Manitoba</option>
<option value="NB">New Brunswick</option>
<option value="NL">Newfoundland and Labrador</option>
<option value="NS">Nova Scotia</option>
<option value="ON">Ontario</option>
<option value="PE">Prince Edward Island</option>
<option value="QC">Quebec</option>
<option value="SK">Saskatchewan</option>
<option value="NT">Northwest Territories</option>
<option value="NU">Nunavut</option>
<option value="YT">Yukon</option>
<option value="-">--------------------</option>
<option value="US">Outside Canada</option>
</select></div><div class="input text"><label for="postal_code">Postal Code <em>*</em></label><input name="data[postal_code]" type="text" class="required" id="postal_code" /></div><div class="input text"><label for="country">Country <em>*</em></label><input name="data[country]" type="text" class="required" value="Canada" id="country" /></div><div class="input select"><label for="heard_about">How did you hear about us? <em>*</em></label><select name="data[heard_about]" class="required" id="heard_about">
<option value="">Please Select</option>
<option value="Account Executive">Account Executive</option>
<option value="AssociationACMP">Association -  ACMP</option>
<option value="AssociationCCBF">Association – CCBF</option>
<option value="AssociationHRPA">Association – HRPA</option>
<option value="AssociationPMI">Association – PMI</option>
<option value="AssociationSLF ">Association – SLF</option>
<option value="AssociationTODN">Association - TODN</option>
<option value="AssociationOTHER">Association - OTHER</option>
<option value="Newspaper">Newspaper</option>
<option value="Colleague">Colleague</option>
<option value="Event Website">Event Website</option>
<option value="Radio">Radio</option>
<option value="Search Engine">Search Engine</option>
<option value="Poster">Poster</option>
<option value="University">University</option>
<option value="Company Intranet">Company Intranet</option>
<option value="Human Resources">Human Resources</option>
<option value="LinkedIn">LinkedIn</option>
<option value="Facebook">Facebook</option>
<option value="Twitter">Twitter</option>
<option value="Phone Call">Phone Call</option>
<option value="Media">Media</option>
<option value="Word of Mouth">Word of Mouth</option>
<option value="Other">Other</option>
</select><input name="data[heard_about_other]" type="text" style="display:none; width: 360px;" placeholder="Tell us where?" size="3" id="heard_about_other" /></div>
            </div>
        </div>
  <div id="extra" style="    margin: 20px 0px 20px 0px;
    overflow: hidden;">
    
       <br />
          </div><br>
          
        
        <h4>Credit Card Information</h4>

        <div class="row">
            <div class="eight columns mobile-2 form-fields">
                <div class="input text"><label for="card_name">Name on Card <em>*</em></label><input name="data[card_name]" type="text" class="required" id="card_name" /></div><div class="input select"><label for="card_type">Card Type <em>*</em></label><select name="data[card_type]" class="required" id="card_type">
<option value="Visa">Visa</option>
<option value="MasterCard">Mastercard</option>
<option value="Amex">Amex</option>
</select><img src="assets/images/visa2.png" align="absmiddle" class="credit-card visa" alt="" /><img src="assets/images/mastercard2.png" align="absmiddle" class="credit-card mastercard" alt="" /><img src="assets/images/amex2.png" align="absmiddle" class="credit-card amex" alt="" /></div>                <div class="input text"><label for="card_number">Card Number <em>*</em></label><input name="data[card_number]" type="text" class="required" id="card_number" /><span id="cvv"> Security Code <em>*</em> <input name="data[card_cvv2]" type="text" class="required" size="3" id="card_cvv2" /><span style='background: #fffccc; font-size: 11px;' id='cvv_note'></span></span></div>
                <div class="input select"><label for="card_expire">Expiry Date <em>*</em></label>
                    <select name="data[card_expire_month]" id="card_expire_month">
<option value="01" selected="selected">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select> / <select name="data[card_expire_year]" id="card_expire_year">
<option value="2016">2016</option>
<option value="2017" selected="selected">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
</select>                </div>
            </div>
        </div>

      

        <div class="error-msg flash-warning">
            <span></span>
        </div>
<br>
<br>

        <input id="complete-order" style="padding: 20px 20px 20px 20px;
    display: block;
    background-color:#CB5527;
    border-radius: 5px;
    
        font-weight: bold;
        margin-bottom:30px;
        font-size:24px;
        font-family: 'Patua One', Arial, Helvetica, sans-serif;
    color: #ffffff;
    cursor: pointer;" type="submit" value="Complete Registration" name="form_submit">
    
    
    
      <div class="secure-icon">
            <span style="padding-top:15px;">We pride ourselves </span>in providing you the highest level of security when buying tickets online by partnering with industry leaders. Your data will be transmitted via <strong>SSL encryption</strong> and confidentially handled. Your information will only be used  for completing this transaction. We <strong>DO NOT</strong> store or save your credit card information.
        </div>

        <div class="small">
            <br /><br />
            
             <p style="padding-top:15px;">
                <strong>Privacy Policy</strong><br />
                We will use personal data collected to complete your ticket orders, send you information about future events as well as communicate the names of our client firms. Personal data provided to The Change Leadership will not be shared (i.e. traded, rented or sold) with individuals or other companies. If you prefer to be removed from our database, you will have the option to do so at any time using the unsubscribe button.
            </p>
            <p>
                <strong>Refund / Cancellation Policy</strong><br />
                                    Tickets are non-refundable. Ticket holders unable to attend the event are able to transfer the ticket to another person or to a future conference. The Change Leadership reserves the right to cancel the conference prior to the start date or change the event date at any time for reasons such as speaker unavailability or circumstances beyond our control. If this event is cancelled due to the afore-mentioned reasons, The Change Leadership will refund your registration costs only. </p>

           
        </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        // form validation
        $("#register").validate({
            ignore: ".ignore",
            invalidHandler: function(e, validator) {
                var errors = validator.numberOfInvalids();
                if (errors) {
                    var message = errors == 1
                        ? '<b>It looks like you missed just 1 required field.</b><br />Please fill it in before re-submitting the form.'
                        : '<b>It looks like you missed ' + errors + ' required fields.</b><br />Please review the highlighted fields to make sure they are complete before re-submitting the form.';
                    $("div.error-msg span").html(message);
                    $("div.error-msg").show();
                } else {
                    $("div.error-msg").hide();
                }
            },

            submitHandler: function(form) {

                if( ( $('#gen_quantity').val() + $('#vip_quantity').val() + $('#pla_quantity').val() ) >= 1 ) {
                    $("#complete-order").attr('disabled', 'disabled');
                    $("#complete-order span").attr( 'class', 'wait' );
                    $("#complete-order span").html('Processing Credit Card - Please Wait ...');
                    $("#complete-order").css('color', '#666');
                    form.submit();
                } else {
                    alert( "Please select at least one ticket to purchase");
                }
            },

            errorPlacement: function(error, element) {
                if( element.attr('id') == 'email' ) {
                    error.insertAfter( element );
                }
            }
        });

        $("#complete-order").attr('disabled', false );

        // keep running ticket total up to date
       /* update_total();
	
        $('#gen_quantity').change( function(){ update_total(); });
        $('#vip_quantity').change( function(){ update_total(); });
        $('#pla_quantity').change( function(){ update_total(); });*/

        // clicking on credit card icons should change drop-down value
        $('img.mastercard').click( function(){ $("#card_type").val( 'M' ); });
        $('img.visa').click( function(){ $("#card_type").val( 'V' ); });
        $('img.amex').click( function(){ $("#card_type").val( 'A' ); });

        $('#show-promo').click( function() {
            $('#show-promo').hide();
            $('div.promo').show();
        });

        // heard about "other"
        heard_about_change();
        $('#heard_about').change( function() {
            heard_about_change();
        });


        
        $('#reload').click( function() {
            $('#ticket-box').load(
                "/marketing-toronto-2017/register/ticket_box",
                { gen_quantity: $('#gen_quantity').val(), vip_quantity: $('#vip_quantity').val(), pla_quantity: $('#pla_quantity').val(), promo: $('#promo').val() },
                function() { update_total(); }
            );
        });
    });

    function heard_about_change() {
        var value = $('#heard_about').val();
        if( value == 'Other' ) {
            $('#heard_about_other').show();
            $('#heard_about_other').focus();
        } else {
            $('#heard_about_other').hide();
        }
    }

   update_total();
    $('#applyCoupon').click(function(){
        console.log('hey');
		  update_total();
		
      })
     
     $('#gen_quantity').on('change', function() {
        update_total();
     })
	 $('#vip_quantity').on('change', function() {
        update_total();
     })
	 $('#pla_quantity').on('change', function() {
        update_total();
     })
	 function update_total(){
		gen_quantity   = $('#gen_quantity').val();
        vip_quantity   = $('#vip_quantity').val();
        pla_quantity   = $('#pla_quantity').val();
        tickets        = parseInt( gen_quantity ) + parseInt( vip_quantity ) + parseInt( pla_quantity );
	
		 per_gen_ticket = ( tickets >= <?php echo json_encode($bulk_amt)?> ) ? $('#bulk_gen_ticket').val() : $('#per_gen_ticket').val();
        per_vip_ticket = ( tickets >= <?php echo json_encode($bulk_amt)?> ) ? $('#bulk_vip_ticket').val() : $('#per_vip_ticket').val();
        per_pla_ticket = ( tickets >= <?php echo json_encode($bulk_amt)?>) ? $('#bulk_pla_ticket').val() : $('#per_pla_ticket').val();

		subtotal = ( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket );
		 var totalAmount =  (( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 1.13;
		$('#total_amount').val(totalAmount);
		var totalTax =  (( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 0.13000;
		$('#total_tax').val(totalTax);
		$('#calc-subtotal').html( subtotal );
		
        $('#calc-tax').html(    ( ( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 0.13000  );
       $('#calc-total').html(  ( ( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 1.13 );
	    
	 if(tickets < <?php echo json_encode($bulk_amt)?>){
		 $("#fullpromo").show();
	     $(".promo").show();
	    var couponName = $("#promo").val();
		if(couponName){
		
        $.post('process.php',{"a_couponName":couponName},function(data){  
		 console.log('data = '+data[0]);
		 if(data == 'error'){
			 
			 //console.log('error');
		   $('#promoError').html('The coupon code is invalid');
			 }
		 else{
		   var total = totalAmount; 
		   
		   $('#promoError').html('');
		  if('percentage' == data[0]){
			console.log(subtotal);
			c = ((subtotal/100)*data[1]);
			var subtotaal = (subtotal-c);
			var newCouponPercentTax = (subtotaal*13)/100;
			$('#total_tax').val(newCouponPercentTax.toFixed(2));
			$('#calc-tax').html(newCouponPercentTax);
		    $('#calc-subtotal').html(subtotaal);
			
			
			t = subtotaal + newCouponPercentTax;
			console.log(t.toFixed(2));
			$('#total_amount').val(t.toFixed(2));
			total = t;
			unsaved = subtotaal;
		    $('#calc-total').html(t);
			$('#calc-savings').html('$'+c);
		    $('#calc-total').formatCurrency();
			$('#calc-tax').formatCurrency();
		    $('#calc-subtotal').formatCurrency();
			$('#calc-savings').formatCurrency();
		   }
		   if('number' == data[0]){
	       if(tickets < <?php echo json_encode($bulk_amt)?>){
			 
		   c = data[1]*tickets;
		   subtotal = subtotal-c;
		   var newCouponNumTax = (subtotal*13)/100;
		   $('#total_tax').val(newCouponNumTax.toFixed(2));
		   $('#calc-tax').html(newCouponNumTax);
	       $('#calc-subtotal').html(subtotal);
		   var t = subtotal + newCouponNumTax;
		   console.log(t.toFixed(2));
		   $('#total_amount').val(t.toFixed(2));
		   total = t;
		   $('#calc-total').html(t);
		   $('#calc-savings').html('$'+c);
			   }
		   $('#calc-total').formatCurrency();
		   $('#calc-tax').formatCurrency();
		   $('#calc-subtotal').formatCurrency();
		   $('#calc-savings').formatCurrency();
		   }
		 }
		},'json');
		}
	   }
	  if(tickets >= <?php echo json_encode($bulk_amt)?>){
		  $("#fullpromo").hide();
		  $(".promo").hide();
		  }
	   //var totalAmount =  (( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 1.13;
	  // var totalTax =  (( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 0.13000;
	
		
		$('#total_ticket').val(tickets);
		
		    // check max processing
        if( ( ( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 1.13 > 10000 ) {
            alert( "For orders greater than $10,000, please contact\nyour \"The Change Leadership.\" representative at +1 647 706 1607");
        }
      unsaved_total = ( gen_quantity * <?php  echo json_encode($pogt);?> ) + ( vip_quantity * <?php  echo json_encode($povt);?>) + ( pla_quantity * <?php  echo json_encode($popt);?> );
	        //   strike-through general price on discount
        if( per_gen_ticket < <?php  echo json_encode($pogt);?>  ) {
            $('#gen-price').html( '<del style="color:red;">$<?php  echo json_encode($pogt);?> </del> ' + '<em style="color:green; font-style: normal;">$' + per_gen_ticket + '</em>' );
        } else {
            $('#gen-price').html( '$' + parseFloat(per_gen_ticket).toFixed(2) );
        }

        // strike-through vip price on discount
        if( per_vip_ticket < <?php  echo json_encode($povt);?>  ) {
            $('#vip-price').html( '<del style="color:red;">$<?php  echo json_encode($povt);?> </del> ' + '<em style="color:green; font-style: normal;">$' + per_vip_ticket + '</em>' );
        } else {
            $('#vip-price').html( '$' + parseFloat(per_vip_ticket).toFixed(2) );
        }

        // strike-through platinum price on discount
        if( per_pla_ticket < <?php  echo json_encode($popt);?>  ) {
            $('#pla-price').html( '<del style="color:red;">$<?php  echo json_encode($popt);?> </del> ' + '<em style="color:green; font-style: normal;">$' + per_pla_ticket + '</em>' );
        } else {
            $('#pla-price').html( '$' + parseFloat(per_pla_ticket).toFixed(2) );
        }

	
     // do we have a bogo situation?
        
     // set savings value
	
      $('#calc-savings').html( unsaved_total  - subtotal );
	  // format all total fields as currency
		  $('#calc-subtotal').formatCurrency();
	  	  $('#calc-tax').formatCurrency();
	  	  $('#calc-total').formatCurrency();
	  	  $('#calc-savings').formatCurrency();
if(tickets== 1){
	$("#extra").html('');
	}
if(tickets>1){
	  var html = "";
	  html +=  '<h4>Additional Attendee Information</h4> Please fill out the below information for each additional conference attendee.';
	 
	  for(i=1;i<(tickets);i++){
		  
		    html +=   '<div id="attendee-'+i+'" class="attendee" style="width:760px;padding-top:20px;">';
             html +=   ' <div style="width:125px;float:left;">';
                 html +=   '        <label>First Name</label>';
          html +=   '<input name="extra_data[attendee_'+i+'_first_name]" type="text" class="ignore" style="width: 105px;" id="attendee_'+i+'_first_name" />                    </div>';

          html +=   '           <div style="width:125px;float:left;">';
 html +=   ' <label>Last Name</label> <input name="extra_data[attendee_'+i+'_last_name]" type="text" class="ignore" style="width: 105px;" id="attendee_'+i+'_last_name" />                    </div>';

        html +=   '             <div style="width:125px;float:left;">';
              html +=   ' <label>Company</label><input name="extra_data[attendee_'+i+'_company]" type="text" class="ignore" style="width: 105px;" id="attendee_'+i+'_company" />                    </div>';

          html +=   '           <div style="width:125px;float:left;">';
           html +=   '    <label>Job Title</label> <input name="extra_data[attendee_'+i+'_title]" type="text" class="ignore" style="width: 105px;" id="attendee_'+i+'_title" />                    </div>';

           html +=   '          <div style="width:125px;float:left;">';
            html +=   '              <label>Phone</label><input name="extra_data[attendee_'+i+'_phone]" type="text" class="ignore" style="width: 105px;" id="attendee_'+i+'_phone" />                    </div>';

             html +=   '        <div style="width:125px;float:left;">';
             html +=   '                 <label>Email</label><input name="extra_data[attendee_'+i+'_email]" type="text" class="email ignore" style="width: 105px;" id="attendee_'+i+'_email" />  </div>';
                   html +=   '      </div><br><br>';
		  }
		
	  $("#extra").html(html);
		 }
	 //console.log($("#calc-total").html());
	 }
		 
</script>
            </section>

<section id="rightside" class="three columns hide-for-small" style="padding-top: 1em; padding-right: 1em;" >
                    
    <div class="coming-soon">

<!--        <div class="padding">
        
            
          <p class="date marketing" style="margin: 0;"><span class="venue" style="font-size: 16px; line-height: 22px;">DATE</span><br> May 31, 2017 </p>
            <p class="time" style="font-size: 13px; font-weight: normal; line-height: 15px; margin: 0 0 8px 0; text-align: center;">9:30am - 3:30pm EDT </p>
        </div>-->

        <div class="padding">
        <div data-link-location="/marketing-toronto-2017/details#where">
        <p class="date-loc">
        <span class="venue" style="font-size: 16px; line-height: 22px; text-align:center;">Metro Toronto Convention Centre</span> &nbsp;
<a href="https://www.google.com/maps?hl=en&q=43.6438286,-79.38678920000001&sll=43.6438286,-79.38678920000001&z=13&markers=43.6438286,-79.38678920000001" target="_blank">View Map</a><br>
        </p>
        
        </div>
        </div>

        <div class="padding" style="padding-top: 20px;">
        <h5 align="center" style="margin:0px;">General Pass - $397 + HST</h5>
        
        <div class="register-ticket-desc general-admission">
        <ul>
        <li>Session with John Maxwell</li>
		<li>Session with Jeremy Gutsche</li>
		<li>Expert Panel Discussions</li>
        <li>Tea and Coffee Included</li>
        <li>Change Leadership Brochure/Magazine</li>
        <li>Book Signing Opportunities with Speakers</li>
        <li>Product and Service Discounts</li>
</ul>
        <p></p>
        </div>
                    
        <h5 align="center" style="margin:0px;">Professional Pass - $547 + HST</h5>
        <div class="register-ticket-desc vip-admission">
  <ul>
        <li>Session with John Maxwell</li>
        <li>Session with Jeremy Gutsche</li>
        <li>Expert Panel Discussions</li>
        <li>Tea and Coffee Included</li>
        <li>Change Leadership Brochure/Magazine</li>
        <li>Product and Service Discounts</li>
        <li>Book Signing Opportunities with Speakers</li>
        <li>Complimentary Copies of Speakers’ Books</li>
        <li>Reserved Seating</li>
        <li>Professional Networking Lunch</li>
        <li>Express Entry</li>
        </ul>
        </div>
                    
        <h5 align="center" style="margin:0px;">VIP Pass - $647 + HST</h5>
        <div class="register-ticket-desc platinum-admission">
<ul>
        <li>Session with John Maxwell</li>
        <li>Session with Jeremy Gutsche</li>
        <li>Expert Panel Discussions</li>
        <li>Tea and Coffee Included</li>
        <li>Change Leadership Brochure/Magazine</li>
        <li>Product and Service Discounts</li>
        <li>Book Signing Opportunities with Speakers</li>
        <li>Complimentary Copies of Speakers’ Books</li>
        <li>Professional Networking Lunch</li>
        <li>Express Entry</li>
        <li>Front Row Reserved Seating</li>
        <li>Leadership Breakfast Session with John Maxwell on Creating a Culture of Change</li>
        <li>Photo Opportunities with John Maxwell</li>
        <li>Limited Seating</li>
        </ul>
        </div>
        
        </div>
        </div>                

    
    <div class="sidebar-bottom"></div> </section>
    
    <div class="sidebar-bottom"></div>            </section>
        </div>
        <br><br><br>

       <!-- Footer -->
        <footer style="background:#545454;">
            
        <div class="row" style="padding: 0 10px;">
<div style="padding:20px; padding-bottom:30px; color:#cccccc;" class="copyright"> © 2017 The Change Leadership. All Rights Reserved. The Change Leadership. Suite 5700, 100 King Street West. Toronto, ON M5X 1C7</div>
            <div class="six columns" style="font-size: 11px;">
               
            </div>

            <div class="six columns" style="font-size: 11px;">
                         </div>
        </div>
        </footer>
    </div>

    <!-- Initialize JS Plugins 
    <script src="assets/js/app.js?v=3"></script>-->


</body>
</html>

 <script>
 
  </script>
<?php   
//echo 'out';
   
//echo 'out';
if(isset($_POST['form_submit'])){
	
	$allData = $_REQUEST['data'];
	//print_r($_REQUEST['data']);
	$extraData = $_REQUEST['extra_data'];
	//echo 'Extra Data = ';print_r($extraData);
	$getEmail = $allData['email'];
	$getExistEmailQuery = mysqli_query($mysqli, "SELECT * FROM `wp_ticket_users` WHERE `email` = '$getEmail'" );
	$getExistEmail = mysqli_fetch_array($getExistEmailQuery);
	//print_r($getExistEmail);
	//if(empty($getExistEmail)){
		$first_name = $allData['first_name']; 
		$last_name = $allData['last_name'];
		$company =  $allData['company'];
		$industry = $allData['industry'];
		$job_title = $allData['title'];
		$phone = $allData['phone'];
		$email = $allData['email'];
		$address_1 = $allData['address_1'];
		$address_2 = $allData['address_2'];
		$city = $allData['city'];
		$province = $allData['province'];
		$postal_code = $allData['postal_code'];
		$country = $allData['country'];
		$how_did_you_hear = $allData['heard_about'];
		$gen_quantity = $allData['gen_quantity'];
		$vip_quantity = $allData['vip_quantity'];
		$pla_quantity = $allData['pla_quantity'];
		$totalTax = $allData['total_tax'];
		$totalAmount = $allData['total_amount'];
		$insertTicket = mysqli_query($mysqli,"INSERT INTO `wp_ticket_users` (`first_name`, `last_name`, `company`, `industry`, `job_title`, `phone`, `email`, `address_1`, `address_2`, `city`, `province`, `postal_code`, `country`, `how_did_you_hear`, `gen_quantity`, `vip_quantity`, `pla_quantity`, `totalTax`, `totalAmount`) VALUES ('$first_name','$last_name','$company','$industry'
		,'$job_title'
		,'$phone'
		,'$email'
		,'$address_1'
		,'$address_2'
		,'$city'
		,'$province'
		,'$postal_code'
		,'$country'
		,'$how_did_you_hear'
		,'$gen_quantity'
		,'$vip_quantity'
		,'$pla_quantity'
		,'$totalTax'
		,'$totalAmount')");
		if(!$insertTicket){
			echo mysqli_error();
			}
$selectTicket =  mysqli_query($mysqli,"SELECT * FROM `wp_ticket_users` WHERE `email` = '$email'");

$getTicket = mysqli_fetch_array($selectTicket);
$ticketID = '100'.$getTicket['user_id'];
/*** Get required parameters from the web form for the request ***/

$paymentType ='Sale';
$firstName =urlencode($allData['first_name']);
$lastName =urlencode($allData['last_name']);
$creditCardType =urlencode($allData['card_type']);
$creditCardNumber = urlencode($allData['card_number']);
$expDateMonth =urlencode($allData['card_expire_month']);

//Month must be padded with leading zero
$padDateMonth = str_pad($expDateMonth, 2, '0', STR_PAD_LEFT);

$expDateYear =urlencode( $allData['card_expire_year']);
$cvv2Number = urlencode($allData['card_cvv2']);
$amount = urlencode($totalAmount);
$currencyCode="CAD";
/*echo 'totalAmount = '.round($totalAmount).'<br>';
echo 'creditCardType = '.$creditCardType.'<br>';
echo 'creditCardNumber = '.$creditCardNumber.'<br>';
echo 'cvv2Number = '.$cvv2Number.'<br>';
echo 'expDateMonth = '.$expDateMonth.'<br>';*/
/* Construct the request string that will be sent to PayPal.
   The variable $nvpstr contains all the variables and is a
   name value pair string with & as a delimiter */

$nvpstr="&PAYMENTACTION=$paymentType&AMT=$amount&CREDITCARDTYPE=$creditCardType&ACCT=$creditCardNumber&EXPDATE=".$padDateMonth.$expDateYear."&CVV2=$cvv2Number&FIRSTNAME=$firstName&COUNTRYCODE=US&CURRENCYCODE=$currencyCode";

/* Make the API call to PayPal, using API signature.
   The API response is stored in an associative array called $resArray */
$resArray=hash_call("doDirectPayment",$nvpstr);

//print_r($resArray);
/* Display the API response back to the browser.
   If the response from PayPal was a success, display the response parameters'
   If the response was an error, display the errors received using APIError.php.
*/

$ack = strtoupper($resArray["ACK"]);
//echo $ack;
if($ack!="SUCCESS")  {
	
    $_SESSION['reshash']=$resArray;
	echo 'Error '.$resArray['L_LONGMESSAGE0'];
	//$location = "confirmation.php?flag=2";
	//	 header("Location: $location");
   }
if($ack=="SUCCESS")  {
	$_SESSION['reshash']="SUCCESS";
	
	$transactionId = $resArray["TRANSACTIONID"];
	$amount = $resArray["AMT"];
	$paypalordertime = $resArray["TIMESTAMP"];

}   
$totalTickets = $gen_quantity+$pla_quantity+$vip_quantity;
//$participantsEmail[] = $email;
$allNames[] = $first_name.' '.$last_name;
if($totalTickets> 1){
//echo 'Total Tickets = '.$extraData['tickets'];
	 for($i=1;$i<=($totalTickets-1);$i++){
		$firstvarname = $extraData['attendee_'.$i.'_first_name'];
		$lastnamevar = $extraData['attendee_'.$i.'_last_name'];
		$companyvar = $extraData['attendee_'.$i.'_company'];
	    $jobvar = $extraData['attendee_'.$i.'_title'];
		$phonevar = $extraData['attendee_'.$i.'_phone'];
		$evar = $extraData['attendee_'.$i.'_email'];
		$participantsEmail[] = $evar;
		$allNames[] = $firstvarname.' '.$lastnamevar;
		
		
		$metaInsert = mysqli_query($mysqli,"INSERT INTO `wp_ticket_users_meta` ( `first_name`, `last_name`, `company`, `job_title`, `phone`, `email`, `user_email`) VALUES ( '$firstvarname', '$lastnamevar', '$companyvar', '$jobvar', '$phonevar', 
		'$evar',
		'$email')");
		if(!$metaInsert){
			echo mysqli_error();
			}
	}
}

//echo 'all emails = ';print_r($participantsEmail);
//echo 'all names = ';print_r($allNames);


$stringParticipant = implode(",",$allNames);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From:  The Change Leadership <info@thechangeleadership.com>' . "\r\n";
$to=$email;
$message = 'Dear '.$first_name.', <br><br>Thank you for registering for The Change Leadership Conference. We have a great event planned and know that you will find great value in learning strategies, tools and time-proven tactics to help you in leading change and innovation.<br><br> <strong>Registration Information</strong><br><br>Participant Name (s): '.$stringParticipant.'<br>Amount Paid: $'.$amount.'<br>General Quantity : '.$gen_quantity.'<br>Professional Quantity : '.$vip_quantity.'<br>VIP Quantity : '.$pla_quantity.'<br><br>Order Number: '.$transactionId.'<br>
Ticket Number: '.$ticketID.'<br><br><strong>Event Start Times</strong><br>General and Professional Passes - 9.30am<br>
VIP Passes - 8.00am <br><br><strong>Please arrive 30 mins early</strong> for registration and to settle in, as well as tea and coffee will be served before the start for you to network. <br><br><strong>Venue</strong><br>Metro Toronto Convention Centre<br>John Bassett Theatre<br>255 Front Street West<br>North Building<br>Toronto, ON M5V<br><br>Here is a link to a map <a href="https://www.google.com/maps?hl=en&q=43.6438286,-79.38678920000001&sll=43.6438286,-79.38678920000001&z=13&markers=43.6438286,-79.38678920000001" target="_blank">View Map</a>. <br><br>Follow us on social media to stay updated on the event, and as we share more of what you can look forward to.<br><br>Twitter: <a href="https://twitter.com/thechangelead">www.twitter.com/thechangelead</a><br>Facebook: <a href="https://www.facebook.com/thechangeleadership">www.facebook.com/thechangeleadership</a><br>Instagram: <a href="https://www.instagram.com/thechangeleadership/">www.instagram.com/thechangeleadership</a><br><br>To enter for a chance to win some fantastic prizes, be sure to share and discuss on social media using #ChangeLeadershipTO<br><br><br>If you have any questions please contact us on Info@TheChangeLeadership.com or  +1 (416) 915 4161<br><br><br>
Thank you and see you at the event!<br><br>The Change Leadership';

$subject = "Your Ticket for The Change Leadership Conference";
//echo $message;
mail($to,$subject,$message,$headers);

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From:  <info@thechangeleadership.com>' . "\r\n";
	$to = 'info@thechangeleadership.com';
	$subject = "Your Ticket to The Change Leadership Event";
	$message = 'Thank you for registering for The Change Leadership Conference. We have a great event planned and know that you will find great value in learning strategies, tools and time-proven tactics to help you in leading change and innovation.<br><br> <strong>Registration Information</strong>,<br><br>Participant Name (s): '.$stringParticipant.'<br>Amount Paid: $'.$amount.'<br>General Quantity : '.$gen_quantity.'<br>Professional Quantity : '.$vip_quantity.'<br>VIP Quantity : '.$pla_quantity.'<br><br>Order Number: '.$transactionId.'<br>
Ticket Number: '.$ticketID.'<br><br><strong>Event Start Times</strong><br>General and Professional Passes - 9.30am<br>
VIP Passes – 8.00am <br><br><strong>Please arrive 30 mins early</strong> for registration and to settle in, as well as tea and coffee will be served before the start for you to network. <br><br><strong>Venue</strong><br>Metro Toronto Convention Centre<br>John Bassett Theatre<br>255 Front Street West<br>North Building<br>Toronto, ON M5V<br><br><br>Here is a link to a map <a href="https://www.google.com/maps?hl=en&q=43.6438286,-79.38678920000001&sll=43.6438286,-79.38678920000001&z=13&markers=43.6438286,-79.38678920000001" target="_blank">View Map</a>.<br><br>Follow us on social media to stay updated on the event, and as we share more of what you can look forward to.<br><br>Twitter: <a href="https://twitter.com/thechangelead">www.twitter.com/thechangelead</a><br>Facebook: <a href="https://www.facebook.com/thechangeleadership">www.facebook.com/thechangeleadership</a><br>Instagram: <a href="https://www.instagram.com/thechangeleadership/">www.instagram.com/thechangeleadership</a><br><br>To enter for a chance to win some fantastic prizes, be sure to share and discuss on social media using #ChangeLeadershipTO<br><br>If you have any questions please contact us on Info@TheChangeLeadership.com or  +1 (416) 915 4161<br><br><br>Thank you and see you at the event!<br><br>The Change Leadership';
	
mail($to,$subject,$message,$headers);

foreach($participantsEmail as $e){

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: The Change Leadership <info@thechangeleadership.com>' . "\r\n";
	$to = $e;
	$subject = "Your Ticket to The Change Leadership Event";
	$message = 'Thank you for registering for The Change Leadership Conference. We have a great event planned and know that you will find great value in learning strategies, tools and time-proven tactics to help you in leading change and innovation.<br><br> <strong>Registration Information</strong>,<br><br>Participant Name (s): '.$stringParticipant.'<br>Amount Paid: $'.$amount.'<br>General Quantity : '.$gen_quantity.'<br>Professional Quantity : '.$vip_quantity.'<br>VIP Quantity : '.$pla_quantity.'<br><br>Order Number: '.$transactionId.'<br>
Ticket Number: '.$ticketID.'<br><br><strong>Event Start Times</strong><br>General and Professional Passes - 9.30am<br>
VIP Passes – 8.00am <br><br><strong>Please arrive 30 mins early</strong> for registration and to settle in, as well as tea and coffee will be served before the start for you to network. <br><br><strong>Venue</strong><br>Metro Toronto Convention Centre<br>John Bassett Theatre<br>255 Front Street West<br>North Building<br>Toronto, ON M5V<br><br><br>Here is a link to a map <a href="https://www.google.com/maps?hl=en&q=43.6438286,-79.38678920000001&sll=43.6438286,-79.38678920000001&z=13&markers=43.6438286,-79.38678920000001" target="_blank">View Map</a>.<br><br>Follow us on social media to stay updated on the event, and as we share more of what you can look forward to.<br><br>Twitter: <a href="https://twitter.com/thechangelead">www.twitter.com/thechangelead</a><br>Facebook: <a href="https://www.facebook.com/thechangeleadership">www.facebook.com/thechangeleadership</a><br>Instagram: <a href="https://www.instagram.com/thechangeleadership/">www.instagram.com/thechangeleadership</a><br><br>To enter for a chance to win some fantastic prizes, be sure to share and discuss on social media using #ChangeLeadershipTO<br><br>If you have any questions please contact us on Info@TheChangeLeadership.com or  +1 (416) 915 4161<br><br><br>Thank you and see you at the event!<br><br>The Change Leadership';
	mail($to,$subject,$message,$headers);
	   }
	

header("Location: thankyou.php?fname=$first_name&paypalOrder=$transactionId&lname=$last_name&gen_qty=$gen_quantity&vip_qty=$vip_quantity&pla_qunatity=$pla_quantity&ticketname=$ticketID&paypalAmt=$amount&paypalordertime=$paypalordertime");
	}
	
	  
	//}
?>