<?php
/**
 * The main template file
 * Template Name: Главная
 */

get_header();
?>
<main class="main-page" id="main-page">
    <article>
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
    <section class="main-about" id="main-about">
        <div class="main-about__content">
            <div class="main-about__content-img">
                <picture>
                    <source media="(min-width: 500px)"
                            srcset="<?php the_field('kartinka_dlya_seczkii_o_pansionate')?>">
                    <img src="<?php the_field('kartinka_dlya_seczkii_o_pansionate_mobile')?>" alt="<?php echo the_field('zagolovok_dlya_bloka_o_pansionate') ?>">
                </picture>
            </div>
            <div class="main-about__content-desc">
<!--                <h1 class="main-about__content-title">-->
<!--                    --><?php //echo the_field('zagolovok_dlya_bloka_o_pansionate') ?>
<!--                </h1>-->
                <div class="main-about__content-text">
                    <?php the_content(); ?>
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
    </section>
    <section class="main-special">
        <div class="main-special__header">
            <h2 class="main-special__title">
                Спецпредложения
            </h2>
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
    </section>
<!--        <?php //get_template_part('inc/video'); ?>-->
    <section class="main-team">
        <h2 class="main-team__title">
            Наша команда
        </h2>
        <div class="main-team__content">
            <div class="main-team__photo">
                <img class="main-team__img" src="<?php echo the_field('fotografiya_personala', 2); ?>"
                     alt="<?php echo the_field('opisanie_fotografii_personala', 2); ?>">
            </div>
            <div class="main-team__desc">
                <?php echo the_field('opisanie_personala', 2); ?>
            </div>
        </div>
<!--        <div class="main-team__btn">-->
<!--            <a href="" class="main-team__lnk">-->
<!--                Вся команда-->
<!--            </a>-->
<!--        </div>-->
    </section>
    <div class="main-form">
        <div class="main-form__image">
            <img class="main-form__img" src="<?php echo the_field('kartinka_dlya_formy_zapisi', 2); ?>"
                 alt="<?php echo the_field('zagolovok_dlya_formi', 2); ?>">
            <div class="main-form__image-cont">
                <a href="tel:<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a>
                <a href="<?php echo get_theme_mod('phone_2'); ?>"><?php echo get_theme_mod('phone_2'); ?></a>
                <a href="mailto:<?php echo get_theme_mod('e-mail'); ?>"><?php echo get_theme_mod('e-mail'); ?></a>
            </div>
        </div>
        <div class="main-form__form">
            <div class="main-form__sub-title">
                <?php echo the_field('podzagolovok_dlya_formy', 2); ?>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="5" title="Контактная форма 1"]' ); ?>
        </div>
    </div>
    <section class="main-advantages">
        <div class="main-advantages__header">
            <h2 class="main-advantages__title">
                <?php echo the_field('zagolovok_bloka_preimushhestva', 2); ?>
            </h2>
            <div class="main-advantages__navigate">
                <div class="main-advantages__prev">
                    <img src="<?php echo get_template_directory_uri() . "/dist/images-template/slider-prew-gr.svg" ?>"
                         alt="Предидущий слайд О Спецпредложении">
                </div>
                <div class="main-advantages__next">
                    <img src="<?php echo get_template_directory_uri() . "/dist/images-template/slider-next-gr.svg" ?>"
                         alt="Следующий слайд О Спецпредложениие">
                </div>
            </div>
        </div>
        <section class="main-advantages__slider swiper-container">
            <ul class="main-advantages__wrapper swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'advantages',
                    'showposts' => "-1", //сколько показать статей
                    'orderby' => "", //сортировка по дате
                    'caller_get_posts' => 1);
                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $thumb_id = get_post_thumbnail_id();
                        $my_query->the_post(); ?>
                        <li class="main-advantages__slide swiper-slide">
                            <div class="main-advantages__content">
                                <h3 class="main-advantages__item-title">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="main-advantages__item-desc">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php echo the_permalink(); ?>" class="main-advantages__item-lnk">
                                    <span>Подробнее</span>
                                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.9928 15L22 19L17.9928 23L17 22.0089L20.0143 19L17 15.9911L17.9928 15Z" fill="black"/>
                                        <circle opacity="0.3" cx="19.5" cy="19.5" r="19" stroke="black"/>
                                    </svg>
                                </a>
                            </div>
                        </li>
                    <?php }
                }
                wp_reset_query(); ?>
            </ul>
        </section>
    </section>
        <?php get_template_part('inc/reviewes'); ?>
        <?php get_template_part('inc/maps'); ?>
<!--        --><?php //get_sidebar('popup'); ?>
    </article>
</main>
<?php
//get_sidebar();

get_footer();
