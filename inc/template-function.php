<?php

// Harry_header
function harry_header()
{
    $header_default_style = get_theme_mod('header_default_setting', 'header-style-1');

    if ($header_default_style == 'header-style-1') {
        get_template_part('template-parts/header/header-1');
    } elseif ($header_default_style == 'header-style-2') {
        get_template_part('template-parts/header/header-2');
    } elseif ($header_default_style == 'header-style-3') {
        get_template_part('template-parts/header/header-3');
    } elseif ($header_default_style == 'header-style-4') {
        get_template_part('template-parts/header/header-4');
    }
}

// harry_logo
function harry_logo()
{
    $harry_logo = get_theme_mod('harry_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
?>
    <a href="<?php echo esc_url(home_url('/')) ?>">
        <img src="<?php echo esc_url($harry_logo); ?>" alt="<?php echo bloginfo(); ?>">
    </a>
<?php
}

// harry_search_logo
function harry_search_logo()
{
    $harry_search_logo = get_theme_mod('harry_search_logo', get_template_directory_uri() . '/assets/img/logo/logo.svg');
?>
    <a href="<?php echo esc_url(home_url('/')) ?>">
        <img src="<?php echo esc_url($harry_search_logo); ?>" alt="<?php echo bloginfo(); ?>">
    </a>
<?php
}

// harry_side_logo
function harry_side_logo()
{
    $harry_side_logo = get_theme_mod('harry_side_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
?>
    <a href="<?php echo esc_url(home_url('/')) ?>">
        <img src="<?php echo esc_url($harry_side_logo); ?>" alt="<?php echo bloginfo(); ?>">
    </a>
<?php
}

// harry_social
function harry_social()
{
    $harry_facebook = get_theme_mod('harry_facebook', __('#', 'harry'));
    $harry_twitter = get_theme_mod('harry_twitter', __('#', 'harry'));
    $harry_youtube = get_theme_mod('harry_youtube', __('#', 'harry'));
    $harry_linkedin = get_theme_mod('harry_linkedin', __('#', 'harry'));
    $harry_flickr = get_theme_mod('harry_flickr', __('', 'harry'));
    $harry_vimeo = get_theme_mod('harry_vimeo', __('', 'harry'));
    $harry_behance = get_theme_mod('harry_behance', __('', 'harry'));
?>
    <?php if (!empty($harry_facebook)) : ?>
        <a href="<?php echo esc_url($harry_facebook); ?>"><i class="fab fa-facebook-f"></i></a>
    <?php endif; ?>

    <?php if (!empty($harry_twitter)) : ?>
        <a href="<?php echo esc_url($harry_twitter); ?>"><i class="fab fa-twitter"></i></a>
    <?php endif; ?>

    <?php if (!empty($harry_youtube)) : ?>
        <a href="<?php echo esc_url($harry_youtube); ?>"><i class="fab fa-youtube"></i></a>
    <?php endif; ?>

    <?php if (!empty($harry_linkedin)) : ?>
        <a href="<?php echo esc_url($harry_linkedin); ?>"><i class="fab fa-linkedin"></i></a>
    <?php endif; ?>

    <?php if (!empty($harry_flickr)) : ?>
        <a href="<?php echo esc_url($harry_flickr); ?>"><i class="fab fa-flickr"></i></a>
    <?php endif; ?>

    <?php if (!empty($harry_vimeo)) : ?>
        <a href="<?php echo esc_url($harry_vimeo); ?>"><i class="fab fa-vimeo"></i></a>
    <?php endif; ?>

    <?php if (!empty($harry_behance)) : ?>
        <a href="<?php echo esc_url($harry_behance); ?>"><i class="fab fa-behance"></i></a>
    <?php endif; ?>
<?php
}

// harry_menu
function harry_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'main-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'fallback_cb'     => 'Harry_Walker_Nav_Menu::fallback',
            'walker'     => new Harry_Walker_Nav_Menu,
        )
    );
}

// harry_menu
function harry_side_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'side-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'fallback_cb'     => 'Harry_Walker_Nav_Menu::fallback',
            'walker'     => new Harry_Walker_Nav_Menu,
        )
    );
}
