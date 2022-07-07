<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alterego
 */

get_header();

$query = new WP_Query( [
	"post_type"      => "product",
	"posts_per_page" => 3,
	"tax_query"      => [
		[
			"taxonomy" => "product_visibility",
			"field"    => "name",
			"terms"    => "featured"
		]
	]
] );

?>
    <main id="primary">
        <ul class="products">
			<?php
			while ( $query->have_posts() ) {
				$query->the_post();
				wc_get_template_part( 'content', 'product' );
			}
			wp_reset_postdata();
			?>
        </ul>
    </main>
<?php
get_footer();
