<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parts_per_Million
 */

get_header(); ?>

	<main id="primary" class="site-main">
		<div id="archive" class="page-content-area ">
		<?php
  global $wp_query;
  $args = array_merge($wp_query->query_vars, [
    "post_type" => ["post", "story"],
    "meta_key" => "date_published",
    "orderby" => "meta_value",
    "order" => "DESC",
    "posts_per_page" => 10,
  ]);
  query_posts($args);
  ?>

			<header class="page-header w-max max-gl">
				<div class="page-title-block">
					<?php the_archive_title('<h1 class="page-title archive-title">', "</h1>"); ?>
					<?php if (get_the_archive_description()): ?>
						<?php printf(
        "<div class='page-intro archive-description'>" .
          get_the_archive_description() .
          "</div>"
      ); ?>
					<?php endif; ?>
				</div>
			</header><!-- .page-header -->
<div id="page-content" class="page-content">
		<div class="page-content-pa px-4 pt-6 pb-6">
			<div class="w-max max-gl">
				<div class="page-layout-main">
				<div class="page-body search-results-area">
					<?php if (have_posts()): ?>
			<p class="search-results-summary"><?php printf(
     esc_html__("Showing: %s items", "parts-per-million"),
     "<span>" . $wp_query->found_posts . "</span>"
   ); ?></p>
					<ul class="posts-feed">
					<?php
     /* Start the Loop */
     while (have_posts()):
       the_post();

       /*
        * Include the Post-Type-specific template for the content.
        * If you want to override this in a child theme, then include a file
        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
        */
       get_template_part("template-parts/feed/search", "result-item");
     endwhile;

     the_posts_navigation();
     else:get_template_part("template-parts/content", "none");endif; ?>
		 </ul>
		  <?php wp_reset_postdata(); ?>
				</div><!-- /.page-body -->
				<div class="page-sidebar">
					<div class="widget widget_categories mb-5">
				<h3 class="section-title mb-5">Topics</h3>
				<!-- CATEGORIES FEED -->
			<?php get_template_part("template-parts/feed/categories", "feed"); ?>
					</div><!-- .widget -->
				</div><!-- /.page-sidebar -->
	 </div><!-- /.w-max -->
	</div><!-- /.page-content-pa -->
	</div><!-- /.page-content -->
</div><!-- /.page-content-area -->
	</main><!-- #main -->

<?php get_footer(); ?>
