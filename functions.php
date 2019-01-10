<?php
// Change default WordPress email address
	add_filter('wp_mail_from_name', 'new_mail_from_name');
	function new_mail_from_name($old) {
		return 'Smoothies by Color';
	}
// Email cloaking shortcode: [cloak email="content"]
	function email_cloaking_shortcode( $atts ) {
		extract( shortcode_atts(array('email' => '',), $atts ));
		return antispambot( $email );
		}
	add_shortcode( 'cloak', 'email_cloaking_shortcode' );
// Login page style
	function my_login_css() {
		wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/custom-login.css' );
	}
	add_action( 'login_enqueue_scripts', 'my_login_css' );
	function my_login_logo_url() {
		return get_bloginfo( 'url' );      
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );
	function my_login_logo_url_title() {
		return 'Smoothies by Color';
	}    
	add_filter( 'login_headertitle', 'my_login_logo_url_title' );
// Visual editor
	function visual_editor_style($url) {
		if ( !empty($url) )
              $url .= ',';
		// Change the path here if using sub-directory
		$url .= trailingslashit( get_stylesheet_directory_uri() ) . 'vised.css';
		return $url;
	}
	add_filter('mce_css', 'visual_editor_style');
?>