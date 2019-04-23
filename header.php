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
		<link href="https://fonts.googleapis.com/css?family=Text+Me+One|Nunito+Sans|Sintony|Titillium+Web" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<!-- wordpress -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments') ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		<!-- meta -->
		
	</head>
	<body>
		<header>
			<span class="title-site"><a href="#" title="Go to homepage">s/c</a></span>
			<nav>	
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Recipes</a></li>
					<li><a href="#">Tips</a></li>
					<!--<li><a href="https://instagram.com/gotjane" title="Instagram"><i class="fab fa-instagram big-icon"></i></a></li>
					<li><a href="https://pinterest.com/janepedia" title="Pinterest"><i class="fab fa-pinterest big-icon"></i></a></li>
					<li><a href="https://twitter.com/gotjane" title="Twitter"><i class="fab fa-twitter big-icon"></i></a></li>-->
				</ul>
			</nav>
			<div class="menu-main--search">
				Search form here [button]
			</div>
		</header>
		<?php get_template_part( 'menu-colors' ); ?>
		<div class="body--main">