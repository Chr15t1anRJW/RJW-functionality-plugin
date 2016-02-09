<?php
/*Allows customization of Admin Login page*/
function my_login_logo() { 
 $logo_image_url = get_theme_mod('coursepress_logo');
?>
    <style type="text/css">
        #login {
            background-image: url(<?php echo $logo_image_url; ?>);
			background-size: 100%;
   			background-repeat: no-repeat;
        }
		.login h1 a {
            background-image: url();
            padding-bottom: 30px;
			 -webkit-background-size: 0px;
			background-size: 0px;
			height: 100px;
			line-height: 0em;
			margin: 0;
			padding: 0;
			outline: 0;
			display: block;
        }
		
		body {
    background-color:;
	background-image: url();
		}		
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );