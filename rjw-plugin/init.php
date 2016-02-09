<?php

/*
This file includes all funcunality moduals into the plugin.
*/

//This is the options array
$a = get_option( 'rjw_settings' );

//Admin options page
require_once('inc/adminmenu.php');


//login with email or username
if(isset($a[rjw_checkbox_field_0]) && $a[rjw_checkbox_field_0] === '1'){
require_once('inc/loginUsernameAndEmail.php');
}else{
	}

/*/ Shortcodes
if(isset($a[rjw_checkbox_field_1]) && $a[rjw_checkbox_field_1] === '1'){
require_once('inc/shortcodes.php');
}else{
	}*/

// Loginanywhere form
if(isset($a[rjw_checkbox_field_2]) && $a[rjw_checkbox_field_2] === '1'){
require_once('inc/loginanywhere.php');
}else{
	}

// Exclude WooCommerce Scripts on all pages except Cart & Checkout
if(isset($a[rjw_checkbox_field_exclude_woo]) && $a[rjw_checkbox_field_exclude_woo] === '1'){
require_once('inc/exclude-woo.php');
}else{
	}

// Kills Heartbeat
if(isset($a[rjw_checkbox_field_kill_heartbeat]) && $a[rjw_checkbox_field_kill_heartbeat] === '1'){
require_once('inc/kill-heartbeat.php');
}else{
	}

// Styles the Login Page to not use the Wordpress Logo
if(isset($a[rjw_checkbox_field_style_login]) && $a[rjw_checkbox_field_style_login] === '1'){
require_once('inc/style-login.php');
}else{
	}




?>
