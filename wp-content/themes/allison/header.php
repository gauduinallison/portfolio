<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Allison
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header grid-container">
		<div class="grid-x">
			<?php the_custom_logo(); ?>
			<h1 class="cell large-12 text-center"><?php single_post_title(); ?></h1>
				<div class="large-12 cell"><?php the_post_thumbnail(); ?></div>
					<nav id="site-navigation" class="main-navigation cell large-12">
						<?php
							wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'          => 'menu align-center',
							) );
						?>
					</nav>
				</div>

		<!-- #site-navigation -->
	</header><!-- #masthead -->
