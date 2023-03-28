<?php

$blocks = [
    'test_block' => [
        'name'            => 'test_block',
        'title'           => ('Test Block'),
        'description'     => ('This is a test block'),
        //'render_template' => get_template_directory(). '/blocks/templates/test-block.php',
        'render_callback' => 'render_acf_block_callback',
        'category'        => 'happen-blocks',
        'icon'            => 'block-default',
    ],
    'title_only_hero' => [
        'name'            => 'title_only_hero',
        'title'           => ('Title Only Hero'),
        'description'     => ('Title Only Hero section with background select'),
        'render_callback' => 'render_acf_block_callback',
        'category'        => 'happen-blocks',
        'icon'            => 'block-default',
    ],
    'leaders_block' => [
        'name'            => 'leaders_block',
        'title'           => ('Leaders Block'),
        'description'     => ('Leaders Block section'),
        'render_callback' => 'render_acf_block_callback',
        'category'        => 'happen-blocks',
        'icon'            => 'block-default',
    ],
];