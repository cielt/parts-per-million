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
  <div class="title-block p-abs z3">
    <h1 class="h1 site-title"><?php bloginfo("name"); ?></h1>
    <p class="site-description"><?php bloginfo("description"); ?></p>
  </div>
	<a href="#home-intro" class="scroll-to-content-btn c-white" data-offset="0">
    <b class="fas fa-angle-down fa-2x" aria-hidden="true"></b>
    <span class="vis-hidden">scroll down to page content</span>
  </a>
</div>
<!-- Intro -->
<div id="home-intro" class="page-content-area">
	<div class="px-5 pt-6 pb-6">
		<div class="col-flex-row w-max max-gl">
			<div class="main-col col-feed">
				<h2 class="section-title mb-5">Stories</h2>
			<!-- LATEST POSTS FEED -->
			<?php get_template_part("template-parts/feed/content", "stories-feed"); ?>
			</div>
			<div class="side-col col-topics">
				<h2 class="section-title mb-5">Topics</h2>
				<!-- CATEGORIES FEED -->
			<?php get_template_part("template-parts/feed/categories", "feed"); ?>
			</div>
		</div>
	</div>
</div>
<!-- ############################################# TOPICS ############################################# -->

</div>

<?php get_footer(); ?>
