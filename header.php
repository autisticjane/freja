<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- site -->
		<meta http-equiv="Cache-control" content="public">
		<meta charset="utf-8">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="initial-scale=1.0, width=device-width">
		<link rel="dns-prefetch" href="//smoothiesbycolor.com/wp-content/uploads/">
		<link rel="dns-prefetch" href="//fonts.googleapis.com/">
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<!-- icons -->
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/icon.png">
        <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/images/icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon-g.ico">
        <meta name="application-name" content="Smoothies by Color">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_url'); ?>/images/small.png">
        <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_url'); ?>/images/medium.png">
        <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_url'); ?>/images/wide.png">
        <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_url'); ?>/images/large.png">
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>"> <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/icon.png">
		<!-- stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Text+Me+One|Nunito+Sans|Sintony" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?<?php echo date('Ymd', filemtime( get_stylesheet_directory() . '/style.css' )); ?>" type="text/css" media="screen">
		<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
		<!-- feeds -->
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<!-- wordpress stuff -->
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!-- verification -->
		<link rel="author" href="https://plus.google.com/100383019747717124280/">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="bitly-verification" content="b45cf85a90ce">
		<meta name="google-site-verification" content="">
		<meta name="alexaVerifyID" content="">
		<meta name='p:domain_verify' content="">
		<meta property="twitter:account_id" content="4503599628083684">
		<meta name="myLPA-verification" content="" />
		<meta name="ir-site-verification-token" value="" />
		
        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
	</head>
	<body class="page--single">
		<header role="banner">
			<span class="title--site"><a href="<?php echo site_url(); ?>" title="Go to homepage">s/c</a></span>
			<nav>	
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Recipes</a></li>
					<li><a href="#">Tips</a></li>
				</ul>
			</nav>
			<div class="menu--main--search">
				Search form here [button]
			</div>
		</header>