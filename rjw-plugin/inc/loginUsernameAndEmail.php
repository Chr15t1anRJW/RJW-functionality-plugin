<?php
/*
Name: Login with Email or Username
Descrip: Allow users to login with Email or Username while logging in to Wordpress
Author: BCS Website Services
Author URI: https://www.bcswebsiteservices.com
*/


add_filter('authenticate', 'bcs_el_login_with_email', 1, 3);

function bcs_el_login_with_email( $user, $username, $password ) {
    if ( is_email( $username ) ) {
        $user = get_user_by_email( $username );
        if ( $user ) $username = $user->user_login;
    }
    return wp_authenticate_username_password(null, $username, $password );
}


add_filter( 'gettext', 'change_username_wps_text' );
function change_username_wps_text($text){
       if(in_array($GLOBALS['pagenow'], array('wp-login.php'))){
         if ($text == 'Username'){$text = 'Username / Email';}
            }
                return $text;
         }
