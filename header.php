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
	if ( is_product() ) {
		/**
		 * Hook: woocommerce_before_single_product.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 */
		do_action( 'woocommerce_before_single_product' );

		the_post();
	}

	$background_color = null;

	if ( is_home() or is_product_category() ) {
		$background_color = get_category_custom_field( 'background_color', get_category_id( 'home' ) );
	}
	if ( is_product() ) {
		$background_color = get_custom_field( 'background_color' );
	}
	?>

    <header
            id="site-header"
            style="background-color: <?= $background_color ?>"
            class="<?php
			if ( is_home() or is_product_category() or is_product() ) {
				echo "full-page ";
			}
			if ( is_home() or is_product_category() ) {
				echo "category ";
			}
			?>"
    >

        <a href="<?= get_site_url(); ?>" id="logo">
            <img src="<?= get_template_directory_uri(); ?>/assets/alter-ego-logo.svg" alt="Alter ego">
        </a>

        <div class="content">
			<?php
			if ( is_home() or is_product_category() or is_product() ) {
				get_template_part( 'template-parts/category-navigation' );
			}

			if ( is_home() or is_product_category() ) {
				get_template_part( 'template-parts/category-featured-image' );
			}

			if ( is_product() ) {
				wc_get_template_part( 'content', 'single-product' );
			}
			?>
        </div>
    </header>
