<?php

/**
 * Page Template
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

        <?php the_content(); ?>
    </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; ?>

    <?php if( get_the_id() == "2" ) : ?>
    <aside id="home-work" class="row">
        <header class="entry-header col-md-12">
            <h2 class="entry-title">Meet Some of Our Partners</h2>
        </header>

        <?php // @todo add work samples here
        $args = array(
            'post_type'       => 'project',
            'posts_per_page'  => 2
        );

        $project_query = new WP_Query( $args );

        if ( $project_query->have_posts() )
        {
            while ( $project_query->have_posts() ) : $project_query->the_post()
            ?>
                <article id="project-<?php the_ID(); ?>" class="project col-md-6">
                    <?php
                    if( has_post_thumbnail() )
                    {
                        the_post_thumbnail();
                    }
                    ?>

                    <h3 class="project-title"><?php the_title() ?></h3>

                    <?php the_excerpt(); ?>
                </article><!-- #project-<?php the_ID(); ?> -->
            <?php
            endwhile;
        }
        ?>
    </aside><!-- #home-work.row -->
    <?php endif; ?>
</main>

<?php
get_footer();
