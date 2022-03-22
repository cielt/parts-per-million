<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Parts_per_Million
 */

get_header(); ?>

	<main id="primary" class="site-main">
		<div id="archive" class="page-content-area ">
		<?php
  global $wp_query;
  $args = array_merge($wp_query->query_vars, [
    "post_type" => ["post", "story"],
    "meta_key" => "date_published",
    "orderby" => "meta_value",
    "order" => "DESC",
    "posts_per_page" => 10,
  ]);
  query_posts($args);
  ?>
		<?php if (have_posts()): ?>
			<header class="page-header">
				<?php the_archive_title('<h1 class="page-title archive-title">', "</h1>"); ?>
		<?php if (get_the_archive_description()): ?>
				<?php printf(
      "<div class='archive-description'>" .
        get_the_archive_description() .
        "</div>"
    ); ?>

			<?php endif; ?>
			</header><!-- .page-header -->
<div id="page-content" class="page-content">
		<div class="page-content-pa px-4 pt-6 pb-6">
			<div class="w-max max-gl">
				<div class="page-layout-main">
				<div class="page-body">
					<ul class="posts-feed">
					<?php
     /* Start the Loop */
     while (have_posts()):
       the_post();

       /*
        * Include the Post-Type-specific template for the content.
        * If you want to override this in a child theme, then include a file
        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
        */
       get_template_part("template-parts/feed/post", "item-feed");
     endwhile;

     the_posts_navigation();
     else:get_template_part("template-parts/content", "none");endif; ?>
		 </ul>
				</div><!-- /.page-body -->
				<div class="page-sidebar"></div><!-- /.page-sidebar -->
	 </div><!-- /.w-max -->
	</div><!-- /.page-content-pa -->
	</div><!-- /.page-content -->
</div><!-- /.page-content-area -->
	</main><!-- #main -->

<?php get_footer(); ?>
