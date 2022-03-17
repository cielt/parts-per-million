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

<body <?php body_class("nav-closed header-waypoint"); ?>
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
    		<button type="button" id="close-menu-btn" class="close-menu close-btn">
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
			<div class="menu-overlay"></div>
				<div class="header-bar">
					<div class="header-bar-context">
						<div class="overlay"></div>
						<div class="bar-content w-max">
							<a class="logo home-link" href="<?php echo esc_url(
         home_url("/")
       ); ?>" rel="home">
								<span class="ico ico-ppm"></span><b class="home-label"><?php bloginfo(
          "name"
        ); ?></b>
							</a>
							<div class="header-bar-block">
							<a href="#" id="global-menu-btn" class="menu-btn"><b class="fas fa-bars" aria-hidden="true"></b> Menu</a>
							</div>
						</div>
					</div>
				</div>
				<div class="main">
					<?php if (!is_page_template("front-page.php")): ?>
						<div class="header-spacing"></div>
					<?php endif; ?>
