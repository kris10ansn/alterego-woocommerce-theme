<?php
/**
 * The template for displaying search results pages
 *
 * Template Name: Search page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package alterego
 */

get_header();
?>

    <main>
		<?php
		if ( have_posts() and get_search_query() ) {
			$search_query = esc_html( get_search_query() );

			echo "<h1>Search results for ${search_query}</h1>";
		}

		if ( ! get_search_query() or ! have_posts() ) {
			echo "<h1>Search</h1>";
			get_search_form();
		}
		?>
        <ul class="products">
			<?php while ( have_posts() && get_search_query() ) {
				the_post();
				wc_get_template_part( 'content', 'product' );
			}; ?>
        </ul>
    </main>

<?php
get_footer();
