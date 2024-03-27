<?php
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

// harry_menu
function harry_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'main-menu',
            'menu_class'      => 'menu-test-class',
            'menu_id'         => 'menu-test-id',
            'fallback_cb'     => 'Harry_Walker_Nav_Menu::fallback',
            'walker'     => new Harry_Walker_Nav_Menu,
        )
    );
}
