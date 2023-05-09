<?php
/**
 * Leaders Block Template.
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
$class_name = 'leaders-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}


// Load values and assign defaults.

$title = get_field( 'title' ) ?: 'Your title here...';
$description = get_field( 'description' ) ?: 'Your description here...';
$leaders = get_posts([
    'post_type' => 'leaders',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'fields' => 'ids'
  ]);
?>





<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name );?>">
    <div class="container">
        <?php 
        $categories = [];
        foreach ($leaders as $leader) {
            $leader_category = get_field("category", $leader);
            if ($leader_category) array_push($categories, $leader_category);
        }
        $categories = array_unique($categories);
        //var_dump($categories);

        foreach ($categories as $category) {
            echo "<div class='section-title' >".$category."</div>";
            echo "<div class='leaders grid'>";
            foreach ($leaders as $leader) {
                $leader_category = get_field("category", $leader);
                if ($leader_category == $category) { ?>
                    <div class='leader-col'>
                        <img src="<?php echo get_field('member_image',$leader) ?>" alt="<?php echo get_field('member_image_alt',$leader) ?>" class="leader-photo"> 
                        <div class="leader-info">
                            <p class="leader-name"><?php echo get_the_title($leader);?></p>
                            <p class="leader-position"><?php echo get_field('member_designation',$leader); ?></p>
                            <p class="leader-description"><?php echo mb_strimwidth(get_field('members_description_excerpt',$leader),0,100,'...'); ?></p>
                            <a href="#" class="more">Read More</a>

                        </div>   
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
    
</div>