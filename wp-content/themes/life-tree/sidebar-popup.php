<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package life-tree
 */

if ( ! is_active_sidebar( 'popup' ) ) {
	return;
}
?>

<aside id="popup" class="popup__content popup hide">
    <div class="popup__wrapper">
        <?php dynamic_sidebar( 'popup' ); ?>
        <svg class="popup__close" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.5893 8.45898L15.932 14.115L10.276 8.45898L8.39062 10.3443L14.0466 16.0003L8.39062 21.6563L10.276 23.5417L15.932 17.8856L21.5893 23.5417L23.4746 21.6563L17.8186 16.0003L23.4746 10.3443L21.5893 8.45898Z" fill="black"/>
        </svg>
    </div>
</aside><!-- #secondary -->
