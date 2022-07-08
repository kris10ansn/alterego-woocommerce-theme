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
	const CATEGORY_HOME = 29;
	$category_id = get_queried_object()->term_id;

	if ( $category_id === null ) {
		$category_id = CATEGORY_HOME;
	}

	$background_color = get_custom_field( 'background_color', "product_cat_${category_id}" );
	$thumbnail_id     = get_term_meta( $category_id, 'thumbnail_id', true );
	?>

    <header id="site-header" style="background-color: <?= $background_color ?>">
        <nav>
            <a href="<?= get_site_url(); ?>" class="logo">
                <img src="<?= get_template_directory_uri(); ?>/assets/alter-ego-logo.svg" alt="Alter ego">
            </a>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
        </nav><!-- #site-navigation -->

        <div class="feature-image">
			<?= wp_get_attachment_image( $thumbnail_id, 'full' ); ?>
        </div>
    </header><!-- #masthead -->
