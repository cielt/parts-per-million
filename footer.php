<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Parts_per_Million
 */
?>

<div class="footer">
  <div class="footer-content">
		<div class="w-max max-gl">
			<div class="footer-content-inner">
				<div class="site-info">
					<h4 class="h4">About This Site</h4>
				<p class="mb-5">
      		<em>Parts Per Million</em> vitae semper quis lectus nulla at volutpat. Id consectetur purus ut faucibus pulvinar elementum integer enim neque. Amet nisl purus in mollis nunc sed id semper.
    		</p>
				<p class="ts-xs mb-5">350Brooklyn works locally to address the climate crisis through education, legislation and direct action. We are one of more than 200 international affiliates of <a href="https://350.org/">350.org</a></p>
    		<div class="copyright"><p class="ts-xs">&copy; <?php echo date(
        "Y"
      ); ?> <?php bloginfo(
   "name"
 ); ?>, a project by <a href="https://350brooklyn.org/">350Brooklyn</a></p>
		</div><!-- /.copyright -->
				</div>
				<div class="site-links">
					<div class="links-col ppm-links">
						<h5 class="h5">Parts Per Million</h5>
						<nav id="footer-navigation" class="footer-nav">
          		<?php wp_nav_menu([
              "theme_location" => "menu-1",
              "container" => false,
              "menu_id" => "footer-ppm-menu",
              "menu_class" => "footer-ppm-menu footer-menu",
            ]); ?>
						</nav>
					</div>
					<div class="links-col 350bk-links">
						<h5 class="h5">350Brooklyn</h5>
						<nav id="footer-navigation" class="footer-nav">
          		<ul id="footer-ppm-menu" class="footer-menu">
								<li class="menu-item"><a href="https://350brooklyn.org/">350Brooklyn Home</a></li>
								<li class="menu-item"><a href="https://350brooklyn.org/get-involved/#plug-in">Get Involved</a></li>
								<li class="menu-item"><a href="https://350brooklyn.org/about-us/">About 350Brooklyn</a></li>
							</ul>
						</nav>
					</div>
					<div class="links-col topics-links">
						<h5 class="h5">Top Topics</h5>
						<nav id="footer-navigation" class="footer-topics-nav footer-nav">
          		<ul id="footer-topics-menu" class="footer-menu footer-topics-menu">
								<?php wp_list_categories([
          "orderby" => "count",
          "order" => "DESC",
          "show_count" => 1,
          "title_li" => "",
          "number" => 8,
          "hide_title_if_empty" => true,
        ]); ?>
							</ul>
						</nav>
					</div>
				</div>
	</div><!-- /.footer-content-inner -->
  </div>
	</div>
</div><!-- /.footer -->
</div><!-- /.main -->
</div><!-- /.scaffold-inner -->
</div><!-- /.scaffold-outer -->

<?php wp_footer(); ?>

</body>
</html>
