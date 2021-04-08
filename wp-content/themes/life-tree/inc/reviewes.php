<section class="main-reviewes">
    <h2 class="main-reviewes__title">
        <?php echo the_field('zagolovok_bloka_otzyvy', 2); ?>
    </h2>
    <div class="main-reviewes__container">
        <?php
        if( wp_is_mobile() ) {
            $count = 8;
        } else {
            $count = 8;
        };

        $args = array(
            'post_type' => 'reviewes',
            'showposts' => $count, //сколько показать статей
            'orderby' => "", //сортировка по дате
            'caller_get_posts' => 1);
        $my_query = new wp_query($args);
        if ($my_query->have_posts()) {
            while ($my_query->have_posts()) {
                $thumb_id = get_post_thumbnail_id();
                $my_query->the_post();
                $post_id = get_the_ID();
                $link = get_post_meta($post_id, $key = 'ssylka_na_video_esli_est_video', true);
                if ( !empty ($link)) {
                    ?>
                    <a href="<?php echo the_field('ssylka_na_video_esli_est_video'); ?>" class="fresco main-reviewes__item main-reviewes__item-video">
                        <img src="<?php echo the_field('oblozhka_dlya_video_esli_est_video'); ?>" alt="<?php echo the_field('imya'); ?> оставил(а) отзыв">
                        <svg width="76" height="77" viewBox="0 0 76 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M75.474 38.5C75.474 59.4946 58.7355 76.5 38.1048 76.5C17.474 76.5 0.735474 59.4946 0.735474 38.5C0.735474 17.5054 17.474 0.5 38.1048 0.5C58.7355 0.5 75.474 17.5054 75.474 38.5Z" stroke="white"/>
                            <path d="M50.4 39L32.6949 49.3923L32.6949 28.6077L50.4 39Z" fill="white"/>
                        </svg>
                    </a>
                    <?php
                } else {
                    ?>
                    <div class="main-reviewes__item main-reviewes__item-text">
                        <div class="name">
                            <?php echo the_field('imya'); ?>
                        </div>
                        <div class="description">
                            <?php echo the_field('otzyv_dlya_glavnoj_straniczy'); ?>
                        </div>
                    </div>
                    <?php
                }?>
            <?php }
        }
        wp_reset_query(); ?>
    </div>
<!--    <div class="main-reviewes__lnk">-->
<!--        <a href="">Все отзывы</a>-->
<!--    </div>-->
</section>