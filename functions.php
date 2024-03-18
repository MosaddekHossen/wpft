<?php
// Harry theme support
function harry_theme_support()
{
    /**  thumbnails **/
    add_theme_support("post-thumbnails");

    /** automatic feed link**/
    add_theme_support('automatic-feed-links');

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
}
add_action("after_setup_theme", "harry_theme_support");

// Harry_header
function harry_header()
{
    get_template_part('template-parts/header/header-1');
}

include_once("inc/common/scripts.php");
include_once("inc/harry-kirki.php");
