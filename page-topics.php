<?php
/**
 * Template Name: PPM Topics Page
 * Catalogue of all the topics
 *
 *
 * @package Parts_per_Million
 */

get_header(); ?>

<main id="primary" class="site-main">
	<div id="topics" class="page-content-area">
	<header class="page-header w-max max-gl">
		<h1 class="page-title"><?php esc_html_e(
    "All PPM Topics",
    "parts-per-million"
  ); ?></h1>
	</header><!-- .page-header -->
	<div id="page-content" class="page-content">
		<div class="page-content-pa px-4 pt-6 pb-6">
			<div class="w-max max-gl">
				<div class="page-layout-main">
				<div class="page-body">
						<ul class="categories-list-grid">
<?php
$categories = get_categories([
  "orderby" => "count",
  "order" => "DESC",
  "hide_empty" => true,
]);

foreach ($categories as $category) {
  $category_link = sprintf(
    '<a href="%1$s" alt="%2$s" class="category-link cat-link-xl"><span class="cat-name">%3$s</span><span class="cat-count">%4$s</span></a>',
    esc_url(get_category_link($category->term_id)),
    esc_attr(
      sprintf(__("View all posts in %s", "textdomain"), $category->name)
    ),
    // esc_html($category->name . " (" . $category->count . ")"),
    esc_html($category->name),
    esc_html($category->count)
  );

  echo "<li class='category-list-item li-xl'>" .
    sprintf($category_link) .
    "</li> ";
}
?>
</ul>
				</div><!-- /.page-body -->
				<!-- <div class="page-sidebar">
					<p>Drop sidebar here</p>
				</div> -->
				<!-- /.page-sidebar -->
				</div><!-- /.page-layout-main -->
				</div><!-- /.w-max -->
			</div><!-- /.page-content-pa -->
		</div><!-- /.page-content -->
	</div><!-- /.page-content-area -->
</main><!-- #main -->


<?php get_footer(); ?>
