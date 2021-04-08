<?php
/**
 * The main template file
 * Template Name: Цены
 */

get_header();
?>

    <main id="contacts" class="contacts block-container">
        <article class="contacts__article">
            <h1 class="contacts__title"><?php the_title();?></h1>
            <div class="contacts__items">
                <?php
                    if( have_rows('tarifnye_platy') ):
                        while( have_rows('tarifnye_platy') ) : the_row();
                            $title = get_sub_field('zagolovok_tarifnogo_plana');
                            $subtitle = get_sub_field('podzagolovok_dlya_tarifnogo_plana');
                            $content = get_sub_field('opisanie_tarifnogo_plana');
                            $price = get_sub_field('czena_dlya_tarifnogo_plana');
                            ?>
                            <div class="contacts__item">
                                <h3 class="contacts__title">
                                    <?php echo $title;?>
                                </h3>
                                <div class="contacts__subtitle">
                                    <?php echo $subtitle;?>
                                </div>
                                <div class="contacts__content">
                                    <?php echo $content;?>
                                </div>
                                <div class="contacts__price">
                                    <?php echo $price;?>
                                </div>
                                <div class="contacts__btn js-send-msg">
                                    ОСТАВИТЬ ЗАЯВКУ
                                </div>
                            </div>
                            <?php
                        endwhile;
                    else :
                endif;?>
            </div>
            <div class="contacts__main-content">
                <?php the_content();?>
            </div>
        </article>
    </main>

<?php
//get_sidebar();
get_footer();
