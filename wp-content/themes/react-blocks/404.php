<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package react-blocks
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="title-only-hero long-left">
            <div class="container">
                <div class="page-title" ><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'react-blocks' );?></div>
            </div>
        </div>

		<div>

          <p>404</p>
        </div>

	</main><!-- #main -->

<?php
get_footer();
