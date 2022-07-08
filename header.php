<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alterego
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
<div id="page">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alterego' ); ?></a>

	<?php
	$category_id      = get_category_id( 'home' );
	$background_color = get_category_custom_field( 'background_color', $category_id );
	?>

    <header id="site-header" style="background-color: <?= $background_color ?>">
		<?php get_template_part( 'template-parts/category-navigation' ); ?>
		<?php get_template_part( 'template-parts/category-featured-image' ); ?>
    </header>
