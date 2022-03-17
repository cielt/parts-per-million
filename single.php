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

    printf(
      '<div class="post-footer-nav prev-next-links"><div class="w-max max-gl">'
    );
    the_post_navigation([
      "prev_text" =>
        '<span class="nav-subtitle">' .
        esc_html__("Previous:", "parts-per-million") .
        '</span><span class="nav-title">%title</span>',
      "next_text" =>
        '<span class="nav-subtitle">' .
        esc_html__("Next:", "parts-per-million") .
        '</span><span class="nav-title">%title</span>',
    ]);
    printf("</div></div>");
  endwhile;
// End of the loop.
?>
	</div><!-- /.page-content-area -->
</main><!-- #main -->

<?php get_footer(); ?>
