<?php
new \Kirki\Panel(
    'harry_panel',
    [
        'priority'    => 10,
        'title'       => esc_html__('Harry Option', 'kirki'),
        'description' => esc_html__('My Panel Description.', 'kirki'),
    ]
);

// Header info section
function harry_header_info()
{
    new \Kirki\Section(
        'harry_header_info',
        [
            'title'       => esc_html__('Header info', 'kirki'),
            'description' => esc_html__('My Section Description.', 'kirki'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_email',
            'label'    => esc_html__('Text Control', 'kirki'),
            'section'  => 'harry_header_info',
            'default'  => esc_html__('This is a default value', 'kirki'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'harry_phone',
            'label'       => esc_html__('Textarea Control', 'kirki'),
            'section'     => 'harry_header_info',
            'default'     => esc_html__('This is a default value', 'kirki'),
        ]
    );

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'harry_timing',
            'label'       => esc_html__('Textarea Control', 'kirki'),
            'section'     => 'harry_header_info',
            'default'     => esc_html__('This is a default value', 'kirki'),
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
            'title'       => esc_html__('Logo', 'kirki'),
            'description' => esc_html__('Logo section here', 'kirki'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_email',
            'label'    => esc_html__('Text Control', 'kirki'),
            'section'  => 'harry_header_logo',
            'default'  => esc_html__('Please upload your logo here', 'kirki'),
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.svg',
            'priority' => 10,
        ]
    );
}
harry_logo_section();