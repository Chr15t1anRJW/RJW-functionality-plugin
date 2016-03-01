<?php



/*Lets you add a form to login anywhere*/
function rjw_login_form_anywhere( $atts, $content = null ) {

	extract( shortcode_atts( array('redirect' => ''), $atts ) );



	if (!is_user_logged_in()) {

		$postid = get_the_ID();

		$redirect_url = get_page_link($postid);

		$form = wp_login_form(array('echo' => false, 'redirect' => $redirect_url ));

		$forgotpasslink = '<a href="'.wp_lostpassword_url().'">Forgot Password</a>';

	} 

	

	$a = $form;

	$a .= $forgotpasslink;

	return $a;

}



add_shortcode('loginanywhere', 'rjw_login_form_anywhere');







?>