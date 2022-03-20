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
<div class="entry-header-wrapper <?php if (
  get_the_post_thumbnail(null, "thumbnail", "")
) {
  echo "has-hero-image";
} ?>">
	<header class="entry-header">
		<?php if (get_field("medium")): ?>
			<span class="single-post-medium"><?php echo get_field("medium"); ?></span>
    <?php endif; ?>
		<?php the_title('<h1 class="entry-title">', "</h1>"); ?>
	</header><!-- .entry-header -->

	<div class="featured-image-frame single-post-image">
		<?php if (get_the_post_thumbnail(null, "thumbnail", "")): ?>
			<?php echo the_post_thumbnail("full", [
     "class" => "fit",
     "title" => "Featured image",
   ]); ?>
		<?php endif; ?>
	</div>
	</div><!-- /.entry-header-wrapper -->
	<div id="story-content" class="entry-content">
		<div class="entry-content-pa px-4 pt-6 pb-6">
			<div class="w-max max-gl">
				<div class="post-layout-main">
					<div class="entry-meta">
						<!-- contributor -->
						<div class="contributor-block meta-section">
    					<?php if (get_field("contributor_image")): ?>
		 						<div class="contributor-thumbnail">
						 			<img src="<?php echo get_field(
            "contributor_image"
          ); ?>" class="contributor-thumbnail-img" />
								</div>
							<?php endif; ?>
							<?php if (get_field("contributor")): ?>
								<div class="contributor-info">
		 							<span class="contributor-name author"><strong><?php echo get_field(
            "contributor"
          ); ?></strong></span>
									 <?php if (get_field("contributor_bio")): ?>
		 						<p class="contributor-bio">
						 			<?php echo get_field("contributor_bio"); ?>
								</p>
							<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
						<!-- Date -->
						<div class="post-date meta-section">
							<?php if (get_field("date_published")): ?>
						 		<span class="post-meta date-published">
									 Published: <?php echo get_field("date_published"); ?>
								</span>
							<?php endif; ?>
							<?php if (get_field("location")): ?>
						 		<span class="post-meta location">
									 Created in: <?php echo get_field("location"); ?>
								</span>
							<?php endif; ?>
						</div>
						<!-- categories -->
						<div class="entry-footer meta-section">
							<?php parts_per_million_entry_footer(); ?>
									 </div><!-- .entry-footer -->
					</div><!-- .entry-meta -->
					<div class="post-body">
						<?php the_content(); ?>
					</div>
					<div class="entry-sidebar">
						<!-- TODO: sidebar -->
						<?php
      printf('<div class="post-footer-nav prev-next-links">');
      the_post_navigation([
        "prev_text" =>
          '<span class="ico-footer-link"><i class="fas fa-chevron-left fa-sm"></i></span>' .
          '<span class="nav-title">%title</span>',
        "next_text" =>
          '<span class="nav-title">%title</span>' .
          '<span class="ico-footer-link"><i class="fas fa-chevron-right fa-sm"></i></span>',
      ]);
      printf("</div>");
      ?>
					</div>
				</div><!-- /.post-layout-main -->
			</div><!-- /.max-gl -->
		</div><!-- /.entry-content-pa -->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
