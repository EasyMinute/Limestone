<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package proacto
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

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="header__wrapper">
				<a href="/" class="header__logo">
					<img src="<?php echo esc_url( get_field('logo', 'option')['url'] ) ?>" alt="<?php echo esc_attr( get_field('logo', 'option')['alt'] ) ?>">
				</a>
			
				<nav id="site-navigation" class="main-navigation">
					<button class="header__closer mobile">
						<span class="closer__line"></span>
						<span class="closer__line"></span>
					</button>
					<?php
					wp_nav_menu(
						array(
							'menu' => 'main-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<button class="header__toggler mobile">
					<span class="toggler__line"></span>
					<span class="toggler__line"></span>
					<span class="toggler__line"></span>
				</button>

			</div>
		</div>
	</header><!-- #masthead -->
	<main>
