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
						<!-- Clock's Ticking :: Gowanus -->
						<!-- Slide 1 -->
						<div class="book-page theme-dark bg-image-page gowanus-0">
							<div class="page-bg has-image">
								<div class="bg-image-screen">
									<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-gowanus-0.png" class="image-full-screen" />
								</div>
								<h2 class="page-heading">The Clock&rsquo;s Ticking</h2>
							</div>
							<div class="page-content">
								<div class="pt-6 pb-6 px-4">
									<div class="w-max max-640">
										<p class="first-paragraph ts-l">
											The Gowanus Canal. The canal, constructed in the 1800s, is 100 ft wide and 1.8 miles long. It runs through several different communities in Brooklyn, NY including Park Slope, Cobble Hill, Carroll Gardens and Red Hook.
										</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Slide 2 -->
						<div class="book-page flex-page theme-dark goawnus-1">
							<div class="page-content">
								<div class="pt-6 pb-6 px-4">
									<div class="sxs-page w-max max-gl">
										<div class="image-frame-inline">
											<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-gowanus-1.png" class="image-full-screen" />
										</div>
										<div class="text-content-inline">
											<h3 class="page-subheading upper">The Clock&rsquo;s Ticking</h3>
											<p>For years pollutants such as polycyclic aromatic hydrocarbons, polychlorinated biphenyls, and heavy metals such as mercury, lead, and copper were dumped into the canal by surrounding factories. In 2010, the canal was placed on the national priorities list and a program taken up by the U.S. Environmental Protection Agency to clean out and restore the canal was implemented. Since 2010, the EPA has dredged 300,000 cubic yards of contaminated sediment, cleaned up the surrounding factories, and finally is installing a cement cap on the bottom of the canal to keep any additional contaminants residing in the bottom sediments from spreading throughout the canal. The entire project is expected to be completed by 2023 and will likely cost over $1 billion dollars.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Clock's Ticking :: We're Fighting - ESCR -->
						<!-- Slide 1 -->
						<div class="book-page theme-green bg-image-page construction-escr">
							<div class="page-bg has-image">
								<div class="bg-image-screen">
									<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-fdr-drive-escr-construction.png" class="image-full-screen" />
								</div>
								<h2 class="page-heading">The Clock&rsquo;s Ticking</h2>
							</div>
							<div class="page-content">
								<div class="pt-6 pb-6 px-4">
									<div class="w-max max-640">
										<h2 class="page-heading"><span class="db mb-5">We&rsquo;re Fighting It</span>Is It Enough?</h2>
									</div>
								</div>
							</div>
						</div>
						<!-- Slide 2 -->
						<div class="book-page flex-page theme-green goawnus-1">
							<div class="page-content">
								<div class="pt-6 pb-6 px-4">
									<div class="sxs-page w-max max-640">
										<div class="text-content-inline">
											<h3 class="page-subheading upper">The Clock&rsquo;s Ticking</h3>
											<p class="ts-l">
												Construction taking place next to the FDR drive for the East Side Coastal Resiliency (ESCR) project.
											</p>
											<p>The project is an initiative taken by the City of New York to protect vulnerable areas of Manhattan from rising sea levels. It is jointly funded by NYC as well as the federal government. The project, being a sea wall, will stretch about 2.5 miles from East 25th St. to Montgomery St. Construction of the wall is scheduled to be completed by 2026 and will hopefully help to prevent the ocean from damaging essential infrastructure and destroying the different ecosystems that reside near the shoreline. The program will cause a temporary disturbance in the equilibrium of the area as many prominent parks and other wild life areas will be temporarily closed off in order to aid the construction of the project.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Clock's Ticking :: We're Fighting - EV -->
						<!-- Slide 1 -->
						<div class="book-page theme-green bg-image-page construction-escr">
							<div class="page-bg has-image">
								<div class="bg-image-screen">
									<img src="<?php echo get_template_directory_uri(); ?>/images/book/book-ev-charging-carroll-gardens.png" class="image-full-screen" />
								</div>
								<h2 class="page-heading">The Clock&rsquo;s Ticking</h2>
							</div>
							<div class="page-content">
								<div class="pt-6 pb-6 px-4">
									<div class="w-max max-640">
										<p class="first-paragraph ts-l">
											Photo of two electric vehicles (EVs) charging at one of the City&rsquo;s 120 public EV charging stations in Carroll Gardens, Brooklyn.
										</p>
										<p>The portable station is known as plug NYC, an initiative taken by the NYC government partnered with ConEdison to reduce total emissions in the city. Regular gas powered cars are responsible for about 30% of total NYC emissions. These stations will help the city to encourage purchases of EV cars and hopefully push the city towards its goal of reducing emissions by about 80% by 2050. The charging stations are level 2 meaning that they charge at a rate of 20 miles of range per hour. They are mid level voltage (240v) which is similar voltage used to power larger appliances such as dryers. The project will last a total duration of 4 years as a test run.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Slide 2 -->
						<div class="book-page flex-page theme-dark goawnus-1">
							<div class="page-content">
								<div class="pt-6 pb-6 px-4">
									<div class="w-max max-640">
										<div class="text-content-inline">
											<h3 class="page-subheading upper">The Clock&rsquo;s Ticking</h3>
											<p><em>Add the rest of the book here&hellip;</em></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Photo Book Meta, Credits, etc. -->
					<div class="book-page entry-meta">
						<div class="page-content">
							<div class="pt-6 pb-6 px-4">
							<div class="w-max max-640">
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
									</div><!-- /.contributor-byline -->

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
