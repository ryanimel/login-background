<?php
/* 
Plugin Name: Login Background
Plugin URI: http://github.com/ryanimel/login-background
Description: Add a background image to your WordPress login screen. This plugin will look for a <code>login-background.png</code> image in your active theme's <code>/images/</code> folder. Inspired by Mark Jaquith's simple Login Logo plugin.
Version: 0.1
Author: Ryan Imel
Author URI: http://ryanimel.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


/* Styled login screen */
add_action( 'login_head', 'wpcandy_login_css', 99999 );
function wpcandy_login_css() { 
	?>

	<style type="text/css">
	body {
		background: #e6e6e6 url('http://wpcandy.s3.amazonaws.com/resources/site/loginbg.jpg') no-repeat top center !important;
	}

	#login {
		padding-top: 60px !important;
	}

	html {
		background: #e6e6e6;
	}

	#loginform {
		margin-bottom: 21px;
	}

	p#nav,
	p#backtoblog { 
		background: #fff;
		border: 1px solid #eee;
		margin-left: 8px !important;
		padding: 15px !important;
	}

	p#nav { 
		border-bottom: 0 !important;
		margin-bottom: -2px !important;
		padding-bottom: 2px !important;
		-moz-box-shadow: rgba(200, 200, 200, 0.7) 0px 4px 10px -1px;
		-webkit-box-shadow: rgba(200, 200, 200, 0.7) 0px 4px 10px -1px;
		box-shadow: rgba(200, 200, 200, 0.7) 0px 4px 10px -1px;
	}

	.login p#backtoblog {
		border-top: 0 !important;
		margin-bottom: 21px !important;
		padding-top: 5px !important;
	}

	.login p#backtoblog a {
		color: #999 !important;
		font-size: 9px !important;
	}

	#login {
		padding-bottom: 42px;
	}
	</style>

	<?php
}