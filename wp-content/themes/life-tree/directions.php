<?php
/**
 * The main template file
 * Template Name: Направления
 */

get_header();
?>
    <main class="directions-page" id="directions-page">
        <article>
            <section class="directions-header block-container">
                <h1 class="directions-header__title">
                    <?php the_title();?>
                </h1>
                <div class="directions-header__content">
                    <?php the_content();?>
                </div>
            </section>
            <section class="directions">
                <div class="directions__container">
                    <ul class="directions__list">
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
                                ?>
                                <li class="directions__item" style="background-color: <?php echo the_field('czvet_dlya_fona_lementa');?>">
                                    <h2 class="directions__title">
                                        <?php the_title(); ?>
                                    </h2>
                                    <a href="<?php echo the_permalink(); ?>" class="directions__lnk">
                                        Подробнее...
                                    </a>
                                </li>
                            <?php }
                        }
                        wp_reset_query(); ?>
                    </ul>
                </div>
            </section>
            <section class="directions-header block-container">
                <h1 class="directions-header__title">
                    <?php the_field('zagolovok_dlya_vtorogo_bloka');?>
                </h1>
                <div class="directions-header__content">
                    <?php the_field('kontent_dlya_vtorogo_bloka');?>
                </div>
            </section>
        </article>
    </main>
<?php
//get_sidebar();

get_footer();
