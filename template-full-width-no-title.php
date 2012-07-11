<?php
/**
 * Template Name: Full-width, no title
 *
 * A full-width page template with no sidebar and no title.
 *
 * @package      Digital Store
 * @author       Matt Varone <contact@mattvarone.com>
 * @copyright    Copyright (c) 2012, Matt Varone
 * @link         http://www.mattvarone.com
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since        1.0
*/

get_header( 'page' ); ?>

    <section id="main" role="main" class="full-width">
        
        <?php do_action( 'digitalstore_before_template_header' ); ?>
        
        <?php while ( have_posts() ) : the_post(); ?>
            
            <div class="entry-content">
                <?php the_content(); ?>
            </div><!-- .entry-content -->
            
        <?php endwhile; ?>
        
    </section><!-- #main -->

<?php get_footer( 'page' ); ?>