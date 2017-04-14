<?php
require "_var_cities.php";
?>

<link rel="stylesheet" type="text/css" href="bem/global/window/window.css">
<link rel="stylesheet" type="text/css" href="bem/global/cities-list/cities-list.css">

<script type="text/javascript" src="bem/global/window/window.js"></script>

<div class="window js-window_name_city-choose">
    <div class="window__body">
        <div class="window__close"></div>
        <div class="window__line window__line_highlight window__text_bold">Ваш город: Москва</div>
        <div class="window__line">
            <div class="window__text_bold">Все города</div>

            <div class="cities-list">
                <?php $firstLetter = ""; ?>

                <?php foreach ($cities as $city): ?>
                    <?php $currentFirstLetter = mb_substr(mb_strtoupper($city), 0, 1);

                    $showFirstLetter = false;
                    if ($city && $currentFirstLetter != $firstLetter):
                        $firstLetter = $currentFirstLetter;
                        $showFirstLetter = true;
                    endif; ?>

                    <div class="cities-list__line <?= $showFirstLetter ? "cities-list__line_new-letter" : "" ?>">
                        <div class="cities-list__letter"><?= $firstLetter ?></div>
                        <div class="cities-list__city">
                            <a class="cities-list__link" href="#"><?= $city ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
