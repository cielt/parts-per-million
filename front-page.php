<?php
/**
 *
 * Template Name: PPM Home Page
 *
 * @package Parts_Per_Million
 */

get_header(); ?>

<div id="bk-word-cloud" class="word-cloud bk-env"></div>
<div class="marquee-main graph-block">
  <div class="title-block">
		<a class="callout" href="<?php echo site_url("/contribute"); ?>">
		<div class="burst"><h5 class="mb-0">Submit your work!</h5></div>
		<div class="callout-message">
			<h4 class="mb-1 c-darkGold"><i class="fas fa-bullhorn mr-1 c-darkGold"></i> Issue #1: <em>Our City</em></h4>
			<p><span class="mr-1">We&rsquo;d love your submissions of original work exploring climate change and our home city, <span class="text-unit">New York!</span> <span class="cta-mobile">Learn More &rarr;</span></p>
		</div>
		<div class="cta-block">
			<span class="btn-block">Learn More &rarr;</span>
		</div>
	</a>
		<div class="heading-block">
    	<h1 class="h1 site-title"><?php bloginfo("name"); ?></h1>
    	<p class="site-description"><?php bloginfo("description"); ?></p>
		</div>
  </div>
	<a href="#home-intro" class="scroll-to-content-btn c-white" data-offset="0">
    <b class="fas fa-angle-down fa-2x" aria-hidden="true"></b>
    <span class="vis-hidden">scroll down to page content</span>
  </a>
</div>
<!-- Intro -->
<div id="home-intro" class="page-content-area">
	<div class="px-4 pt-6 pb-6">
		<div class="col-flex-row w-max max-gl">
			<div class="main-col col-feed">
				<h2 class="section-title mb-5">Stories</h2>
			<!-- LATEST POSTS FEED -->
			<?php get_template_part("template-parts/feed/content", "stories-feed"); ?>
			</div>
			<div class="side-col col-topics">
				<h3 class="section-title mb-5">About Us</h3>
				<!-- CATEGORIES FEED -->
			<?php get_template_part("template-parts/feed/about", "ppm-excerpt"); ?>
			</div>
		</div>
	</div>
</div>
<!-- ############################################# TOPICS ############################################# -->

</div>

<?php get_footer(); ?>
