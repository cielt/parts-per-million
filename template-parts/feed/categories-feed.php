<div class="categories-list-block">
	<ul class="categories-list">
<?php
$categories = get_categories([
  "taxonomy" => "category",
  "orderby" => [
    "count" => "DESC",
    "name" => "ASC",
  ],
  "hide_empty" => true,
]);

foreach ($categories as $category) {
  $category_link = sprintf(
    '<a href="%1$s" alt="%2$s" class="category-link"><span class="cat-name">%3$s</span><span class="cat-count">%4$s</span></a>',
    esc_url(get_category_link($category->term_id)),
    esc_attr(
      sprintf(__("View all posts in %s", "textdomain"), $category->name)
    ),
    esc_html($category->name),
    esc_html($category->count)
  );

  echo "<li class='category-list-item'>" . sprintf($category_link) . "</li> ";
}
?>
</ul>
</div>
