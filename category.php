<?php
/**
 * Default Category Template
 *
 * @package      Digital Store
 * @author       Matt Varone <contact@mattvarone.com>
 * @copyright    Copyright (c) 2012, Matt Varone
 * @link         http://www.mattvarone.com
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since        1.0
*/

get_header( 'category' ); ?>

<section id="main" role="main">

            <?php if ( have_posts() ) : ?>

                <?php do_action( 'digitalstore_before_template_header' ); ?>

                <header class="page-header">
                    <h1 class="page-title"><?php
                        printf( __( 'Category: <span class="current">%s</span>', 'digitalstore-mattvarone' ), '<span>' . single_cat_title( '', false ) . '</span>' );
                    ?></h1><!-- .page-title -->

                    <?php
                        $category_description = category_description();
                        if ( ! empty( $category_description ) ) 
                        echo apply_filters( 'category_archive_meta', '<div class="intro-meta">' . $category_description . '</div>' );
                    ?>
                </header><!-- page-header -->

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', get_post_format() ); ?>

                <?php endwhile; ?>

                <?php get_template_part( 'pagination' ); ?>

            <?php else: ?>

                <header class="entry-header">
                    <h1 class="entry-title"><?php _e( 'Nothing Found', 'digitalstore-mattvarone' ); ?></h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <p><?php _e( 'Apologies, but no results were found for the requested category. Perhaps searching will help find a related post.', 'digitalstore-mattvarone' ); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- .entry-content -->

            <?php endif; ?>

</section><!-- #main -->
<?php get_sidebar( 'category' ); ?>
<?php get_footer( 'category' ); ?>