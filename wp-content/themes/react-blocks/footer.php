<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package react-blocks
 */

?>
<?php
$logo = get_field('footer_logo', 'option');
$navs = get_field('footer_navigation', 'option');
$social = get_field('social_links', 'option');
$additional = get_field('additional_links', 'option');
$builtby = get_field('build_by', 'option');
$copyright = get_field('copyright_text', 'option');
$footer_style = get_field('footer_style', 'option');
$ctas = get_field('cta-footer', 'options');
$defaultctas = get_field('defalt_cta', 'options')
?>
<footer id="colophon" class="site-footer">
    <div id="video-popup" class="video-popup">
        <div id="close-video" class="close-popup"></div>
        <div id="empower-video" class="video-container">
            <iframe src="" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                    style="position:absolute;top:0;left:0;width:100%;height:100%;"
                    title="Purpose-Driven Care (National Ad Spot)"></iframe>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
    </div>
    <div class="footer-cta <?php if ($footer_style) echo " " . $footer_style; ?>">
        <div class="upper-block"></div>
        <div class="cta-block">
            <?php
            global $wp;
            $url = home_url($wp->request);
            $not_default = false;
            foreach ($ctas as $cta) {
                $current_url = $cta['current_page'];
                if (substr($url, -strlen($current_url)) == $current_url) { ?>
                    <p class="cta-heading"><?php echo $cta['cta_text'] ?></p>
                    <a href="<?php echo $cta['link'] ?>" target="_blank"
                       class="btn btn__md secondary"><?php echo $cta['button_text'] ?></a>
                    <?php
                    $not_default = true;
                    break;
                }
            }
            if ($not_default === false) { ?>
                <p class="cta-heading"><?php echo $defaultctas['default_cta_text'] ?></p>
                <a href="<?php echo $defaultctas['default_link'] ?>" target="_blank"
                   class="btn btn__md secondary"><?php echo $defaultctas['default_button_text'] ?></a>
            <?php } ?>
        </div>
        <div class="bottom-block"></div>
    </div>
    <div class="main-footer">
        <div class="container">
            <div class="upper-footer">
                <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>" class="logo-footer">
            </div>
            <div class="bottom-footer flex">
                <div class="footer-navigation grid">
                    <?php foreach ($navs as $nav) { ?>
                        <div class="nav-col">
                            <a href="<?php echo $nav['parent_link']['url'] ?>"
                               class="nav-heading"><?php echo $nav['parent_link']['title'] ?></a>
                            <div class="nav-items">
                                <?php foreach ($nav['sub_links'] as $nav_item) { ?>
                                    <a href="<?php echo $nav_item['link']['url'] ?>"
                                       class="nav-item"><?php echo $nav_item['link']['title'] ?></a>
                                <?php }; ?>
                            </div>
                        </div>
                    <?php }; ?>
                </div>
                <div class="footer-additional-links flex">
                    <div class="social-links">
                        <?php foreach ($social as $social_item) { ?>
                            <a href="<?php echo $social_item['link']['url'] ?>" class="social-link"><img
                                        src="<?php echo $social_item['icon']['url'] ?>"
                                        alt="<?php echo $social_item['icon']['alt'] ?>" class="social-icon"></a>
                        <?php }; ?>
                    </div>
                    <div class="additional-pages flex">
                        <?php foreach ($additional as $additional_item) { ?>
                            <a href="<?php echo $additional_item['link']['url'] ?>"
                               class="additional-link"><?php echo $additional_item['link']['title'] ?></a>
                        <?php }; ?>
                    </div>
                    <div class="footer-info flex">
                        <a href="<?php echo $builtby['url'] ?>" class="built"><?php echo $builtby['title'] ?></a>
                        <p class="copyright"><?php echo $copyright ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
