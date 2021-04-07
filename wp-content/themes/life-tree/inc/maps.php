<div class="main-map">
    <div class="main-map__container">
        <div class="main-map__item">
            <div class="main-map__loc">
                <?php echo the_field('opisanie_pervoj_karty', 2); ?>
            </div>
            <div class="main-map__adress">
                <?php echo the_field('adress_pervoj_karty', 2); ?>
            </div>
            <div class="main-map__map" id="map-1" data-latitude1="<?php echo the_field('pervaya_koordinata', 2); ?>" data-latitude2="<?php echo the_field('vtoraya_koordinata', 2); ?>">

            </div>
        </div>
        <div class="main-map__item">
            <div class="main-map__loc">
                <?php echo the_field('opisanie_vtoroj_karty', 2); ?>
            </div>
            <div class="main-map__adress">
                <?php echo the_field('adress_vtoroj_karty', 2); ?>
            </div>
            <div class="main-map__map" id="map-2" data-latitude1="<?php echo the_field('pervaya_koordinata2', 2); ?>" data-latitude2="<?php echo the_field('vtoraya_koordinata2', 2); ?>">

            </div>
        </div>
        <div class="main-map__item">
            <div class="main-map__loc">
                <?php echo the_field('opisanie_tretej_karty', 2); ?>
            </div>
            <div class="main-map__adress">
                <?php echo the_field('adress_vtoroj_karty', 2); ?>
            </div>
            <div class="main-map__map" id="map-3" data-latitude1="<?php echo the_field('pervaya_koordinata3', 2); ?>" data-latitude2="<?php echo the_field('vtoraya_koordinata3', 2); ?>">

            </div>
        </div>
    </div>
</div>