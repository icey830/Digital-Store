<?php
/**
 * Primary Widgets Area.
 *
 * @package      Digital Store
 * @author       Matt Varone <contact@mattvarone.com>
 * @copyright    Copyright (c) 2012, Matt Varone
 * @link         http://www.mattvarone.com
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since        1.0
*/

if ( ! is_active_sidebar( 'primary-widget-area' ) ) {
    return;
}

?>
<aside id="secondary" class="sidebar">
    
    <?php dynamic_sidebar( 'primary-widget-area' ); ?>
    
</aside>