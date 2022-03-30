<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Parts_per_Million
 */

get_header(); ?>

	<main id="primary" class="site-main">
<div id="page-404" class="page-content-area ">
		<section class="error-404 not-found">
			<header class="page-header w-max max-gl">
				<div class="page-title-block">
					<h1 class="page-title"><?php esc_html_e(
       "Oops! That page can&rsquo;t be found.",
       "parts-per-million"
     ); ?></h1>
				</div>
			</header><!-- .page-header -->

			<div class="page-content">
				<div class="page-content-pa px-4 pt-6 pb-6">
			<div class="w-max max-gl">
				<div class="page-layout-main">
				<div class="page-body">

				<p><?php esc_html_e(
      "It looks like nothing was found at this location. Maybe try one of the links below or a search?",
      "parts-per-million"
    ); ?></p>

					<?php
     get_search_form();

     the_widget("WP_Widget_Recent_Posts");
     ?>


		 	</div><!-- /.page-body -->
			 <div class="page-sidebar">
			<div class="widget widget_categories mb-5">
				<h3 class="section-title mb-5">Topics</h3>
				<!-- CATEGORIES FEED -->
			<?php get_template_part("template-parts/feed/categories", "feed"); ?>
					</div><!-- .widget -->
<!-- TODO: TAGS??? -->
					<?php
//the_widget("WP_Widget_Tag_Cloud");
?>
			 </div><!-- /.page-sidebar -->
	</div><!-- /.page-layout-main -->
	</div><!-- /.w-max -->
		</div><!-- /.page-content-pa -->

			</div><!-- .page-content -->
		</section><!-- .error-404 -->
						</div><!-- /.page-content-area -->

	</main><!-- #main -->

<?php get_footer(); ?>
