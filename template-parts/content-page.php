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
	<header class="page-header w-max max-gl">
		<div class="page-title-block">
			<?php the_title('<h1 class="page-title">', "</h1>"); ?>
			<?php if (get_field("page_intro")): ?>
				<div class="page-intro">
					<p class="intro sub-header"><?php echo get_field("page_intro"); ?></p>
				</div>
			<?php endif; ?>
		</div>
		<div class="image-frame featured-image-frame <?php if (
    get_the_post_thumbnail(null, "thumbnail", "")
  ) {
    echo "has-image";
  } ?>">
			<?php if (get_the_post_thumbnail(null, "thumbnail", "")):
     echo the_post_thumbnail("full", [
       "class" => "fit",
       "title" => "Featured image",
     ]);
   endif; ?>
		</div><!-- /.image-frame -->
		<?php if (get_field("cover_image_caption")): ?>
			<div class="post-meta cover-image-caption">
				<p class="caption"><?php echo get_field("cover_image_caption"); ?></p>
		</div>
		<?php endif; ?>
	</header><!-- .page-header -->
	<div id="page-content" class="page-content">
		<div class="page-content-pa px-4 pt-6 pb-6">
			<div class="w-max max-gl">
				<div class="page-layout-main">
				<div class="page-body">
				<?php the_content(); ?>
				</div>
			<div class="page-sidebar">
				<h3 class="section-title mb-5">Explore Topics</h3>
				<!-- CATEGORIES FEED -->
				<?php get_template_part("template-parts/feed/categories", "feed"); ?>
			</div>
			</div><!-- /page-layout-main -->
			</div><!-- /.max-gl -->
	</div><!-- /page-content-pa -->
</div><!-- .page-content -->

	<?php if (get_edit_post_link()): ?>
		<footer class="page-footer">
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
