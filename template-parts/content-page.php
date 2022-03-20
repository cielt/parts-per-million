<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parts_Per_Million
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', "</h1>"); ?>
	</header><!-- .entry-header -->

	<div class="content">
		<div class="image-frame featured-image-frame">
		<?php if (
    get_the_post_thumbnail(null, "thumbnail", "")
  ): ?><div class=""><?php echo the_post_thumbnail("full", [
  "class" => "fit",
  "title" => "Featured image",
]); ?></div><?php endif; ?>
		</div>
		<div class="entry-content">
			<div class="entry-content-pa px-4 pt-6 pb-6">
				<div class="w-max max-gl">
			<?php
   the_content();

   wp_link_pages([
     "before" =>
       '<div class="page-links">' . esc_html__("Pages:", "parts-per-million"),
     "after" => "</div>",
   ]);
   ?>
	 </div><!-- /.max-gl -->

	</div><!-- /.entry-content-pa -->
		</div><!-- .entry-content -->
	</div>

	<?php if (get_edit_post_link()): ?>
		<footer class="entry-footer">
			<?php edit_post_link(
     sprintf(
       wp_kses(
         /* translators: %s: Name of current post. Only visible to screen readers */
         __(
           'Edit <span class="screen-reader-text">%s</span>',
           "parts-per-million"
         ),
         [
           "span" => [
             "class" => [],
           ],
         ]
       ),
       wp_kses_post(get_the_title())
     ),
     '<span class="edit-link">',
     "</span>"
   ); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
