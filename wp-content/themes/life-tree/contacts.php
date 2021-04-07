<?php
/**
 * The main template file
 * Template Name: Контакты
 */

get_header();
?>

    <main id="default-page" class="default-page">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'default' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
<?php get_template_part('inc/maps'); ?>
<?php
//get_sidebar();
get_footer();
