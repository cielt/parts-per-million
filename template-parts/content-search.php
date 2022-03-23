<?php
/**
 * Template part for displaying a list of search results on the search page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parts_Per_Million
 */
?>
<div class="search-form-block mb-5">
	 <?php get_search_form(); ?>
</div>
<div class="search-results-area">
	<?php if (have_posts()): ?>
			<p class="search-results-summary"><?php printf(
     esc_html__("Showing: %s Results", "parts-per-million"),
     "<span>" . $wp_query->found_posts . "</span>"
   ); ?></p>
	<?php endif; ?>
	<?php
 printf("<ul class='posts-feed'>");
 /* Start the Loop */
 while (have_posts()):
   the_post();
   /**
    * Run the loop for the search to output the results.
    * If you want to overload this in a child theme then include a file
    * called content-search.php and that will be used instead.
    */
   get_template_part("template-parts/feed/search", "result-item");
 endwhile;
 printf("</ul>");
 ?>
</div><!-- /.search-results-area -->
