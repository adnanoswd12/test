<?php 
/* 
Plugin Name: Event And Coupon Mangement
Plugin URI: http://highclickz.com
Description: This is a custom build event and coupon management plugin. It is being build by highclickz.com and will be the property of xxx. 
Version: 3.4.4.1
Author: Adnan
License: GPLv2 or later
*/


add_action('admin_menu', 'cls_genrating_form_UI');
global $wpdb;
function cls_genrating_form_UI(){
	
  add_menu_page('Event Management', 'Form Settings', 'manage_options', 'CLS', 'cls_display_UI_func');
 
  add_submenu_page("CLS", "Create Coupon","Create Coupon", 'manage_options', "my-cls-create-coupon", "cls_coupon_UI");
  
   add_submenu_page("CLS", "All Users","All Users", 'manage_options', "my-cls-check-slug", "cls_check_UI");
     add_submenu_page("CLS", "Sub Users","Sub Users", 'manage_options', "my-cls-sub-user-slug", "cls_sub_user_UI");
	 
     add_submenu_page("CLS", "All Coupons","All Coupons", 'manage_options', "my-cls-show-coupons-slug", "cls_sub_coupons_UI");
  //add_submenu_page("VWO", "Veteran Information", "Veteran Information", 'manage_options', "my-veteraninfo-slug", "abs_veteran_UI");
 // add_submenu_page("VWO", "Ticket Request", "Ticket Request", 'manage_options', "my-ticketrequest-slug", "abs_request_UI");
}

function cls_display_UI_func(){
	  global $wpdb;
	  echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
	  <h2>Form Settings</h2></div>';
	  include_once ( trailingslashit(plugin_dir_path( __FILE__ )).'form_settings.php');
}
function cls_check_UI(){
	  global $wpdb;
	  echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
	  <h2>All Users</h2></div>';
	  include_once ( trailingslashit(plugin_dir_path( __FILE__ )).'check.php');
}
function cls_coupon_UI(){
	  global $wpdb;
	  echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
	  <h2>Create Coupon</h2></div>';
	  include_once ( trailingslashit(plugin_dir_path( __FILE__ )).'create-coupon.php');
     }
function cls_sub_user_UI(){
	  global $wpdb;
	  echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
	  <h2>Sub users</h2></div>';
	  include_once ( trailingslashit(plugin_dir_path( __FILE__ )).'show-sub-users.php');
     }
function cls_sub_coupons_UI(){
	  global $wpdb;
	  echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
	  <h2>All Coupons</h2></div>';
	  include_once ( trailingslashit(plugin_dir_path( __FILE__ )).'show-coupns.php');
     }
 /*

function abs_veteran_UI(){

                 echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
                 <h2>Veteran Information</h2></div>';
				 include_once ( trailingslashit(plugin_dir_path( __FILE__ )).'veteranInfo.php');
 }

function abs_request_UI(){

                 echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
                 <h2>Ticket Request</h2></div>';
				 include_once ( trailingslashit(plugin_dir_path( __FILE__ )).'ticketRequest.php');
 }
*/