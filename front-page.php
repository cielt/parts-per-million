<?php
/**
 *
 * Template Name: PPM Home Page
 *
 * @package Parts_per_Million
 */

get_header(); ?>

<div class="header-spacing"></div>
<div class="marquee-main graph-block">
  <div class="title-block p-abs z3">
    <h1 class="h1 site-title"><?php bloginfo( 'name' ); ?></h1>
    <span class="site-description"><?php bloginfo( 'description' ); ?></span>
  </div>
	<a href="#home-intro" class="scroll-to-content-btn c-white" data-offset="0">
    <b class="fas fa-angle-down fa-2x" aria-hidden="true"></b>
    <span class="vis-hidden">scroll down to page content</span>
  </a>

</div>
<!-- Intro -->
<div id="home-intro" class="section w-max max-gl mx-auto pt-6 pb-6 px-5">
<?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args= array(
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' => 'post',
          'posts_per_page' => -1,
          'paged' => $paged
          );
          //query_posts($args);
        $posts_query = new WP_Query($args);
        if( have_posts() ) : ?>
  <?php while ($posts_query -> have_posts() ) : $posts_query ->the_post(); ?>
    <div class="home-feed-item">
			<div class="story-info">
        <h3 class="feed-story-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h3>
        <!-- intro -->
				<div class="contributor-info">
        <?php if (get_field('contributor_image')) : ?><div class="contributor-thumbnail"><img src="<?php echo get_field('contributor_image') ?>" class="contributor-thumbnail-img fit" /></div><?php endif;?>
					<?php if (get_field('contributor')) : ?><span class="post-meta author"><?php echo get_field('contributor') ?></span><?php endif;?>
					</div>
					<div class="feed-item-summary">
						<?php the_excerpt(); ?>
					</div><!-- .feed-item-summary -->

					</div>
					<?php if (get_the_post_thumbnail(null, 'thumbnail', '')) : ?><div class="story-thumbnail"><?php echo the_post_thumbnail(array(320, 240), ['class' => 'fit', 'title' => 'Post thumbnail image']) ?></div><?php endif;?>
    </div>
  <?php endwhile;
  wp_reset_postdata();?>
	<?php endif; ?>
</div>
<!-- ############################################# TOPICS ############################################# -->

</div>

<?php get_footer(); ?>
