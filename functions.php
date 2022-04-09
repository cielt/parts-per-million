<?php
/**
 * Parts per Million functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Parts_per_Million
 */

if (!defined("_S_VERSION")) {
  // Replace the version number of the theme on each release.
  define("_S_VERSION", "1.0.0");
}

if (!function_exists("parts_per_million_setup")):
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function parts_per_million_setup()
  {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Parts per Million, use a find and replace
     * to change 'parts-per-million' to the name of your theme in all the template files.
     */
    load_theme_textdomain(
      "parts-per-million",
      get_template_directory() . "/languages"
    );

    // Add default posts and comments RSS feed links to head.
    add_theme_support("automatic-feed-links");

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support("title-tag");

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support("post-thumbnails");

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus([
      "menu-1" => esc_html__("Primary", "parts-per-million"),
    ]);

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support("html5", [
      "search-form",
      "comment-form",
      "comment-list",
      "gallery",
      "caption",
      "style",
      "script",
    ]);

    // Set up the WordPress core custom background feature.
    add_theme_support(
      "custom-background",
      apply_filters("parts_per_million_custom_background_args", [
        "default-color" => "ffffff",
        "default-image" => "",
      ])
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support("customize-selective-refresh-widgets");

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support("custom-logo", [
      "height" => 250,
      "width" => 250,
      "flex-width" => true,
      "flex-height" => true,
    ]);
  }
endif;
add_action("after_setup_theme", "parts_per_million_setup");

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function parts_per_million_content_width()
{
  $GLOBALS["content_width"] = apply_filters(
    "parts_per_million_content_width",
    640
  );
}
add_action("after_setup_theme", "parts_per_million_content_width", 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function parts_per_million_widgets_init()
{
  register_sidebar([
    "name" => esc_html__("Sidebar", "parts-per-million"),
    "id" => "sidebar-1",
    "description" => esc_html__("Add widgets here.", "parts-per-million"),
    "before_widget" => '<section id="%1$s" class="widget %2$s">',
    "after_widget" => "</section>",
    "before_title" => '<h2 class="widget-title">',
    "after_title" => "</h2>",
  ]);
}
add_action("widgets_init", "parts_per_million_widgets_init");

/* ========================================================================================================================
	Custom Post Types - include custom post types and taxonomies here e.g.
	-> e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
======================================================================================================================== */

/* STORY custom post type */

add_action("init", "register_story", 1); // Set priority to avoid plugin conflicts
function register_story()
{
  // A unique name for our function
  $labels = [
    // Used in the WordPress admin
    "name" => _x("Stories", "post type general name"),
    "singular_name" => _x("Story", "post type singular name"),
    "add_new" => _x("Add New", "Story"),
    "add_new_item" => __("Add New Story"),
    "edit_item" => __("Edit Story"),
    "new_item" => __("New Story"),
    "view_item" => __("View Story"),
    "search_items" => __("Search Stories"),
    "not_found" => __("Nothing found"),
    "not_found_in_trash" => __("Nothing found in Trash"),
  ];
  $args = [
    "labels" => $labels, // Set above
    "public" => true, // Make it publicly accessible
    "rewrite" => ["slug" => "stories"],
    "hierarchical" => false, // No parents and children here
    "menu_position" => 5, // Appear right below "Posts"
    "has_archive" => true, // Activate the archive
    "supports" => ["title", "editor", "thumbnail"],
  ];

  register_post_type("story", $args); // Create the post type, use options above

  register_taxonomy_for_object_type("category", "story");
  register_taxonomy_for_object_type("post_tag", "story");

  flush_rewrite_rules();
}

/**
 * Enqueue scripts and styles.
 */
function gfonts_prefetch()
{
  echo '<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>';
  echo '<link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>';
}
add_action("wp_head", "gfonts_prefetch");

function ppm_styles()
{
  wp_enqueue_style(
    "parts-per-million-google-fonts",
    "https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap",
    false
  );
  wp_enqueue_style(
    "parts-per-million-style",
    get_stylesheet_uri(),
    [],
    _S_VERSION
  );
  wp_style_add_data("parts-per-million-style", "rtl", "replace");
}
add_action("wp_enqueue_scripts", "ppm_styles");

function parts_per_million_scripts()
{
  // wp_enqueue_script( 'parts-per-million-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
  wp_enqueue_script(
    "jquery-waypoints",
    get_template_directory_uri() . "/js/lib/jquery.waypoints.min.js",
    ["jquery-core"],
    "2018",
    false
  );
  wp_enqueue_script(
    "ppm-utilities",
    get_template_directory_uri() . "/js/util.js",
    ["jquery-core"],
    "2021",
    false
  );
  wp_enqueue_script(
    "ppm-navigation",
    get_template_directory_uri() . "/js/ppm.js",
    ["jquery-core", "jquery-waypoints", "ppm-utilities"],
    "2021",
    false
  );

  // FontAwesome - SVG solid
  wp_enqueue_script(
    "font-awesome-solid",
    "https://use.fontawesome.com/releases/v5.5.0/js/solid.js",
    [],
    "2018",
    false
  );
  wp_enqueue_script(
    "font-awesome",
    "https://use.fontawesome.com/releases/v5.5.0/js/fontawesome.js",
    [],
    "2018",
    false
  );

  if (is_singular() && comments_open() && get_option("thread_comments")) {
    wp_enqueue_script("comment-reply");
  }
}
add_action("wp_enqueue_scripts", "parts_per_million_scripts");

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . "/inc/custom-header.php";

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . "/inc/template-tags.php";

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . "/inc/template-functions.php";

/**
 * Customizer additions.
 */
require get_template_directory() . "/inc/customizer.php";

/**
 * Load Jetpack compatibility file.
 */
if (defined("JETPACK__VERSION")) {
  require get_template_directory() . "/inc/jetpack.php";
}

/**
 * Filter excerpt length: 20 words
 *
 * @param int $length Excerpt length
 * @return int (maybe) modified excerpt length
 */
function wpdocs_custom_excerpt_length($length)
{
  return 20;
}
add_filter("excerpt_length", "wpdocs_custom_excerpt_length", 999);

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more($more)
{
  if (!is_single()) {
    $more = sprintf(
      '&hellip;&nbsp;<a class="read-more-link" href="%1$s">%2$s</a>',
      get_permalink(get_the_ID()),
      __("Read more", "textdomain")
    );
  }

  return $more;
}
add_filter("excerpt_more", "wpdocs_excerpt_more");

// Query all images in media library
function get_all_images_from_media_library()
{
  $args = [
    "post_type" => "attachment",
    "post_mime_type" => "image",
    "post_status" => "inherit",
    "posts_per_page" => 25,
    "orderby" => "rand",
  ];

  $query_images = new WP_Query($args);
  $all_images = range(1, 248);
  $foundImgPosts = $query_images->posts;
  $foundImgsArrLength = count($foundImgPosts);

  for ($i = 0; $i < $foundImgsArrLength; $i++) {
    $all_images[$i] = $foundImgPosts[$i];
  }

  return $all_images;
}

// display all images in template
function display_images_from_media_library()
{
  $imgs = get_all_images_from_media_library();
  $arrLength = count($imgs);
  $html = '<div id="hero-mosaic" class="mosaic-tiles-grid">';

  shuffle($imgs);

  for ($i = 0; $i < $arrLength; $i++) {
    $currImg = $imgs[$i];
    if (gettype($currImg) === "object") {
      $html .=
        '<div class="mosaic-tile has-image">' .
        wp_get_attachment_image($currImg->ID, "thumbnail") .
        "</div>";
    } else {
      $tileType = rand(0, 5);
      $html .= '<div class="mosaic-tile tile-' . $tileType . '"></div>';
    }
  }

  $html .= "</div>";

  return $html;
}
