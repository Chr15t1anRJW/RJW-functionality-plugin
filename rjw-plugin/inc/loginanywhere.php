<style>
#user_pass {
    width: 95%;
}
</style>

<?php



/*Lets you add a form to login anywhere*/
function rjw_login_form_anywhere( $atts, $content = null ) {

	extract( shortcode_atts( array('redirect' => ''), $atts ) );

	if (!is_user_logged_in()) { 

 
		$postid = get_the_ID();

		$redirect_url = get_page_link($postid);

		$form = wp_login_form(array('echo' => false, 'redirect' => $redirect_url ));

		$forgotpasslink = '<a href="'.wp_lostpassword_url().'">Forgot Password</a>';

	} else { /*If user is logged in hide the h2 title for login*/?>
		<style>
		.login-box-title{
			display:none;
		}
		</style>
<?php }
	
	

	$a = "<h2 class='login-box-title'>Already have an account? Login below:</h2>" . $form;

	$a .= $forgotpasslink;

	return $a;

}



add_shortcode('loginanywhere', 'rjw_login_form_anywhere');







?>