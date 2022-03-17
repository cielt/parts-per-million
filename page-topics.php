<?php
/**
 * Template Name: PPM Topics Page
 * Catalogue of all the topics
 *
 *
 * @package Parts_per_Million
 */

get_header(); ?>

<main id="primary" class="site-main">
	<div id="topics" class="page-content-area">
		<?php while (have_posts()):
    the_post();
    get_template_part("template-parts/content", "page");
  endwhile;
// End of the loop.
?>
	<!-- All topics -->
	<div class="categories">
		<h2 class="h1"><?php esc_html_e("All PPM Topics", "parts-per-million"); ?></h2>
			<ul class="category-links-list">
				<?php wp_list_categories([
      "orderby" => "count",
      "order" => "DESC",
      "show_count" => 1,
      "title_li" => "",
      "number" => 100,
      "hide_title_if_empty" => true,
    ]); ?>
			</ul>
	</div><!-- .categories -->
	</div><!-- /.page-content-area -->
</main><!-- #main -->

<?php get_footer(); ?>
