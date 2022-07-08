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
</nav>