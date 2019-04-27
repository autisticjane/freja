<footer class="post-meta">
	<div class="post-meta__item" itemprop="keywords"><?php the_category(', '); ?></div>
	<div class="post-meta__item"><time aria-label="Time stamp of blog post" datetime="<?php echo get_the_date('Y-m-d'); ?>T<?php echo get_the_date('H:iP'); ?>" itemprop="datePublished"><?php echo the_time('F j, Y'); ?></time></div>
	<div class="post-meta__item"><a href="<?php comments_link(); ?>"><?php comments_number( 'Leave a comment', 'One comment', '% comments' ); ?></a></div>
	<meta itemprop="author" content="<?php the_author(); ?>">
	<meta itemprop="inLanguage" content="en">
	<?php image_url_meta(); ?>
	<meta itemprop="copyrightYear" content="<?php the_time('Y'); ?>">
	<meta itemprop="commentCount" content="<?php echo get_comments_number(); ?>">
	<meta itemprop="url" content="<?php echo get_permalink(); ?>">
	<meta itemprop="wordCount" content="<?php echo wordcount(); ?>">
</footer>
