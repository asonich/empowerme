<?php
/**
 * Hero Video Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */ 

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'title-video-hero';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}


// Load values and assign defaults.
$background = get_field( 'background' );
$title = get_field( 'title' ) ?: 'Your title here...';
$description = get_field( 'description' ) ?: 'Your description here...';
$video_image = get_field('video_image');
?>

<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); if ($background) echo " ".$background; ?>">
    <div class="container">
        <div class="page-title" ><?php echo esc_html( $title ); ?></div>
        <div class="page-description"><?php echo esc_html( $description ); ?></div>
        <img class="hero-image" src="<?php echo $video_image['url']?>" alt="<?php echo $video_image['alt']?>">

    </div>
    
</div>