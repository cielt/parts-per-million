<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parts_Per_Million
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
  if (is_singular()):
    the_title('<h1 class="entry-title">', "</h1>");
  else:
    the_title(
      '<h2 class="entry-title"><a href="' .
        esc_url(get_permalink()) .
        '" rel="bookmark">',
      "</a></h2>"
    );
  endif;

  if ("post" === get_post_type()): ?>
			<div class="entry-meta">
				<?php
    parts_per_million_posted_on();
    parts_per_million_posted_by();
    ?>
			</div><!-- .entry-meta -->
		<?php endif;
  ?>
	</header><!-- .entry-header -->

		<div class="image-frame featured-image-frame">
			<?php if (get_the_post_thumbnail(null, "thumbnail", "")): ?>
				<div class="">
					<?php echo the_post_thumbnail("full", [
       "class" => "fit",
       "title" => "Featured image",
     ]); ?>
				</div>
			<?php endif; ?>
		</div>

		<div id="home-intro" class="section w-max max-gm mx-auto pt-6 pb-6">
	<div class="entry-content">
		<?php
  the_content(
    sprintf(
      wp_kses(
        /* translators: %s: Name of current post. Only visible to screen readers */
        __(
          'Continue reading<span class="screen-reader-text"> "%s"</span>',
          "parts-per-million"
        ),
        [
          "span" => [
            "class" => [],
          ],
        ]
      ),
      wp_kses_post(get_the_title())
    )
  );

  wp_link_pages([
    "before" =>
      '<div class="page-links">' . esc_html__("Pages:", "parts-per-million"),
    "after" => "</div>",
  ]);
  ?>

	<footer class="entry-footer">
		<?php parts_per_million_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div><!-- .entry-content -->
</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
