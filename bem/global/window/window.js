var Project = Project || {};

/**
 * Модуль управления всплывающими окнами
 */
Project.Window = (function ($) {

    function init() {
        initVerticalPosition();
        initShow();
        initClose();
        initScroll();
    }

    /**
     * Инициализирует вертикальное выравниивание окна
     */
    function initVerticalPosition() {
        $(window).resize(function () {
            $(".window__body").each(function () {
                var that = $(this);

                that.css({
                    left: ($(window).width() - that.outerWidth()) / 2,
                    top: ($(window).height() - that.outerHeight()) / 2
                });
            });
        });

        freshVerticalPosition();
    }

    /**
     * Принудительно вертикально выравнивает окно
     */
    function freshVerticalPosition() {
        $(window).resize();
    }

    /**
     * Инициалищирует отображение окна
     */
    function initShow() {
        $('.js-window_show').on('click', function (e) {
            e.preventDefault();

            show("js-window_name_" + $(this).data("window"));
        });
    }

    /**
     * Инициалищирует закрытие окна
     */
    function initClose() {
        $('.window__close').on('click', function () {
            hide();
        });

        $('.window').on('click', function (e) {
            if (e.target == this) {
                hide();
            }
        });

        $(document).keydown(function (e) {
            e.keyCode == 27 && hide();
        });
    }

    /**
     * Инициализирует прокрутку окна по вертикали
     */
    function initScroll() {
        $(".window__body").niceScroll({
            cursorcolor: '#dddddd',
            horizrailenabled: false
        });
    }

    /**
     * Отображает окно по его классу
     * @param {string} jsClass
     */
    function show(jsClass) {
        hide();

        var cssPath = "." + jsClass;
        $(cssPath).show();
        freshVerticalPosition();
    }

    /**
     * Скрывает все окна
     */
    function hide() {
        $('.window').hide();
    }

    return {
        init: init
    }
})(jQuery);

$(document).ready(function () {
    Project.Window.init();
});
