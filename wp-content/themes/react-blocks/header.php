<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package react-blocks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
 $logo = get_field('logo_image', 'option'); 
 $nav = get_field('menu', 'option');
 $login_bnt = get_field('login_button', 'option');
 $partners_bnt = get_field('partners_button', 'option');
?>
<div id="page">
	<header id="masthead" class="site-header">
		<div class="container flex">
			<div class="logo-col"><a href=""><img  src="<?php echo $logo['url'] ;?>" alt="<?php echo $logo['alt'] ;?>" class="site-logo"></a></div>
			<div class="navigation">
				<nav class="menu">
				<?php foreach( $nav as $link) {?>
					<a href="<?php echo $link['parent_link']['url']?>" class="nav-link"><?php echo $link['parent_link']['title']?></a>
				<?php };?>	
				</nav>
				<div class="button-col">
					<a href="" class="btn btn__md secondary">Community Login</a>
					<a href="" class="btn btn__md primary">Partner With Us</a>
				</div>
				<div class="burger-button">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
