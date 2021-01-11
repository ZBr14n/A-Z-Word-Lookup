<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 * 
 * <?php get_template_part( 'template-parts/header/custom_header' ); ?>

*		<?php get_template_part( 'template-parts/header/branding' ); ?>

*		<?php get_template_part( 'template-parts/header/navigation' ); ?>
 * 
 * 
 */

namespace WP_Rig\WP_Rig;
wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="tzm-header">
			<div class="tzm-header__image">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/tzm-logo2.png" class="clip-animation" width="300px" alt="" srcset="">
			</div>
			<div class="tzm-header__title">
				<h1>TZM-Define.com</h1>
				<h4>Collecting and Defining All Keywords from TZM</h4>
			</div>
		</div>

	</header><!-- #masthead -->


