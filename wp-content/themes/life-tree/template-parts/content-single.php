<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package life-tree
 */

?>

<article id="simple-page__<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php life_tree_post_thumbnail('thumbnail', array('class' => 'thumbnail')); ?>
    <div class="simple-page__wrapper container">
            <?php the_title( '<h1 class="simple-page__title">', '</h1>' ); ?>

        <div class="simple-page__content">
            <?php
            the_content();
            ?>
        </div><!-- .entry-content -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
