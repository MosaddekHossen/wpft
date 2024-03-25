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

// harry_menu
function harry_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'main-menu',
            'menu_class'      => 'menu-test-class',
            'menu_id'         => 'menu-test-id',
            // 'fallback_cb'     => 'Harry_Walker_Nav_Menu::fallback',
            // 'walker'     => new Harry_Walker_Nav_Menu,
        )
    );
}
