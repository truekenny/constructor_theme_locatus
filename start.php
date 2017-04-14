<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="bem/start/body/body.css">
    <link rel="stylesheet" type="text/css" href="bem/start/header/header.css">
    <link rel="stylesheet" type="text/css" href="bem/start/logo/logo.css">
    <link rel="stylesheet" type="text/css" href="bem/start/title/title.css">
    <link rel="stylesheet" type="text/css" href="bem/start/input/input.css">
    <link rel="stylesheet" type="text/css" href="bem/start/button/button.css">
    <link rel="stylesheet" type="text/css" href="bem/start/category/category.css">
    <link rel="stylesheet" type="text/css" href="bem/start/about/about.css">
    <link rel="stylesheet" type="text/css" href="bem/start/footer/footer.css">
    <link rel="stylesheet" type="text/css" href="bem/start/link/link.css">
    <link rel="stylesheet" type="text/css" href="bem/start/link-icon/link-icon.css">
    <link rel="stylesheet" type="text/css" href="bem/start/module-search/module-search.css">
    <link rel="stylesheet" type="text/css" href="bem/start/module-category/module-category.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.js"></script>
</head>
<body class="body">

<div class="header">
    <div class="header__background"></div>

    <div class="logo header__logo">
        <a href="#" class="logo__link"></a>
    </div>

    <div class="title header__title">
        <h1 class="title__text_size_big">
            Поиск организаций и услуг в
            <a href="#" class="text_color_green title__link js-window_show" data-window="city-choose">Москве</a>
        </h1>
    </div>

    <div class="title header__title">
        <h2 class="title__text_size_small">
            Среди 10 200 организаций и 57 000 услуг
        </h2>
    </div>

    <div class="module-search header__module-search">
        <form class="module-search__form">
            <input class="input input_text-size_big module-search__input">
            <button class="button button_color_green button_icon_search module-search__button"></button>
        </form>
    </div>
</div>

<div class="module-category">
    <div class="module-category__grid">
        <?php foreach (range(1, 12) as $i): ?>
            <div class="module-category__item category">
                <h3 class="category__title" style="filter: hue-rotate(<?= rand(-180, 180) ?>deg);">
                    <a class="category__title-link" href="#">
                        Медцентры
                        <?php if (rand(0, 1)): ?>
                            и ночные рестораны
                        <?php endif; ?>
                        <?php if (rand(0, 1)): ?>
                            и ночные рестораны
                        <?php endif; ?>
                    </a>
                </h3>
                <div class="category__list">
                    <?php foreach (range(1, rand(1, 5)) as $j): ?>
                        <a class="category__item" href="#">Больницы</a>
                        <a class="category__item" href="#">Наращивание ногтей</a>
                        <a class="category__item" href="#">Банкеты</a>
                        <a class="category__item" href="#">Залы</a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="about">
    <div class="about__text">
        <?= str_repeat("На портале «Локатус» можно получить информацию о любых услугах ", 10); ?>
    </div>
</div>

<div class="footer">
    <div class="footer__grid">
        <div class="footer__item">
            <div class="footer__text">
                Локатус – поиск товаров и услуг
            </div>
            <div class="footer__text">
                © 1997–<?= date("Y") ?><br>
                ООО «БизнесПоделки»
            </div>
        </div>
        <div class="footer__item">
            <div class="footer__text footer__phone">
                8 800 456-90-80
            </div>
            <div class="footer__text">
                <a class="link" href="#">info@locatus.com</a>
            </div>
        </div>
        <div class="footer__item">
            <a href="#" class="link">О проекте</a>
            <a href="#" class="link footer__cooperation">Сотрудничество</a>
        </div>
        <div class="footer__item footer__social">
            <a href="#" class="link-icon footer__vk"></a>
            <a href="#" class="link-icon footer__facebook"></a>
            <a href="#" class="link-icon footer__twitter"></a>
        </div>
    </div>
</div>

<?php require "_window.php"; ?>

</body>
</html>
