<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parts_Per_Million
 */
?>

<li class="feed-item" id="post-<?php the_ID(); ?>" data-rel="search-feed-item">
	<div class="feed-item-content">
	<div class="story-info">
    <h3 class="feed-story-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h3>
    <!-- intro -->
		<div class="contributor-info">
			<?php if (get_field("contributor")): ?>
		 		<span class="post-meta author"><span class="post-medium"><?php echo get_field(
       "medium"
     ); ?></span> by <?php echo get_field("contributor"); ?></span>
			<?php endif; ?>
		</div>
		<div class="feed-item-summary">
			<?php the_excerpt(); ?>
		</div><!-- .feed-item-summary -->
	</div><!-- /.story-info  -->
			<?php if (get_the_post_thumbnail(null, "thumbnail", "")): ?>
		 		<a href="<?php the_permalink(); ?>" class="story-thumbnail feed-item-thumbnail-link">
					 <?php echo the_post_thumbnail(
        [320, 240],
        ["class" => "fit feed-item-thumbnail", "title" => get_the_title()]
      ); ?>

		</a>
		<?php endif; ?>
	</div>
</li>
