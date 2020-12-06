<?php
/**
 * The main template file
 *
 *
 * Template Name: Главная
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package life-tree
 */

get_header();
?>
<div class="main-slider__container swiper-container">
    <ul class="main-slider__wrapper swiper-wrapper">
        <?php
        $counter = 0;
        $class = '';
        $args = array(
            'post_type' => 'main-slider',
            'showposts' => "-1", //сколько показать статей
            'orderby' => "", //сортировка по дате
            'caller_get_posts' => 1);
        $my_query = new wp_query($args);
        if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
                $counter++;
                $thumb_id = get_post_thumbnail_id();
                $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                $my_query->the_post();
                $alt = $image['alt'] ?>
                <li class="main-slider__slide swiper-slide">
                    <div class="main-slider__content">
                        <div class="main-slider__logo">
                            <?php
                            the_custom_logo();
                            ?>
                        </div>
                        <div class="main-slider__desc">
                            <h3 class="main-slide__title"><?php the_title();?></h3>
                            <div class="main-slide__content"><?php the_excerpt();?></div>
                        </div>
                        <a href="<?php echo the_permalink();?>" class="main-slide__lnk">
                            <span>Подробнее</span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.5">
                                    <path d="M16.9379 12L23 18.0513L16.9379 24.1025L15.4359 22.6032L19.996 18.0513L15.4359 13.4993L16.9379 12Z" fill="#6C1A30"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 36C28.165 36 36 28.165 36 18.5C36 8.83502 28.165 1 18.5 1C8.83502 1 1 8.83502 1 18.5C1 28.165 8.83502 36 18.5 36ZM18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z" fill="#6C1A30"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="main-slider__image" style="background-image: url('<?php echo the_field('kartinka_dlya_slajda');?>')">
                    </div>
                </li>
            <?php }
        }
        wp_reset_query(); ?>
    </ul>
    <div class="main-slider__navigate">
        <div class="main-slider__prev">
            <img src="<?php echo get_template_directory_uri() . "/dist/images-template/slider-prew.svg"?>" alt="Предидущий слайд пансионата">
        </div>
        <div class="main-slider__next">
            <img src="<?php echo get_template_directory_uri() . "/dist/images-template/slider-next.svg"?>" alt="Следующий слайд пансионата">
        </div>
    </div>
</div>
	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
