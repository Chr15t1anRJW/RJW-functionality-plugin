<?php

/*Adds action to defign plugin*/
add_action( 'admin_menu', 'rjw_add_admin_menu' );
/*Ititiates plugin functions*/
add_action( 'admin_init', 'rjw_settings_init' );

/*Defigning plugin mname and manage options*/
function rjw_add_admin_menu(  ) {

	add_menu_page( 'Red Jacket West Functions', 'Red Jacket West Functions', 'manage_options', 'red_jacket_west_functionality_plugin', 'rjw_options_page' );

}


function rjw_settings_init(  ) {

	register_setting( 'pluginPage', 'rjw_settings' );

	/*Creates Setting for Kill Heartbeat*/
	add_settings_field(
		'rjw_checkbox_field_kill_heartbeat',
		__( 'Kill Heartbeat ', 'rjw-plugin' ),
		'rjw_checkbox_field_kill_heartbeat_render',
		'pluginPage',
		'rjw_pluginPage_section'
	);

/*Admin Pludin Description*/
	add_settings_section(
		'rjw_pluginPage_section',
		__( 'This plugin allows you to enable common functionality that we use at Red Jacket West', 'rjw-plugin' ),
		'rjw_settings_section_callback',
		'pluginPage'
	);


/*Creates setting for Login with email & Username*/
	add_settings_field(
		'rjw_checkbox_field_0',
		__( 'Loggin with Email or Username', 'rjw-plugin' ),
		'rjw_checkbox_field_0_render',
		'pluginPage',
		'rjw_pluginPage_section'
	);


	/*Creates setting for Login anywhere shortcode*/
	add_settings_field(
		'rjw_checkbox_field_2',
		__( 'Log in Anywhere [loginanywhere] ', 'rjw-plugin' ),
		'rjw_checkbox_field_2_render',
		'pluginPage',
		'rjw_pluginPage_section'
	);

	/*Creates setting for Exclude Woo*/
	add_settings_field(
		'rjw_checkbox_field_exclude_woo',
		__( 'Exlude Woo Scripts from normal pages (Scripts will still run on Cart and Checkout) ', 'rjw-plugin' ),
		'rjw_checkbox_field_exclude_woo_render',
		'pluginPage',
		'rjw_pluginPage_section'
	);

	/*Creates setting for Style Login*/
	add_settings_field(
		'rjw_checkbox_field_style_login',
		__( 'Use Site Logo on wp-admin login page ', 'rjw-plugin' ),
		'rjw_checkbox_field_style_login_render',
		'pluginPage',
		'rjw_pluginPage_section'
	);





}


/*Heartbeat checkbox*/
function rjw_checkbox_field_kill_heartbeat_render(  ) {

	$options = get_option( 'rjw_settings' );
	?>
	<input type='checkbox' name='rjw_settings[rjw_checkbox_field_kill_heartbeat]' <?php if(isset($options['rjw_checkbox_field_kill_heartbeat'])){checked( $options['rjw_checkbox_field_kill_heartbeat'], 1 );} ?> value='1'>
	<?php

}


function rjw_checkbox_field_0_render( ) {

	$options = get_option( 'rjw_settings' );
	?>
	<input type='checkbox' name='rjw_settings[rjw_checkbox_field_0]' <?php if(isset($options['rjw_checkbox_field_0'])){checked( $options['rjw_checkbox_field_0'], 1 );} ?> value='1'>
	<?php

}



function rjw_checkbox_field_2_render(  ) {

	$options = get_option( 'rjw_settings' );
	?>
	<input type='checkbox' name='rjw_settings[rjw_checkbox_field_2]' <?php if(isset($options['rjw_checkbox_field_2'])){checked( $options['rjw_checkbox_field_2'], 1 );} ?> value='1'>
	<?php

}

/*Exclude Woo Checkbox*/
function rjw_checkbox_field_exclude_woo_render(  ) {

	$options = get_option( 'rjw_settings' );
	?>
	<input type='checkbox' name='rjw_settings[rjw_checkbox_field_exclude_woo]' <?php if(isset($options['rjw_checkbox_field_exclude_woo'])){checked( $options['rjw_checkbox_field_exclude_woo'], 1 );} ?> value='1'>
	<?php

}

/*Style Login Checkbox*/
function rjw_checkbox_field_style_login_render(  ) {

	$options = get_option( 'rjw_settings' );
	?>
	<input type='checkbox' name='rjw_settings[rjw_checkbox_field_style_login]' <?php if(isset($options['rjw_checkbox_field_style_login'])){checked( $options['rjw_checkbox_field_style_login'], 1 );} ?> value='1'>
	<?php

}





function rjw_settings_section_callback(  ) {

	echo __( 'Check the features you wish to enable.', 'rjw-plugin' );

}


function rjw_options_page(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>Red Jacket West Functionality plugin</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>

	<?php



}

?>
