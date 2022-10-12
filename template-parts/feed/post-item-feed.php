<li class="feed-item" id="post-<?php the_ID(); ?>" data-rel="post-feed-item">
	<div class="feed-item-content">
		<a href="<?php the_permalink(); ?>" class="story-thumbnail feed-item-thumbnail-link">
		<?php if (get_the_post_thumbnail(null, "thumbnail", "")): ?>
					 <?php echo the_post_thumbnail(
        [320, 240],
        ["class" => "fit feed-item-thumbnail", "title" => get_the_title()]
      ); ?>
		<?php endif; ?>
		<?php if (get_field("medium")): ?>
		<span class="post-medium"><?php echo get_field("medium"); ?></span>
  <?php endif; ?>
		</a>
	<div class="story-info">
		<div class="contributor-info">
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
		 		<span class="post-meta author"><?php echo get_field("contributor"); ?></span>
				<?php endif; ?>
		</div>
    <h3 class="feed-story-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h3>
    <!-- intro -->
	</div><!-- /.story-info  -->
	</div>
</li>
