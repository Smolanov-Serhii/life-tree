<?php
/**
 *
 * Template Name: Обычная страница
 *
 * @package life-tree
 */

get_header();
?>

    <main id="simple-page" class="simple-page">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'single' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
