<!DOCTYPE html>
<?php 

 //error_reporting(E_ALL &~ E_DEPRECATED);
 
 ?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
        <meta charset="utf-8" />

    <!-- load google web fonts as soon as possible -->
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed'       rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Gentium+Basic'          rel='stylesheet' type='text/css'>

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
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/offcanvas.css">
    <link rel="stylesheet" href="assets/css/app.css?v=9">
    <link rel="stylesheet" href="assets/css/colorbox.css?v=2">
    <link rel="stylesheet" href="assets/css/liquid-slider.css?v=2">

    <script src="assets/js/modernizr.foundation.js"></script>

        <meta property="og:site_name"   content="The Art Of"/>
    <link rel="canonical"           href="https://www.theartof.com/marketing-toronto-2017/register" />
    <meta property="og:url"         content="https://www.theartof.com/marketing-toronto-2017/register"/>
    <meta name="twitter:url"        content="https://www.theartof.com/marketing-toronto-2017/register">
    <meta name="twitter:card"       content="summary">
    <meta name="twitter:site"       content="@theartof">

    <meta property="og:type" content="website">


<link rel="stylesheet" href="assets/css/app-events.css?v=4">

    <!-- Included JS Files (Compressed) -->
    <script src="jquery.js"></script>
    <script src="foundation.min.js"></script>
    <script src="jquery.offcanvas.js"></script>
    <script src="jquery.colorbox-min.js"></script>
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
        <div class="twelve columns">




<!-- Top Right Menu -->
       

            <!-- Logo -->
            <div class="four left mobile-four">
                <a href="#" title="The Change Leadership Conference"><img src="assets/images/Change-Leadership-Global-Logo.png" alt="The Change Leadership Conference" height="36" class="logo"></a>
            </div>
        </div>
    </header>

    <div class="container slider-container">
        <div class="fade"></div>
    </div>

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
        <div class="stripes marketing" style="margin-bottom: 1em;">&nbsp;</div>

        

                    <div class="price-break-message" style="display: inline-block; padding: 20px 20px 20px 50px; margin-bottom: 20px; border: 1px dashed #003366; background: #EAF2FB url('assets/images/star_full.png') no-repeat; background-position: 10px center; width:100%;">
                Groups of <?php echo $bulk_amt?> or more can SAVE $<?php echo $bulk_disc?> off the price of each pass!            </div>
        
        <div class="error-msg flash-warning">
            <span></span>
        </div>

        <form id="register" method="post" action="#">

        <div class="row">
            <div class="four columns push-eight mobile-2">
                <div class="panel">
                    <div id="ticket-box">
                        <h4 style="margin-top:0;">Ticket Quantity</h4>

                        <div class="input select"><label for="gen_quantity">General Tickets <br /><span class='price link-highlight' id='gen-price'><?php echo '$'.$pogt;?></span></label><select name="data[gen_quantity]" id="gen_quantity">
<?php 
   for($i = 0;$i < $generalTickets;$i++){
   echo '<option id="'.$i.'">'.$i.'</option><br>';
   }
   ?>
</select></div><div class="input select"><label for="vip_quantity">VIP Tickets     <br /><span class='price link-highlight' id='vip-price'><?php echo '$'.$povt;?></span></label><select name="data[vip_quantity]" id="vip_quantity">
   <?php 
   for($i = 0;$i < $vipTickets;$i++){
   echo '<option id="'.$i.'">'.$i.'</option><br>';
   }
   ?>
</select></div><div class="input select"><label for="pla_quantity">Platinum Tickets<br /><span class='price link-highlight' id='pla-price'><?php echo '$'.$popt?></span></label><select name="data[pla_quantity]" id="pla_quantity">
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
                        <input name="data[promo]" type="text" size="5" id="promo" />                 
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
<option value="Association">Association</option>
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
</select><input name="data[heard_about_other]" type="text" style="display:none; width: 160px;" placeholder="Care to elaborate?" size="3" id="heard_about_other" /></div>
            </div>
        </div>
  <div id="extra" style="    margin: 0px 0px 50px 0px;
    overflow: hidden;">
    
       <br />
          </div><br>
          
        <br>
        <h4>Credit Card Information</h4>

        <div class="row">
            <div class="eight columns mobile-2 form-fields">
                <div class="input text"><label for="card_name">Name on Card <em>*</em></label><input name="data[card_name]" type="text" class="required" id="card_name" /></div><div class="input select"><label for="card_type">Card Type <em>*</em></label><select name="data[card_type]" class="required" id="card_type">
<option value="V">Visa</option>
<option value="M">Mastercard</option>
<option value="A">Amex</option>
</select><img src="assets/images/visa.png" align="absmiddle" class="credit-card visa" alt="" /><img src="assets/images/mastercard.png" align="absmiddle" class="credit-card mastercard" alt="" /><img src="assets/images/amex.png" align="absmiddle" class="credit-card amex" alt="" /></div>                <div class="input text"><label for="card_number">Card Number <em>*</em></label><input name="data[card_number]" type="text" class="required" id="card_number" /><span id="cvv"> Security Code <em>*</em> <input name="data[card_cvv2]" type="text" class="required" size="3" id="card_cvv2" /><span style='background: #fffccc; font-size: 11px;' id='cvv_note'></span></span></div>
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

        <input id="complete-order" style="padding: 10px 40px 10px 10px;
    display: block;
    background-image: url('assets/images/success.png');
    background-repeat: no-repeat;
    background-position: right center;
    
        font-weight: bold;
    color: green;
    cursor: pointer;" type="submit" value="Complete Order" name="form_submit">
    
    
    
      <div class="secure-icon">
            <span style="padding-top:15px;">The Change Leadership</span>. guarantees your security when buying tickets online. Your data is being transmitted via <b>SSL encryption</b> and handled confidentially on our secure systems. We <b>DO NOT</b> store or save your credit card information. It it used only for the purposes of completing the transaction and then immediately forgotten.
        </div>

        <div class="small">
            <br /><br />
            <p>
                <strong>Refund / Cancellation Policy</strong><br />
                                    Tickets are non-refundable. If you are unable to attend, tickets may be transferred to another person or to a future conference.
                                    <span style="padding-top:15px;">The Change Leadership</span>. reserves the right to cancel a conference prior to the start date or delay the start date due to low enrollment,
                    speaker availability or other uncontrollable circumstances. If for these reasons a conference must be cancelled,<span style="padding-top:15px;">The Change Leadership</span>.
                    will refund only the cost of the conference registration. </p>

            <p style="padding-top:15px;">
                <strong>Privacy Policy</strong><br />
                Personal information collected will be used to fulfill ticket orders, provide information on our future events and publicize the names of client companies. The Change Leadership. does not trade, rent or sell any personal information to third parties. If you wish to be removed from our database, please call (416) 915 4161. For our full Privacy Policy please visit our website at <a href="https://thechangeleadership.com/">https://thechangeleadership.com/</a>.
            </p>
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
		
		$('#calc-subtotal').html( subtotal );
		
        $('#calc-tax').html(    ( ( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 0.13000  );
       $('#calc-total').html(  ( ( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 1.13 );
	 if(tickets < <?php echo json_encode($bulk_amt)?>){
		 $("#fullpromo").show();
	     $(".promo").show();
	    var couponName = $("#promo").val();
		if(couponName){
		console.log(couponName);
        $.post('process.php',{"a_couponName":couponName},function(data){  
		 console.log('data = '+data);
		 if(data == 'error'){
			 
			 //console.log('error');
		   $('#promoError').html('The coupon code is invalid');
			 }
		 else{
		   var total = totalAmount; 
		   console.log(total);
		    $('#promoError').html('');
		   $('#calc-total').html((total/100)*data);
		   $('#calc-total').formatCurrency();
		 }
		},'json');
		}
	   }
	  if(tickets >= <?php echo json_encode($bulk_amt)?>){
		  $("#fullpromo").hide();
		  $(".promo").hide();
		  }
	   var totalAmount =  (( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 1.13;
	   var totalTax =  (( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 0.13000;
		$('#total_amount').val(totalAmount);
		$('#total_tax').val(totalTax);
		$('#total_ticket').val(tickets);
		
		    // check max processing
        if( ( ( gen_quantity * per_gen_ticket ) + ( vip_quantity * per_vip_ticket ) + ( pla_quantity * per_pla_ticket ) ) * 1.13 > 10000 ) {
            alert( "For orders greater than $10,000, please contact\nyour \"Art of.\" representative at 1.866.99.ART.OF");
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
if(tickets==0){
	$("#extra").html('');
	}
if(tickets>0){
	  var html = "";
	  html +=  '<h4>Extra Attendee Information</h4> Please fill out the below information for each additional conference attendee.';
	 
	  for(i=0;i<tickets;i++){
		  
		    html +=   '<div id="attendee-'+i+'" class="attendee" style="width:760px;">';
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
	 }
		 
</script>
            </section>

<section id="rightside" class="three columns hide-for-small" style="padding-top: 1em; padding-right: 1em;" >
                    
    <div class="coming-soon">

        <div class="padding">
        
            <h2 class="city bg-marketing">Toronto</h2>

            <p class="date marketing" style="margin: 0;"><span class="venue" style="font-size: 16px; line-height: 22px;">DATE</span><br> May 31, 2017 </p>
            <p class="time" style="font-size: 13px; font-weight: normal; line-height: 15px; margin: 0 0 8px 0; text-align: center;">9:30am - 3:30pm EDT </p>
        </div>

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
                    
        <h5 align="center" style="margin:0px;">Professional Networker Pass - $547 + HST</h5>
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
        <footer style="background:#202324;">
            
        <div class="row" style="padding: 0 10px;">

            <div class="six columns" style="font-size: 11px;">
               
            </div>

            <div class="six columns" style="font-size: 11px;">
                         </div>
        </div>
        </footer>
    </div>

    <!-- Initialize JS Plugins -->
    <script src="assets/js/app.js?v=3"></script>


</body>
</html>

 <script>
 
  </script>
<?php   
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
	if(empty($getExistEmail)){
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

	 for($i=0;$i<=($extraData['tickets']-1);$i++){
		$firstvarname = $extraData['attendee_'.$i.'_first_name'];
		$lastnamevar = $extraData['attendee_'.$i.'_last_name'];
		$companyvar = $extraData['attendee_'.$i.'_company'];
	    $jobvar = $extraData['attendee_'.$i.'_title'];
		$phonevar = $extraData['attendee_'.$i.'_phone'];
		$evar = $extraData['attendee_'.$i.'_email'];
		
		$metaInsert = mysqli_query($mysqli,"INSERT INTO `wp_ticket_users_meta` ( `first_name`, `last_name`, `company`, `job_title`, `phone`, `email`, `user_email`) VALUES ( '$firstvarname', '$lastnamevar', '$companyvar', '$jobvar', '$phonevar', 
		'$evar',
		'$email')");
		if(!$metaInsert){
			echo mysqli_error();
			}
	  /*  $wpdb->insert( 
	        'wp_ticket_users_meta', 
     	array( 
			'first_name' => $extraData[$firstvarname], 
			'last_name' => $extraData[$lastnamevar],
			'company'  => $extraData[$companyvar],
			'job_title' => $extraData[$jobvar],
			'phone' => $extraData[$phonevar],
			'email' => $extraData[$emailvar],
			'user_email' => $allData['email'],
			
		));
		}*/
	}
	  }
	}
?>