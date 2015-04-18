<?php

/**
 * Index
 *
 * author: zachfedor
 * version: 0.1
 * url: http://hickory.io
 * license: MIT
 */

get_header();
?>

<main id="content" class="container" role="main">
    <?php  while( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?> >
        <header class="entry-header col-md-12">
            <h2 class="entry-title"><?php the_title(); ?></h2>
        </header>

        <?php the_excerpt(); ?>
    </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; ?>
</main>

<?php
get_footer();
