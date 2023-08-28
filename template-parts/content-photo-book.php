<?php
/**
 * Template part for displaying Photo Book posts
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
		<?php if (get_field("subheading")): ?>
		<span class="subheading">
			<?php echo get_field("subheading"); ?>
		</span>
	<?php endif; ?>
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
				<div class="post-layout-main">
					<!-- BOOK main content -->
					<div class="post-body pages-track">
						<!-- TODO: Bring in content from DB -->
						<!-- FOREWORD -->
						<div class="book-page theme-dark forward">
							<div class="page-bg">
								<h2 class="page-heading">Forward</h2>
							</div>
							<div class="page-content">
								<div class="pt-6 pb-6 px-4">
									<div class="w-max max-640">
										<p class="first-paragraph ts-l">
											This collection is a wake up call for everyone. The climate crisis worsens each day pollution increases, and while action is being taken there is still much work to be done. Pasted on the cover is a clock. That clock—located in Union Square, New York City—counts down to a grim milestone. A total warming of 1.5 degrees celsius, the original annual average temperature rise ceiling set by the global community. 1.5 degrees of warming was nearly unimaginable almost a century ago yet today we inch closer and closer towards reaching it.
										</p>
										<p>Through this collection, it is my aim to spread awareness for the effects of climate change and pollution apparent all around us, to shed light on these things we don&rsquo;t often notice. In this book, you will find a showcase of photos all based in New York City, centered around climate change, pollution, and finally, the wide variety of resiliency projects currently being undertaken by the local NYC population as well as the City&rsquo;s governing body. Each page focuses on a different location in NYC.</p>
										<p>It is my hope that this collection will evoke a sense of urgency to act within you. Hopefully, one day, we can come together as a society, fully educated and ready to act, in order to fight the different crises facing our civilization.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Photo Book Meta, Credits, etc. -->
					<div class="book-page entry-meta">
						<div class="page-content">
							<div class="pt-6 pb-6 px-4">
							<div class="w-max max-gm">
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
							</div><!-- /.w-max -->
							</div><!-- /.pt-6 -->


						</div>
					</div><!-- .entry-meta -->
				</div><!-- /.post-layout-main -->

		<div class="post-content-footer">
			<div class="px-4 pt-6 pb-6">
				<div class="w-max max-gl">
					<div class="post-footer-nav t-alignC">
						<a class="link-subtle" href="<?php echo esc_url(home_url("/")); ?>" rel="home">
							<b class="ico">&larr;</b>	Back to PPM Home
							</a>
					</div>
	 			</div>
			</div>
		</div><!-- /.post-content-footer -->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
