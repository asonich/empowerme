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
    'title_text_block' => [
        'name'            => 'title_text_block',
        'title'           => ('Title Text '),
        'description'     => ('Description'),
        'render_callback' => 'render_acf_block_callback',
        'category'        => 'happen-blocks',
        'icon'            => 'block-default',
    ],
    'title_video_hero' => [ 
        'name'            => 'title_video_hero',
        'title'           => ('Title Video Hero '),
        'description'     => ('Description'),
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
    'features_block' => [
        'name'            => 'features_block',
        'title'           => ('Features Block title'),
        'description'     => ('Features Block description'),
        'render_callback' => 'render_acf_block_callback',
        'category'        => 'happen-blocks',
        'icon'            => 'block-default',
    ],
    'eyebrow_text_block' => [
        'name'            => 'eyebrow_text_block',
        'title'           => ('Eyebrow text block'),
        'description'     => ('Eyebrow text description'),
        'render_callback' => 'render_acf_block_callback',
        'category'        => 'happen-blocks',
        'icon'            => 'block-default',
    ],

];