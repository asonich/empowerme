<?php
/**
 * Features Block Template.
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
$class_name = 'features';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}


// Load values and assign defaults.
$align = get_field( 'alignment' );
$title = get_field( 'title' ) ?: 'Your title here...';
$description = get_field( 'description' ) ?: 'Your description here...';
$image = get_field('image');
?>

<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name );?>">
    <div class="container <?php if ($align) echo " ".$align; ?>">
        <img src="<?php echo $image["url"]?>" alt="<?php echo $image["alt"]?>" class="features-image">
        <div class="text-col">
            <p class="section-title" ><?php echo esc_html( $title ); ?></p>
            <p class="section-description"><?php echo esc_html( $description ); ?></p>
        </div>
       
    </div>
    
</div>