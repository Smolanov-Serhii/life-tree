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
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/images/favicon.png" sizes="32x32">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body class="main">
<?php wp_body_open(); ?>
	<header id="header" class="main__header">
		<nav id="main-nav" class="main__nav">
            <div class="main__mobile-logo">
                <?php
                the_custom_logo();
                ?>
            </div>
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
                <span></span>
            </div>
		</nav>
	</header>
