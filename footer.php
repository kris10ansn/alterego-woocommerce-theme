<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alterego
 */

?>
<footer>
	<?php

	wp_nav_menu( [
		'theme_location' => 'menu-2',
		'menu_id'        => 'footer-menu',
		'menu_class'     => ''
	] );
	wp_nav_menu( [
		'theme_location' => 'menu-3',
		'menu_id'        => 'social-menu',
		'menu_class'     => ''
	] );

	?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
