<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Parts_Per_Million
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/icons-ppm/icon_512x512.png" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" sizes="any" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.svg" type="image/svg+xml" />
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json" />
	<?php wp_head(); ?>
</head>

<body <?php body_class("nav-closed header-waypoint search-widget-closed"); ?>
  data-layout="<?php if (is_page_template("front-page.php")) {
    echo "ppm-home";
  } elseif (is_single()) {
    echo "ppm-single";
  } else {
    echo "ppm-page";
  } ?>">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e("Skip to content", "parts-per-million"); ?>
	</a>
	<div class="scaffold-outer p-rel">
		<div class="site-nav-block">
			<div class="site-nav-wrapper">
    		<button type="button" id="close-menu-btn" class="close-menu close-btn" aria-label="close menu">
					<b class="ico" aria-hidden="true">&times;</b>
					<span class="vis-hidden">Close Menu</span>
				</button>
				<nav id="site-navigation" class="global-nav">
          <?php wp_nav_menu([
            "theme_location" => "menu-1",
            "container" => false,
            "menu_id" => "primary-menu",
            "menu_class" => "site-nav-menu",
          ]); ?>
				</nav>
      </div>
			</div><!-- /.site-nav-wrapper -->
		<div class="scaffold-inner">
			<div class="search-overlay">
				<div class="search-widget-inner">
					<button type="button" id="close-search-btn" class="close-search-btn" aria-label="close search">Cancel <b>&times;</b></button>
					<div class="search-form-block">
						<h2 class="overlay-header mb-5">Search Parts Per Million</h2>
						<?php get_search_form(); ?>
					</div>

				</div>
			</div>
			<div class="menu-overlay"></div>
				<div class="header-bar">
					<div class="header-bar-context">
						<div class="overlay"></div>
						<div class="bar-content">
							<a class="logo home-link" href="<?php echo esc_url(
         home_url("/")
       ); ?>" rel="home">
								<span class="ico ico-ppm"></span><b class="xs--ppm-show">PPM</b><b class="xs--ppm-hide home-label"><?php bloginfo(
          "name"
        ); ?></b>
							</a>
							<div class="header-bar-block">
								<button type="button" id="search-toggle-btn" class="search-toggle-btn"><b class="fas fa-search" aria-hidden="true"></b><span class="vis-hidden">Toggle Search</span></button>
								<button type="button" id="global-menu-btn" class="menu-btn"><b class="fas fa-bars" aria-hidden="true"></b> Menu</button>
							</div>
						</div>
					</div>
				</div>
				<div class="main">
					<?php if (
       !is_page_template("front-page.php") &&
       !(is_single() && "story" == get_post_type())
     ): ?>
						<div class="header-spacing"></div>
					<?php endif; ?>
