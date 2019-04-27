<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta name="viewport" content="initial-scale=1.0,width=device-width">
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<link rel="dns-prefetch" href="//smoothiesbycolor.com/wp-content/uploads/">
		<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/default.png">
		<!-- stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Sintony" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<!-- wordpress -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments') ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		<!-- meta -->
		
	</head>
	<body>
		<header class="site-header">
			<span class="site-title"><a href="<?php echo get_site_url(); ?>" title="Go to homepage">s/c</a></span>
			<nav class="header-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>
		</header>
		<div class="main-content">