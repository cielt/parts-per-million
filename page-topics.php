<?php
/**
 * Template Name: PPM Topics Page
 * Catalogue of all the topics
 *
 *
 * @package Parts_per_Million
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	<!-- All topics -->
	<div class="categories">
		<h2 class=""><?php esc_html_e( 'All Topics', 'parts-per-million' ); ?></h2>
			<ul>
				<?php
					wp_list_categories(
						array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 100,
						)
					);
				?>
			</ul>
	</div><!-- .widget -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
