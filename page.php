<?php get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="main-content">
				<article itemscope itemtype="http://schema.org/Article">
					<meta itemprop="mainEntityOfPage" itemscope itemType="https://schema.org/WebPage">
					<div itemprop="articlebody" class="post-content">
						<h1 itemprop="headline"><?php echo the_title(); ?></h1>
 <?php get_template_part( 'page-meta' ); ?>
						<?php the_content(); ?>
					</div>
				</article>
<?php endwhile;
else :
endif; ?>
</div>
<?php get_footer(); ?>
