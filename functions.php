<?php

// Harry theme support
function harry_theme_support()
{
    /**  thumbnails **/
    add_theme_support("post-thumbnails");

    /** automatic feed link**/
    add_theme_support('automatic-feed-links');

    /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sectox, use a find and replace
		* to change 'sectox' to the name of your theme in all the template files.
	*/
    load_theme_textdomain('harry', get_template_directory() . '/languages');

    /** tag-title **/
    add_theme_support('title-tag');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('post-formats', array(
        'image',
        'video',
        'audio',
        'gallery',
        'quote'
    ));

    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'harry'),
            'side-menu' => __('Side Menu', 'harry'),
            'footer-menu' => __('Footer Menu', 'harry'),
            'language-menu' => __('Language Menu', 'harry'),
        )
    );

    remove_theme_support('widgets-block-editor');

    add_theme_support('woocommerce');

    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    // Remove woocommerce defauly styles
    add_filter('woocommerce_enqueue_styles', '__return_false');

    // add_theme_support('woocommerce', array(
    //     'thumbnail_image_width' => 200,
    //     'gallery_thumbnail_image_width' => 200,
    // ));
}
add_action("after_setup_theme", "harry_theme_support");

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function harry_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('harry_content_width', 640);
}
add_action('after_setup_theme', 'harry_content_width', 0);

// harry_widgets
function harry_widgets()
{
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'harry'),
        'id'            => 'blog-sidebar',
        'description'   => __('Widgets in this area will be shown blog sidebar.', 'harry'),
        'before_widget' => '<div id="%1$s" class="sidebar__widget mb-40 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="sidebar__widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Services Sidebar', 'harry'),
        'id'            => 'services-sidebar',
        'description'   => __('Widgets in this area will be shown services sidebar.', 'harry'),
        'before_widget' => '<div id="%1$s" class="services__widget-item-2 mb-30 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="services__contact-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Product Sidebar', 'harry'),
        'id'            => 'product-sidebar',
        'description'   => __('Widgets in this area will be shown product sidebar.', 'harry'),
        'before_widget' => '<div id="%1$s" class="shop__widget tp-accordion %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="product__contact-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 01', 'harry'),
        'id'            => 'footer-widget-01',
        'description'   => __('Widgets in this area will be shown footer.', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 02', 'harry'),
        'id'            => 'footer-widget-02',
        'description'   => __('Widgets in this area will be shown footer.', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-2 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 03', 'harry'),
        'id'            => 'footer-widget-03',
        'description'   => __('Widgets in this area will be shown footer.', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-3 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 04', 'harry'),
        'id'            => 'footer-widget-04',
        'description'   => __('Widgets in this area will be shown footer.', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'harry_widgets');

// nec files
include_once("inc/common/scripts.php");
// include_once("inc/common/comments-form-list.php");

// Kirki class condition
if (class_exists('Kirki')) {
    include_once("inc/harry-kirki.php");
}

if (class_exists('WooCommerce')) {
    include_once("inc/woo.php");
}
include_once("inc/template-function.php");
include_once("inc/nav-walker.php");
include_once("inc/breadcrumb.php");
include_once("inc/class-tgm-plugin-activation.php");
include_once("inc/add_plugin.php");
