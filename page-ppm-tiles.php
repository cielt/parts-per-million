<?php
/**
 * Template Name: Tiles Page
 *
 * @package Parts_per_Million
 */

get_header(); ?>

<main id="primary" class="site-main">
	<div id="primary-content" class="page-content-area">
		<?php while (have_posts()):
    the_post();

    get_template_part("template-parts/content", "page-ppm-tiles");
  endwhile;
// End of the loop.
?>
	</div><!-- /.page-content-area -->
</main><!-- #main -->

<?php get_footer(); ?>
