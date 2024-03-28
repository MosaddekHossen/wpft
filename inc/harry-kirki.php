<?php
new \Kirki\Panel(
    'harry_panel',
    [
        'priority'    => 10,
        'title'       => esc_html__('Harry Option', 'harry'),
        'description' => esc_html__('My Panel Description.', 'harry'),
    ]
);

// Header info section
function harry_header_info()
{
    new \Kirki\Section(
        'harry_header_info',
        [
            'title'       => esc_html__('Header info', 'harry'),
            'description' => esc_html__('My Section Description.', 'harry'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_email',
            'label'    => esc_html__('Header Email', 'harry'),
            'section'  => 'harry_header_info',
            'default'  => esc_html__('info@example.com', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'harry_phone',
            'label'       => esc_html__('Header Phone', 'harry'),
            'section'     => 'harry_header_info',
            'default'     => esc_html__('+964 742 44 763', 'harry'),
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'harry_timing',
            'label'       => esc_html__('Header Time', 'harry'),
            'section'     => 'harry_header_info',
            'default'     => esc_html__('Sunday-Thures 10am-07pm', 'harry'),
        ]
    );
}
harry_header_info();

// harry_side_info_section
function harry_side_info_section()
{
    new \Kirki\Section(
        'harry_side_info',
        [
            'title'       => esc_html__('Side Info', 'harry'),
            'description' => esc_html__('Side info section here', 'harry'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_side_logo',
            'label'    =>  esc_html__('Side info logo', 'harry'),
            'section'  => 'harry_side_info',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.svg',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_side_email',
            'label'    => esc_html__('Header side email', 'harry'),
            'section'  => 'harry_side_info',
            'default'  => esc_html__('info@example.com', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_side_button',
            'label'    => esc_html__('Header side button', 'harry'),
            'section'  => 'harry_side_info',
            'default'  => esc_html__('Getting Started', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_side_button_url',
            'label'    => esc_html__('Header side button url', 'harry'),
            'section'  => 'harry_side_info',
            'default'  => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'harry_side_phone',
            'label'       => esc_html__('Header side phone', 'harry'),
            'section'     => 'harry_side_info',
            'default'     => esc_html__('+964 742 44 763', 'harry'),
        ]
    );
}
harry_side_info_section();

// harry_social_section
function harry_social_section()
{
    new \Kirki\Section(
        'harry_social_info',
        [
            'title'       => esc_html__('Social Icon', 'harry'),
            'description' => esc_html__('Side info section here', 'harry'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_facebook',
            'label'    => esc_html__('Facebook Url', 'harry'),
            'section'  => 'harry_social_info',
            'default'  => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_twitter',
            'label'    => esc_html__('Twitter Url', 'harry'),
            'section'  => 'harry_social_info',
            'default'  => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_youtube',
            'label'    => esc_html__('Youtube Url', 'harry'),
            'section'  => 'harry_social_info',
            'default'  => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_linkedin',
            'label'    => esc_html__('Linkedin Url', 'harry'),
            'section'  => 'harry_social_info',
            'default'  => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_flickr',
            'label'    => esc_html__('Flickr Url', 'harry'),
            'section'  => 'harry_social_info',
            'default'  => esc_html__('', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_vimeo',
            'label'    => esc_html__('Vimeo Url', 'harry'),
            'section'  => 'harry_social_info',
            'default'  => esc_html__('', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_behance',
            'label'    => esc_html__('Behance Url', 'harry'),
            'section'  => 'harry_social_info',
            'default'  => esc_html__('', 'harry'),
            'priority' => 10,
        ]
    );
}
harry_social_section();

// Header logo section
function harry_logo_section()
{
    new \Kirki\Section(
        'harry_header_logo',
        [
            'title'       => esc_html__('Logo', 'harry'),
            'description' => esc_html__('Logo section here', 'harry'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_logo',
            'label'    => esc_html__('Logo', 'harry'),
            'section'  => 'harry_header_logo',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.svg',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_search_logo',
            'label'    => esc_html__('Search Logo', 'harry'),
            'section'  => 'harry_header_logo',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo.svg',
            'priority' => 10,
        ]
    );
}
harry_logo_section();
