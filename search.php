<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Parts_per_Million
 */

get_header(); ?>

<main id="primary" class="site-main">
	<div id="search-results" class="page-content-area">
		<?php if (have_posts()): ?>

			<header class="page-header">
				<h1 class="page-title">
					   <?php printf(
          esc_html__("Search Results for: %s", "parts-per-million"),
          "<span>" . get_search_query() . "</span>"
        ); ?>
				</h1>
			</header><!-- .page-header -->
			<div id="page-content" class="page-content">
		<div class="page-content-pa px-4 pt-6 pb-6">
			<div class="w-max max-gl">
				<div class="page-layout-main">
<div class="page-body">
	<ul class="posts-feed">
	<?php
 /* Start the Loop */
 while (have_posts()):
   the_post();

   /**
    * Run the loop for the search to output the results.
    * If you want to overload this in a child theme then include a file
    * called content-search.php and that will be used instead.
    */
   get_template_part("template-parts/content", "search");
 endwhile;

 the_posts_navigation();
 else:get_template_part("template-parts/content", "none");endif; ?>
 </ul>
</div>
<div class="page-sidebar">
<div class="widget widget_categories mb-5">
				<h2 class="section-title mb-5">Topics</h2>
				<!-- CATEGORIES FEED -->
			<?php get_template_part("template-parts/feed/categories", "feed"); ?>
					</div><!-- .widget -->

</div>


	 				</div><!-- /.page-layout-main -->
</div><!-- /.w-max -->
</div><!-- /.page-content-pa -->
</div><!-- /.page-content -->
	</div><!-- /.page-content-area -->
</main><!-- #main -->

<?php get_footer(); ?>
