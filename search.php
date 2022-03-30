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
		<header class="page-header w-max max-gl">
			<div class="page-title-block">
				<h1 class="page-title">
		<?php
  global $wp_query;

  if (have_posts()):
    printf(
      esc_html__("Search Results for: %s", "parts-per-million"),
      "<span>" . get_search_query() . "</span>"
    );
  else:
    printf(esc_html_e("Nothing Found", "parts-per-million"));
  endif;
  ?>
		</h1>
</div><!-- /.page-title-block -->
	</header><!-- .page-header -->
			<div id="page-content" class="page-content">
		<div class="page-content-pa px-4 pt-6 pb-6">
			<div class="w-max max-gl">
				<div class="page-layout-main">
<div class="page-body">
	<?php
 if (have_posts()):
   /* Start the Loop */
   get_template_part("template-parts/content", "search");
   the_posts_navigation();
 else:
   get_template_part("template-parts/content", "none");
 endif;
 wp_reset_postdata();
 ?>

</div><!-- /.page-body -->
<div class="page-sidebar">
	<div class="widget widget_categories mb-5">
		<h3 class="section-title mb-5">Topics</h3>
		<!-- CATEGORIES FEED -->
		<?php get_template_part("template-parts/feed/categories", "feed"); ?>
	</div><!-- .widget -->
</div><!-- /.page-sidebar -->


	 				</div><!-- /.page-layout-main -->
				</div><!-- /.w-max -->
			</div><!-- /.page-content-pa -->
		</div><!-- /.page-content -->
	</div><!-- /.page-content-area -->
</main><!-- #main -->

<?php get_footer(); ?>
