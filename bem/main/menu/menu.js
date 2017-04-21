var Project = Project || {};

/**
 * Модуль упраления меню
 */
Project.Menu = (function ($) {
    /** @type {number} Максимальная ширина дисплея в пикселях для телефонной вёрстки */
    var phoneWidth = 699;

    /** @type {timer} */
    var hideDesktopMenuTimer;

    /**
     * @returns {HTMLElement} Кнопка вызова меню
     */
    function findMenuSwitcher() {
        return $('.menu__switch');
    }

    /**
     * @returns {HTMLElement} Меню
     */
    function findPopupMenu() {
        return $('.menu');
    }

    /**
     * Регулирует видимость меню
     */
    function initMenuVisibility() {
        // Обработка клика по кнопке switch
        findMenuSwitcher().on('click', function (e) {
            e.preventDefault();

            $(this).toggleClass('js-menu_show');

            // Удалить классы для мобильной версии
            findPopupMenu().find('.js-menu_mobile-show, .js-menu_mobile-hide').removeClass('js-menu_mobile-hide js-menu_mobile-show');
        });
    }

    /**
     * Обрабатывает сокрытие меню для десктопа
     */
    function initDesktopMenuHidden() {
        // Скрыть меню, если курсор вышел за пределы его области
        // Меню настольное
        findPopupMenu().on('mouseleave', function () {
            hideDesktopMenuTimer = setTimeout(function () {
                findPopupMenu().find('.menu__services').css('top', "");

                if ($(window).width() > phoneWidth) {
                    findMenuSwitcher().removeClass('js-menu_show');
                }
            }, 2000);
        });

        findPopupMenu().on('mouseenter', function () {
            clearTimeout(hideDesktopMenuTimer);
        });
    }

    /**
     * Управляет видимостью категорий для мобильного меню
     */
    function initMobileServicesVisibility() {
        // Показать услуги при клике по категории
        findPopupMenu().on('click', '.menu__category > .menu__link', function (e) {
            if ($(window).width() > phoneWidth) {
                return;
            }

            e.preventDefault();

            $(this).parents('.menu__category').addClass('js-menu_mobile-show'); // Для li
            $(this).parents('.menu__categories').addClass('js-menu_mobile-hide');
        });

        // Возврат к списку категорий
        findPopupMenu().on('click', '.menu__back > .menu__link', function (e) {
            e.preventDefault();

            findPopupMenu().find('.js-menu_mobile-show, .js-menu_mobile-hide').removeClass('js-menu_mobile-hide js-menu_mobile-show');
        });
    }

    /**
     * Инициализирует сброс меню при определенных условиях
     */
    function initMenuReset() {
        // Сбрасывать меню при изменениях размеров дисплея
        $(window).resize(function () {
            findPopupMenu().find('.js-menu_mobile-show, .js-menu_mobile-hide').removeClass('js-menu_mobile-hide js-menu_mobile-show');
            findMenuSwitcher().removeClass('js-menu_show');
        });
    }

    /**
     * Инициализирует вертикальное выравнивание услуг для десктопа
     */
    function initDesktopServicesVAlign() {
        // Поднимает подменю, если оно вылезает за нижнюю часть страницы
        findPopupMenu().find('.menu__category').on('mouseenter', function () {
            var menuServices = $(this).find('.menu__services');

            if ((menuServices.offset().top - $(window).scrollTop()) + menuServices.height() > $(window).height()) {
                menuServices.css('top', ($(window).height() - (menuServices.offset().top - $(window).scrollTop()) - menuServices.height() - 10) + 'px');
            }
        })
    }

    function init() {
        initMenuVisibility();

        initDesktopMenuHidden();

        initMobileServicesVisibility();

        initMenuReset();

        initDesktopServicesVAlign();
    }

    return {
        init: init
    }
})(jQuery);

$(document).ready(function () {
    Project.Menu.init();
});
