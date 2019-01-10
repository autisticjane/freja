<?php get_header(); ?>
    <section class="homepage-listing post-listing">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
            <h2 class="post-summary__title" itemprop="name"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" itemprop="url"><?php the_title(); ?></a></h2>
            <div class="post__meta-item post__date">
                <time datetime="<?php the_time('Y-m-d'); ?>T<?php the_time('H:iP'); ?>" itemprop="datePublished"><?php the_time('jS F Y'); ?></time>
            </div>
            <meta itemprop="author" content="<?php the_author(); ?>">
            <meta itemprop="inLanguage" content="en">
            <meta itemprop="copyrightYear" content="<?php the_time('Y'); ?>">
            <meta itemprop="commentCount" content="<?php echo get_comments_number(); ?>">
            <meta itemprop="thumbnailUrl" content="<?php $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'large', true); echo $image_url[0]; ?>">
            <?php image_url_meta(); ?>
            <div class="post-summary__content" itemprop="text">
                <?php
                    if ( !empty( $post->post_excerpt ) ) {
                        the_excerpt();
                    } else {
                        short_excerpt(80);
                    }
                ?>
            </div>
        </article>
    <?php endwhile; ?>
    </section>
    <?php
        if( get_next_posts_link() || get_previous_posts_link() ) {
            echo '<nav class="pagination">';
        }

        previous_posts_link('<span class="pagination__link-text">&laquo; Newer posts</span>');
        next_posts_link('<span class="pagination__link-text">Older posts &raquo;</span>');

        if( get_next_posts_link() || get_previous_posts_link() ) {
            echo '</nav>';
        }
    ?>
    <?php else : ?>
<?php endif; ?>
<?php get_footer(); ?>