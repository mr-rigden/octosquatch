<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Plainness
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/jost/stylesheet.css' ); ?>" media="print" onload="this.media='all'">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.jpg' ); ?>" alt="" >





	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="blackLinks">
	<div class="site-name">
		<a href="/">Jason Rigden</a>
	</div>
	<div class="clicky">
		<div id="hamburgerIcon" onclick="toggleNav()"><i class="fa-solid fa-bars"></i></div>
		<div id="closeIcon" class="invisible" onclick="toggleNav()"><i class="fa-solid fa-x"></i></div>
	</div>
</header>
<nav id="navLinks" class="invisible blackLinks">

		<?php
		wp_nav_menu(
			array(
				'menu ' => 'PrimaryMenu',
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
			<?php get_search_form(); ?>
		
</nav>


