<?php
/** 
 * Digital Store Theme Sidebars
 *
 * @package      Digital Store
 * @subpackage   Sidebars
 * @author       Matt Varone <contact@mattvarone.com>
 * @copyright    Copyright (c) 2012, Matt Varone
 * @link         http://www.mattvarone.com
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since        1.0
*/


/** 
 * Theme Sidebars
 *
 * Registers theme sidebars.
 *
 * @return   void
 * @access   private
 * @since    1.0
*/

if ( ! function_exists( 'digitalstore_theme_sidebars' ) ) {
    function digitalstore_theme_sidebars() {
        register_sidebar( array(
            'name' => __( 'Primary | Widget Area', 'digitalstore-mattvarone' ),
            'id' => 'primary-widget-area',
            'description' => __( 'The primary widgets area', 'digitalstore-mattvarone' ),
            'before_widget' => '<div class="%2$s widget">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
         ) );
         
         register_sidebar( array(
            'name' => __( 'Complementary | Widget Area', 'digitalstore-mattvarone' ),
            'id' => 'complementary-widget-area',
            'description' => __( 'The complementary widgets area', 'digitalstore-mattvarone' ),
            'before_widget' => '<div class="%2$s widget">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
         ) );
    }
}
add_action( 'widgets_init', 'digitalstore_theme_sidebars' );