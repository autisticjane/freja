<?php
    get_header();
    if ( have_posts() ) : ?>
	<div class="post--box">
	<?php
	$postCount = 0;
	while ( have_posts() ) :
	the_post();
	$image = get_first_image();
	$postCount++;
?>
	<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
		
	</article>
