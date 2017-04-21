<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">

    <link rel="stylesheet" type="text/css" href="bem/global/body/body.css">
    <link rel="stylesheet" type="text/css" href="bem/main/menu/menu.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bem/main/menu/menu.js"></script>
</head>
<body class="body">
<button class="menu__switch">Menu</button>


<div class="menu">
    <ul class="menu__categories">
        <?php foreach (range(1, 15) as $i): ?>
            <li class="menu__category <?= ($i == 2) ? "menu__category_active" : "" ?>">
                <a class="menu__link" href="#cat-<?= $i ?>">
                    Category <?= $i ?>
                </a>
                <ul class="menu__services">
                    <li class="menu__current-category">
                        <a class="menu__link" href="#cur-<?= $i ?>">
                            Current Category <?= $i ?>
                        </a>
                    </li>

                    <?php foreach (range(1, 15) as $j): ?>
                        <li class="menu__service <?= ($j == 2) ? "menu__service_active" : "" ?>">
                            <a class="menu__link" href="#ser-<?= $i ?>-<?= $j ?>">
                                Услуга <?= $i ?>-<?= $j ?>
                            </a>
                        </li>
                    <?php endforeach ?>

                    <li class="menu__more">
                        <a href="#more-<?= $i ?>" class="menu__link">
                            <span class="menu__more-text">Еще</span>
                        </a>
                    </li>

                    <li class="menu__back">
                        <a class="menu__link" href="#back-<?= $i ?>">К списку категорий</a>
                    </li>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>
</div>


</body>
</html>
