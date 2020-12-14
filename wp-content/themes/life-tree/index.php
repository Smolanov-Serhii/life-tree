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
            $args = array(
                'post_type' => 'main-slider',
                'showposts' => "-1", //сколько показать статей
                'orderby' => "", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $thumb_id = get_post_thumbnail_id();
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
                                <h3 class="main-slide__title"><?php the_title(); ?></h3>
                                <div class="main-slide__content"><?php the_excerpt(); ?></div>
                            </div>
                            <a href="<?php echo the_permalink(); ?>" class="main-slide__lnk">
                                <span>Подробнее</span>
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.5">
                                        <path d="M16.9379 12L23 18.0513L16.9379 24.1025L15.4359 22.6032L19.996 18.0513L15.4359 13.4993L16.9379 12Z"
                                              fill="#6C1A30"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M18.5 36C28.165 36 36 28.165 36 18.5C36 8.83502 28.165 1 18.5 1C8.83502 1 1 8.83502 1 18.5C1 28.165 8.83502 36 18.5 36ZM18.5 37C28.7173 37 37 28.7173 37 18.5C37 8.28273 28.7173 0 18.5 0C8.28273 0 0 8.28273 0 18.5C0 28.7173 8.28273 37 18.5 37Z"
                                              fill="#6C1A30"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="main-slider__image"
                             style="background-image: url('<?php echo the_field('kartinka_dlya_slajda'); ?>')">
                        </div>
                    </li>
                <?php }
            }
            wp_reset_query(); ?>
        </ul>
        <div class="main-slider__navigate">
            <div class="main-slider__prev">
                <img src="<?php echo get_template_directory_uri() . "/dist/images-template/slider-prew.svg" ?>"
                     alt="Предидущий слайд пансионата">
            </div>
            <div class="main-slider__next">
                <img src="<?php echo get_template_directory_uri() . "/dist/images-template/slider-next.svg" ?>"
                     alt="Следующий слайд пансионата">
            </div>
        </div>
    </div>
    <div class="main-about" id="main-about">
        <div class="main-about__content">
            <div class="main-about__content-img"
                 style="background-image: url(<?php echo the_field('kartinka_dlya_seczkii_o_pansionate') ?>)">

            </div>
            <div class="main-about__content-desc">
                <div class="main-about__content-title">
                    <?php echo the_field('zagolovok_dlya_bloka_o_pansionate') ?>
                </div>
                <div class="main-about__content-text">
                    <?php echo the_field('opisanie_bloka_o_pansionate') ?>
                </div>
                <div class="main-about__content-lnk">
                    <a href="<?php echo the_field('ssylka_v_bloke_o_pansionate') ?>" class="">
                        <span>Подробнее</span>
                        <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.9928 15L22 19L17.9928 23L17 22.0089L20.0143 19L17 15.9911L17.9928 15Z"
                                  fill="white"/>
                            <circle cx="19.5" cy="19.5" r="19" stroke="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-about__slider swiper-container">
            <ul class="main-about__swiper-wrapper swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'main-about',
                    'showposts' => "-1", //сколько показать статей
                    'orderby' => "", //сортировка по дате
                    'caller_get_posts' => 1);
                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $thumb_id = get_post_thumbnail_id();
                        $my_query->the_post();
                        $alt = $image['alt'] ?>
                        <li class="main-about__slide about-slide swiper-slide">
                            <div class="main-about__header">
                                <div class="about-slide__icon">
                                    <img src="<?php echo the_field('ikonka_dlya_zapisi') ?>">
                                </div>
                                <div class="about-slide__title">
                                    <?php echo the_field('zagolovok_dlya_zapisi') ?>
                                </div>
                            </div>
                            <div class="about-slide__content">
                                <?php echo the_field('opisanie_zapisi') ?>
                            </div>
                        </li>
                    <?php }
                }
                wp_reset_query(); ?>
            </ul>
            <div class="main-about__navigate">
                <div class="main-about__prev">
                    <img src="<?php echo get_template_directory_uri() . "/dist/images-template/slider-prew-wh.svg" ?>"
                         alt="Предидущий слайд О пансионате">
                </div>
                <div class="main-about__next">
                    <img src="<?php echo get_template_directory_uri() . "/dist/images-template/slider-next-wh.svg" ?>"
                         alt="Следующий слайд О пансионате">
                </div>
            </div>
        </div>
    </div>
    <div class="main-special">
        <div class="main-special__header">
            <div class="main-special__title">
                Спецпредложения
            </div>
            <div class="main-special__navigate">
                <div class="main-special__prev">
                    <img src="<?php echo get_template_directory_uri() . "/dist/images-template/slider-prew-gr.svg" ?>"
                         alt="Предидущий слайд О Спецпредложении">
                </div>
                <div class="main-special__next">
                    <img src="<?php echo get_template_directory_uri() . "/dist/images-template/slider-next-gr.svg" ?>"
                         alt="Следующий слайд О Спецпредложениие">
                </div>
            </div>
        </div>
        <div class="main-special__slider swiper-container">
            <ul class="main-special__wrapper swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'main-scecial',
                    'showposts' => "-1", //сколько показать статей
                    'orderby' => "", //сортировка по дате
                    'caller_get_posts' => 1);
                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $thumb_id = get_post_thumbnail_id();
                        $my_query->the_post();
                        $alt = $image['alt'] ?>
                        <li class="main-special__slide special-slide swiper-slide"
                            style="background-image: url(<?php echo the_field('kartinka_dlya_seczkii_o_pansionate') ?>)">
                            <div class="special-slide__content">
                                <div class="special-slide__title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="special-slide__desc">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php echo the_permalink(); ?>" class="special-slide__lnk">
                                    Подробнее
                                </a>
                            </div>
                            <div class="special-slide__image">
                                <img src="<?php echo the_field('kartinka_dlya_glavnoj'); ?>"
                                     alt="<?php the_title(); ?>">
                            </div>
                        </li>
                    <?php }
                }
                wp_reset_query(); ?>
            </ul>
        </div>
    </div>
    <div class="main-video">
        <div class="main-video__title">
            Видеотур
        </div>
        <a href="<?php echo the_field('ssylka_na_video', 2); ?>" class="main-video__content fresco">
            <img class="main-video__cover" src="<?php echo the_field('oblozhka_dlya_video', 2); ?>"
                 alt="<?php echo the_field('opisanie_kartinki_dl_yaoblozhki_video', 2); ?>">
            <svg width="238" height="241" viewBox="0 0 238 241" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M235.895 120.5C235.895 186.245 183.478 239.5 118.869 239.5C54.2608 239.5 1.84326 186.245 1.84326 120.5C1.84326 54.7547 54.2608 1.5 118.869 1.5C183.478 1.5 235.895 54.7547 235.895 120.5Z"
                      stroke="white" stroke-width="3"/>
                <path d="M157.352 122.065L101.937 154.592L101.937 89.5385L157.352 122.065Z" fill="white"/>
            </svg>
        </a>
    </div>
    <div class="main-team">
        <div class="main-team__title">
            Наша команда
        </div>
        <div class="main-team__content">
            <div class="main-team__photo">
                <img class="main-team__img" src="<?php echo the_field('fotografiya_personala', 2); ?>" alt="<?php echo the_field('opisanie_fotografii_personala', 2); ?>">
            </div>
            <div class="main-team__desc">
                <?php echo the_field('opisanie_personala', 2); ?>
            </div>
        </div>
    </div>
    <main id="primary" class="site-main">

        <?php
        if (have_posts()) :

            if (is_home() && !is_front_page()) :
                ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php
            endif;

            /* Start the Loop */
            while (have_posts()) :
                the_post();

                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part('template-parts/content', get_post_type());

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
