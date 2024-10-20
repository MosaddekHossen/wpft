<?php

// Harry_header
function harry_header()
{
    $header_default_style = get_theme_mod('header_default_setting', 'header-style-1');
    $header_option = function_exists('get_field') ? get_field('header_style') : null;

    if ($header_option == 'header-style-1') {
        get_template_part('template-parts/header/header-1');
    } elseif ($header_option == 'header-style-2') {
        get_template_part('template-parts/header/header-2');
    } elseif ($header_option == 'header-style-3') {
        get_template_part('template-parts/header/header-3');
    } elseif ($header_option == 'header-style-4') {
        get_template_part('template-parts/header/header-4');
    } elseif ($header_option == 'header-style-5') {
        get_template_part('template-parts/header/header-5');
    } else {
        if ($header_default_style == 'header-style-1') {
            get_template_part('template-parts/header/header-1');
        } elseif ($header_default_style == 'header-style-2') {
            get_template_part('template-parts/header/header-2');
        } elseif ($header_default_style == 'header-style-3') {
            get_template_part('template-parts/header/header-3');
        } elseif ($header_default_style == 'header-style-4') {
            get_template_part('template-parts/header/header-4');
        } elseif ($header_default_style == 'header-style-5') {
            get_template_part('template-parts/header/header-5');
        }
    }
}

// harry_footer
function harry_footer()
{
    get_template_part('template-parts/footer/footer-1');
}

// harry_logo
function harry_logo()
{
    $harry_logo = get_theme_mod('harry_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_logo); ?>" alt="<?php echo bloginfo(); ?>">
    </a>
<?php
}

// harry_search_logo
function harry_search_logo()
{
    $harry_search_logo = get_theme_mod('harry_search_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
    $page_logo = function_exists('get_field') ? get_field('page_logo') : null;
?>

    <?php if (!empty($page_logo)) : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url($page_logo['url']); ?>" alt="<?php echo bloginfo(); ?>">
        </a>
    <?php else : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url($harry_search_logo); ?>" alt="<?php echo bloginfo(); ?>">
        </a>
    <?php endif; ?>
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
    $harry_pinterest = get_theme_mod('harry_pinterest', __('', 'harry'));
    $harry_instagram = get_theme_mod('harry_instagram', __('', 'harry'));
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

    <?php if (!empty($harry_pinterest)) : ?>
        <a href="<?php echo esc_url($harry_pinterest); ?>"><i class="fab fa-pinterest-p"></i></a>
    <?php endif; ?>

    <?php if (!empty($harry_instagram)) : ?>
        <a href="<?php echo esc_url($harry_instagram); ?>"><i class="fab fa-instagram"></i></a>
    <?php endif; ?>
<?php
}

// footer_copyright
function footer_copyright()
{
    $footer_copyright = get_theme_mod('harry_footer_copyright', __('© 2024 Harry All Rights Reserved.', 'harry'));
?>
    <?php echo harry_kses($footer_copyright); ?>
    <?php
}

/**
 * Sanitize SVG markup for front-end display.
 *
 * @param  string $svg SVG markup to sanitize.
 * @return string 	  Sanitized markup.
 */
function harry_kses($harry_custom_tag = '')
{
    $harry_allowed_html = [
        'svg'                       => [
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ],
        'path'  => [
            'd' => true,
            'fill' => true,
            'stroke' => true,
            'stroke-width' => true,
            'stroke-linecap' => true,
            'stroke-linejoin' => true,
            'opacity' => true,
        ],
        'a'                         => [
            'class'     => [],
            'href'      => [],
            'title'     => [],
            'target'    => [],
            'rel'       => [],
        ],
        'b' => [],
        'blockquote'                  => [
            'cite'      => [],
        ],
        'cite'                        => [
            'title'     => [],
        ],
        'code'                => [],
        'del'                          => [
            'datetime'   => [],
            'title'      => [],
        ],
        'dd'                => [],
        'div'                           => [
            'class'      => [],
            'title'      => [],
            'style'      => [],
        ],
        'dl'                     => [],
        'dt'                     => [],
        'em'                     => [],
        'h1'                     => [],
        'h2'                     => [],
        'h3'                     => [],
        'h4'                     => [],
        'h5'                     => [],
        'h6'                     => [],
        'i'                              => [
            'class'       => [],
        ],
        'img'                            => [
            'alt'     => [],
            'class'   => [],
            'height'  => [],
            'src'     => [],
            'width'   => [],
        ],
        'li'                              => [
            'class'   => [],
        ],
        'ol'                              => [
            'class'   => [],
        ],
        'p'                               => [
            'class'   => [],
        ],
        'q'                               => [
            'cite'    => [],
            'title'   => [],
        ],
        'span'                            => [
            'class'   => [],
            'title'   => [],
            'style'   => [],
        ],
        'iframe'                          => [
            'width'         => [],
            'height'        => [],
            'scrolling'     => [],
            'frameborder'   => [],
            'allow'         => [],
            'src'           => [],
        ],
        'strike'                    => [],
        'br'                        => [],
        'strong'                    => [],
    ];

    return wp_kses($harry_custom_tag, $harry_allowed_html);
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
function harry_language_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'language-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'fallback_cb'     => 'Harry_Walker_Nav_Menu::fallback',
            'walker'     => new Harry_Walker_Nav_Menu,
        )
    );
}

// harry_side_menu
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

// harry_footer_menu
function harry_footer_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'footer-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'fallback_cb'     => 'Harry_Walker_Nav_Menu::fallback',
            'walker'     => new Harry_Walker_Nav_Menu,
        )
    );
}

// harry_blog_navigation
function harry_blog_navigation()
{
    $pages = paginate_links(array(
        'type' => 'array',
        'prev_text' => __('<svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.17749 10.105L1.62499 5.55248L6.17749 0.999981" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.3767 5.55249L1.75421 5.55249" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
     </svg>                                       
     Prev', 'harry'),
        'next_text' => __('Next
        <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M9.82422 1L14.3767 5.5525L9.82422 10.105" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
           <path d="M1.625 5.55249H14.2475" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>', 'harry')
    ));
    if ($pages) {
        echo '<nav><ul>';
        foreach ($pages as $page) {
            echo "<li>$page</li>";
        }
        echo '</ul></nav>';
    }
}

// harry_tags
function harry_tags()
{
    $post_tags = get_the_tags();
    if ($post_tags) {
        foreach ($post_tags as $tag) {
    ?>
            <a href="<?php echo get_tag_link($tag); ?>"><?php echo esc_html($tag->name); ?></a>
        <?php
        }
    } else {
        ?>
        <i>No tags found</i>
    <?php
    }
}

// harry_social_share
function harry_social_share()
{ ?>
    <div class="postbox__share text-xl-end">
        <span>Share On:</span>
        <a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>" target="_blank">
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
    </div>
<?php
}

// track_post_views
function track_post_views()
{
    if (is_single()) {
        global $post;
        $post_id = $post->ID;

        $views = get_post_meta($post_id, 'post_views', true);
        $views = $views ? $views : 0;

        $views++;
        update_post_meta($post_id, 'post_views', $views);
    }
}
add_action('wp_head', 'track_post_views');

// display_post_views
function display_post_views()
{
    if (is_single()) {
        $post_views = get_post_meta(get_the_ID(), 'post_views', true);
        echo esc_html($post_views ? $post_views : 0);
    }
}

// Add filter to customize search form
function harry_search_form($search_form)
{
    $search_form = '<div class="sidebar__search">
                <form role="search" method="get" class="search-form" action="' . esc_url(home_url('/')) . '">
                    <div class="sidebar__search-input">
                        <input type="search" class="search-field" placeholder="' . esc_attr__('Enter your keywords...', 'harry') . '" value="' . get_search_query() . '" name="s" />
                        <button type="submit" class="search-submit">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>';

    return $search_form;
}
add_filter('get_search_form', 'harry_search_form');
