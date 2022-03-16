<?php
$paged = get_query_var("paged") ? get_query_var("paged") : 1;
$args = [
  "orderby" => "date",
  "order" => "DESC",
  "post_type" => "post",
  "posts_per_page" => 10,
  "paged" => $paged,
];

$posts_query = new WP_Query($args);
if (have_posts()): ?>
  <?php
  while ($posts_query->have_posts()):
    $posts_query->the_post(); ?>
    <!-- POST FEED ITEM -->
		<?php get_template_part("template-parts/feed/post", "item-feed"); ?>
  <?php
  endwhile;
  wp_reset_postdata();
  ?>
	<?php endif;
?>
