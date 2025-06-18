<?php
/*
 * Plugin Name: change the login logo
 */
function change_login_logo() {
    echo '<style type="text/css">
        .login h1 a {
          background-image: url(https://pngimg.com/d/google_PNG19644.png) ; // Your Logo Here
          background-position: center center;
		  background-size: contain;
	      width: 100%;
        }
    </style>';
}
add_action( 'login_head', 'change_login_logo' );
?>

