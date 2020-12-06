<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package life-tree
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body class="main">
<?php wp_body_open(); ?>
	<header id="header" class="main__header">
		<nav id="main-nav" class="main__nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'Main-menu',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
            <div class="main__burger-menu transition05">
                <span></span>
                <span></span>
            </div>
		</nav>
	</header>
