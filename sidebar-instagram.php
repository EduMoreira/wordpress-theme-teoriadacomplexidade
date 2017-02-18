<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Teoria_da_Complexidade
 * @since Teoria da Complexidade 1.1
 */
?>
<?php if ( is_active_sidebar( 'instagram' )  ) : ?>
    <div id="instagram-widget" class="clearfix">
        <?php dynamic_sidebar( 'instagram' ); ?>
    </div>
<?php endif; ?>