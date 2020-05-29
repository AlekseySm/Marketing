<?php

if (!function_exists('travel_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function travel_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Kamelot, use a find and replace
         * to change 'kamelot' to the name of your theme in all the template files.
         */
        load_theme_textdomain('travel', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'travel'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'travel_setup');

add_action('customize_register', 'dco_customize_register');

function travel_scripts()
{
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/Verstka/liberary/slick/slick-theme.css', array(), '0.2');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/Verstka/liberary/slick/slick.css', array(), '0.2');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/Verstka//css/magnific-popup.css', array(), '0.2');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/Verstka/css/style.css', array(), '0.2');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('Jquery', get_template_directory_uri() . '/Verstka/js/libs/jquery-3.5.1.min.js', array(), '0.2');
    wp_enqueue_script('Mask', get_template_directory_uri() . '/Verstka/js/libs/jquery.maskedinput.min.js', array(), '0.2', true);
    wp_enqueue_script('magnificPopup', get_template_directory_uri() . '/Verstka/js/libs/jquery.magnific-popup.min.js', array(), '0.2', true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/Verstka/js/libs/owl.carousel.min.js', array(), '20151215', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/Verstka/liberary/slick/slick.min.js', array(), '20151215', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/Verstka/js/script.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'travel_scripts');

function add_additional_class_on_li($classes, $item, $args)
{
    if ($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/**
 * Создаём страницу опций
 */

if (function_exists('acf_add_options_page')) {

    // add parent
    $parent = acf_add_options_page(array(

        /* (строка) Заголовок для страницы настроек. Обязательно. */
        'page_title' => 'Options',

        /* (строка) Заголов для боковой панели wp-admin. По-умолчанию такой же, как page_title */
        'menu_title' => 'Options',

        /* (строка) URL слаг для идентификации страницы настроек.
        По-умолчанию преобразует menu_title в url */
        'menu_slug' => 'options',

        /* (строка) Какому типу пользователей предоставить возможность редактирования. По-умолчанию edit_posts.
        'capability' => 'edit_posts',

        /* (число|строка) Позиция в меню.
        Внимание: Если в двух пунктах меню используется одна и та же позиция, один из элементов может быть перезаписан так, что будет отображаться только один элемент!
        Риск конфликта может быть уменьшен за счет использования десятичных чисел вместо целых значений, например. '63 .3 'вместо 63 (должны быть кавычки).
        По-умолчанию помещается в самый низ. */
        'position' => false,

        /* (строка) slug родительской страниц WP admin page. Если установлено, то текущая страница станет дочерней по отношению к родительской. */
        'parent_slug' => '',

        /* (строка) Иконка для пункта меню. По-умолчанию стандартная иконка WordPress для меню.
        Больше иконок тут: https://developer.wordpress.org/resource/dashicons/ */
        'icon_url' => false,

        /* (логический) Только для родительских страниц.
        Если установлено значение true, то эта страница будет перенаправлять на первую дочернюю страницу (если существует дочерняя страница).
        Если установлено значение false, то эта страница появится рядом с дочерними страницами. По умолчанию true */
        'redirect' => false,

        /* (число|строка) '$post_id' для сохранения/получения данных. Может быть установлено цифрами для post ID (123), или строкой ('user_2').
        По-умолчанию 'options'. Добавлено в v5.2.7 */
        'post_id' => 'options',

        /* (логический)  Загружать ли параметры (значения, сохраненные для этой страницы параметров), когда WordPress запускается.
        По-умолчанию false. Добавлено в v5.2.8. */
        'autoload' => false,

        /* (строка) Текст кнопки обновить. Добавлено в v5.3.7. */
        'update_button'        => __('Update', 'acf'),

        /* (строка) Сообщение, появляющееся после сохранения настроек. Добавлено в v5.6.0. */
        'updated_message'    => __("Options Updated", 'acf'),

    ));
}
