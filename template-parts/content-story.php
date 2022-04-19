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
			<span class="single-post-med"><?php echo get_field("medium"); ?></span>
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
	</div><!-- /.featured-image-frame -->
	<?php if (get_field("cover_image_caption")): ?>
	<div class="cover-caption-block">
		<p class="cover-image-caption">
			<?php echo get_field("cover_image_caption"); ?>
		</p>
	</div>
	<?php endif; ?>
	</div><!-- /.entry-header-wrapper -->
	<div id="story-content" class="entry-content">
		<div class="entry-content-pa px-4 pt-6 pb-6">
			<!-- TODO: extra classes -->
			<div class="w-max">
				<div class="post-layout-main">
					<div class="entry-meta">
						<!-- contributor -->
						<div class="contributor-block meta-section">
							<div class="contributor-byline">
    					<?php if (get_field("contributor_image")):

           $contributor_img = get_field("contributor_image");
           $size = "medium";
           ?>
		 						<div class="contributor-thumbnail">
									 <?php echo wp_get_attachment_image($contributor_img, $size); ?>
								</div>
							<?php
         endif; ?>
								<?php if (get_field("contributor")): ?>
		 							<div class="contributor-name author">
										 <strong><?php echo get_field("contributor"); ?></strong>
								</div>
							<?php endif; ?>
							</div><!-- /.contirbutor-byline -->

							<?php if (get_field("contributor_bio")): ?>
		 						<p class="contributor-bio">
						 			<?php echo get_field("contributor_bio"); ?>
								</p>
							<?php endif; ?>
						</div><!-- /.contributor-block -->

						<!-- Date -->
						<div class="post-date meta-section">
							<?php if (get_field("date_published")): ?>
						 		<span class="post-meta date-published">
									 Date: <?php echo get_field("date_published"); ?>
								</span>
							<?php endif; ?>
							<?php if (get_field("location")): ?>
						 		<span class="post-meta location">
									 From: <?php echo get_field("location"); ?>
								</span>
							<?php endif; ?>
						</div>
						<!-- categories -->
						<div class="entry-footer meta-section">
							<ul class="categories-list">
								<?php
        $post_categories = wp_get_post_categories(get_the_ID(), [
          "fields" => "all",
        ]);

        if ($post_categories) {
          foreach ($post_categories as $category) {
            $category_link = sprintf(
              '<a href="%1$s" alt="%2$s" class="category-link"><span class="cat-name">%3$s</span></a>',
              esc_url(get_category_link($category->term_id)),
              esc_attr(
                sprintf(
                  __("View all posts in %s", "textdomain"),
                  $category->name
                )
              ),
              esc_html($category->name)
            );

            echo "<li class='category-list-item'>" .
              sprintf($category_link) .
              "</li> ";
          }
        }
        ?>
							</ul>
						</div><!-- .entry-footer -->
					</div><!-- .entry-meta -->
					<div class="post-body">
						<?php the_content(); ?>
					</div>
					<div class="entry-sidebar">
						<!-- TODO: sidebar -->
					</div><!-- /.entry-sidebar -->
				</div><!-- /.post-layout-main -->
			</div><!-- /.max-gl -->
		</div><!-- /.entry-content-pa -->
		<div class="post-content-footer">
			<div class="px-4 pt-6 pb-6">
				<div class="w-max max-gl">
			<?php
   printf('<div class="post-footer-nav prev-next-links">');
   the_post_navigation([
     "prev_text" =>
       '<span class="ico-footer-link"><i class="fas fa-chevron-left fa-sm"></i></span>' .
       '<div class="footer-nav-label prev-item"><span class="kicker">Previous</span><h4 class="nav-title h5">%title</h4></div>',
     "next_text" =>
       '<div class="footer-nav-label next-item"><span class="kicker">Next</span><h4 class="nav-title h5">%title</h4></div>' .
       '<span class="ico-footer-link"><i class="fas fa-chevron-right fa-sm"></i></span>',
   ]);
   printf("</div>");
   ?>
	 			</div>
			</div>
		</div><!-- /.post-content-footer -->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
