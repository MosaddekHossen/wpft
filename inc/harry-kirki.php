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
