<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parts_Per_Million
 */
?>

<div id="search-results" class="search-results-none">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e(
    "Nothing Found",
    "parts-per-million"
  ); ?></h1>
	</header><!-- .page-header -->
	<div id="page-content" class="page-content">
		<div class="page-content-pa px-4 pt-6 pb-6">
			<div class="w-max max-gl">
				<div class="page-layout-main">
				<div class="page-body">

		<?php if (is_home() && current_user_can("publish_posts")):
    printf(
      "<p>" .
        wp_kses(
          /* translators: 1: link to WP admin new post page. */
          __(
            'Ready to publish your first post? <a href="%1$s">Get started here</a>.',
            "parts-per-million"
          ),
          [
            "a" => [
              "href" => [],
            ],
          ]
        ) .
        "</p>",
      esc_url(admin_url("post-new.php"))
    );
  elseif (is_search()): ?>

			<p><?php esc_html_e(
     "Sorry, but nothing matched your search terms. Please try again with some different keywords.",
     "parts-per-million"
   ); ?></p>
			<?php get_search_form();else: ?>

			<p><?php esc_html_e(
     "It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.",
     "parts-per-million"
   ); ?></p>
	<?php get_search_form();endif; ?>
	</div><!-- /.page-body -->
	<div class="page-sidebar">
<div class="widget widget_categories mb-5">
				<h2 class="section-title mb-5">Topics</h2>
				<!-- CATEGORIES FEED -->
			<?php get_template_part("template-parts/feed/categories", "feed"); ?>
					</div><!-- .widget -->
	</div><!-- /.page-sidebar -->
</div><!-- /.page-layout-main -->
</div><!-- /.w-max -->
</div><!-- /.page-content-pa -->
</div><!-- /.page-content -->
</div><!-- /.search-results -->
