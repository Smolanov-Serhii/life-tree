<?php
/**
 * The main template file
 * Template Name: Слайдер
 */

get_header();
?>

    <main id="slide-page" class="slide-page block-container">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php life_tree_post_thumbnail(); ?>
            <h1 class="slide-page__title">
                <?php the_title();?>
            </h1>

            <div class="slide-page__content">
                <?php the_content();?>
            </div><!-- .entry-content -->


        </article>

    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
