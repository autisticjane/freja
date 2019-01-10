<?php
    /* Template Name: Archive Listing */
get_header(); ?>
    <article class="post page" itemscope itemtype="https://schema.org/Article">
        <h1 class="post__title" itemprop="name"><?php the_title(); ?></h1>
        <meta itemprop="author" content="<?php the_author(); ?>">
        <meta itemprop="inLanguage" content="en">
        <meta itemprop="url" content="<?php echo get_permalink(); ?>">
        <meta itemprop="wordCount" content="<?php echo wordcount(); ?>">
        <div class="post__content" itemprop="articleBody">
            <?php the_content(); ?>
			<h2>Archives by color</h2>
				<p>As I have my own allergies, I understand the need to be able to easily find free-from recipes.</p>
				<?php echo get_the_term_list( $post->ID, 'color', '<ul class="column"><li>', '</li><li>', '</li></ul>' ); ?>
			<h2>Archives by special dietary need</h2>
				<p>While I don't cater to everyone's special dietary needs, my recipes frequently fall under certain dietary needs, usually by convenience. I probably won't prioritize any low-calorie smoothie recipes anytime soon, but <em>Smoothies by Color</em> is constantly growing. Anything can happen.</p>
				<p>As I have my own <a href="/faq#allergies">allergies</a>, I understand the need to be able to easily find free-from recipes.</p>
				<?php echo get_the_term_list( $post->ID, 'dietary-need', '<ul class="column"><li>', '</li><li>', '</li></ul>' ); ?>
            <h2>Archives by month</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
            <h2>Archives by year</h2>
            <ul>
                <?php wp_get_archives('type=yearly'); ?>
            </ul>
        </div>
    </article>
<?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    endwhile;
    else :
    endif;
    get_footer(); 
?>