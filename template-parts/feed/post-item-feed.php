<div class="home-feed-item">
	<div class="story-info">
    <h3 class="feed-story-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h3>
    <!-- intro -->
		<div class="contributor-info">
    	<?php if (get_field("contributor_image")): ?>
		 		<div class="contributor-thumbnail">
					 <img src="<?php echo get_field(
        "contributor_image"
      ); ?>" class="contributor-thumbnail-img fit" /></div><?php endif; ?>
					<?php if (get_field("contributor")): ?>
		 	<span class="post-meta author"><?php echo get_field("contributor"); ?></span>
			<?php endif; ?>
					</div>
					<div class="feed-item-summary">
						<?php the_excerpt(); ?>
					</div><!-- .feed-item-summary -->
					</div>
					<?php if (
       get_the_post_thumbnail(null, "thumbnail", "")
     ): ?><div class="story-thumbnail"><?php echo the_post_thumbnail(
  [320, 240],
  ["class" => "fit", "title" => "Post thumbnail image"]
); ?>
	</div>
<?php endif; ?>
    </div>
