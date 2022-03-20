<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Parts_per_Million
 */

get_header(); ?>

<main id="primary" class="site-main">
	<div id="primary-content" class="page-content-area">
		<?php while (have_posts()):
    the_post();

    get_template_part("template-parts/content", get_post_type());
  endwhile;
// End of the loop.
?>
	</div><!-- /.page-content-area -->
</main><!-- #main -->

<?php get_footer(); ?>
