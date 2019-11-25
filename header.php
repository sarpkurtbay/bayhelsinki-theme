<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bayhelsinki
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

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bayhelsinki' ); ?></a>
	
	<!-- <header id="masthead" class="site-header"> -->

		<?php if ( is_woocommerce() ) : ?>

   			<?php get_template_part('template-parts/store-header'); ?>

		<!-- ADD CONDITIONAL TAGS TO TELL WHEN ON STUDIO SIDE AND WHEN ON STORE SIDE OF THE WEBSITE -->
		<?php elseif (!is_woocommerce() ) : ?> 
			  
			<?php get_template_part('template-parts/studio-header'); ?>
		
		<?php endif; ?>

	<!-- </header>#masthead -->

	<div id="content" class="site-content">
	

