<li class="feed-item" id="post-<?php the_ID(); ?>" data-rel="post-feed-item">
	<div class="feed-item-content">
	<div class="story-info">
		<?php if (get_field("medium")): ?>
		<span class="post-medium"><?php echo get_field("medium"); ?></span>
  <?php endif; ?>
    <h3 class="feed-story-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h3>
    <!-- intro -->
		<div class="contributor-info">
    	<?php if (get_field("contributor_image")): ?>
		 		<div class="contributor-thumbnail">
					 <img src="<?php echo get_field(
        "contributor_image"
      ); ?>" class="contributor-thumbnail-img" />
				</div>
			<?php endif; ?>
			<?php if (get_field("contributor")): ?>
		 		<span class="post-meta author"><?php echo get_field("contributor"); ?></span>
				<?php endif; ?>
		</div>
		<div class="feed-item-summary">
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
