<?php
/**
 * Image Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'image-block-map';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

// Load values and assign defaults.

$image = get_field('image');
?>

<div <?php echo $anchor; ?>class="<?php echo esc_attr($class_name);?>">
    <div class="container">
        <div class="video-hook">
            <?php
            if (isset($_COOKIE['screenWidth'])) {
            $image_size = image_size_depends_screen_width();
            ?>
            <img class="block-image" src="<?php echo $image["sizes"]["$image_size"] ?>" alt="<?php echo $image['alt'] ?>">
            <?php } else { ?>
                <img class="block-image" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
            <?php } ?>
        </div>
    </div>
</div>

