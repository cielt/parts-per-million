(function ($) {
  "use strict";

  var PPM = {
    bkEnv:
      "The Gowanus Canal is a notoriously polluted 1.8-mile waterway extending from Gowanus to Red Hook. Since its creation in the nineteenth century, the canal has been a factory chemical dumping ground with an inherent history of pollution and neglect. Due to high levels of mercury, typhus, coal tar, and toxic black sludge deposits, it’s been earmarked as a superfund cleanup site and a January 2020 executive order announced the beginning of its long-awaited cleanup. Newtown Creek is a 3.8-mile waterway that marks a part of the border between Brooklyn and Queens. For over 100 years Newtown Creek had been used as a chemical and raw sewage dump site, including a notorious 30-million-gallon oil spill from nearby Greenpoint. Like the Gowanus, Newtown has been designated a superfund site, and in late 2019 released a plan for rehabilitating the site. Pollution caused by fossil fuel-powered peaker plants—power plants that supplement the energy supply in “peak” consumption times, like summer—negatively affect the more than 1.2 million New Yorkers who live within a one-mile radius. In Brooklyn, the plants are sited in the historically working-class communities of Red Hook and Sunset Park. In 2019, New York Lawyers for the Public Interest introduced a bill to the NYC Council Committee on Environmental Protection proposing converting the plants’ energy source from fossil fuel to clean renewables. Urban areas like New York City are more vulnerable to extreme heat than less-developed areas. This Urban Heat Island Effect is caused by cities’ building and infrastructure hardscape, limited vegetation, population density, and human movement patterns. This can lead to temperatures that are far greater than rural and suburban areas—1.8°F to 5.4°F hotter annually, and up to 22°F hotter on a given night, due to heat retention. The city’s Cool Neighborhoods initiative addresses the issue from multiple angles—planting trees to absorb heat, advertising open community spots with air conditioning, and creating a “buddy” system for neighbors to check on each other, especially those at greatest risk of heat-related health issues.",
  };

  $(function () {
    var $body = $("body"),
      bodyLayout = $body.data("layout"),
      $globalMenuBtns = $("#global-menu-btn, #close-menu-btn, .menu-overlay"),
      $searchToggleBtns = $(
        "#search-toggle-btn, #close-search-btn, .search-overlay"
      ),
      $searchForm = $(".search-form"),
      $heroEl = $("body"), // main marquee el for Waypoint settings
      $marqueeMain = $(".marquee-main"),
      headerWaypoint,
      $scrollDownArrow = $marqueeMain.find(".scroll-to-content-btn"),
      $siteNavBlock = $(".site-nav-block"),
      $siteNavMenu = $(".site-nav-menu"),
      $bkWordCloud = $("#bk-word-cloud");

    // Global Nav Menu
    if ($globalMenuBtns.length) {
      $globalMenuBtns.on("click", function (ev) {
        ev.preventDefault();
        $body.toggleClass("nav-open nav-closed");
        $siteNavBlock.scrollTop(0);
      });
    }

    // Search Toggle
    if ($searchForm.length) {
      $searchForm.on("click", function (ev) {
        ev.stopPropagation();
      });
    }

    if ($("#close-search-btn").length) {
      $("#close-search-btn").on("click", function (ev) {
        ev.stopPropagation();
      });
    }
    if ($searchToggleBtns.length) {
      $searchToggleBtns.on("click", function (ev) {
        ev.preventDefault();
        $body.toggleClass("search-widget-open search-widget-closed");
        $siteNavBlock.scrollTop(0);
      });
    }

    if ($siteNavMenu.find(".page_item > a").length) {
      // Global Nav Links
      $siteNavMenu.on("click", ".page_item a", function () {
        $body.removeClass("nav-open").addClass(".nav-closed");
      });
    }

    // scroll-down arrow
    $scrollDownArrow.arctic_scroll();

    // Waypoints: waypoint el depends on page
    switch (bodyLayout) {
      case "ppm-home":
        $heroEl = $(".marquee-main");
        break;
      case "ppm-single":
        $heroEl = $(".featured-image-frame");
        break;
      case "ppm-page":
      default:
        $heroEl = $(".page-header");
        break;
    }

    if ($body.hasClass("header-waypoint") && bodyLayout !== "ppm-photo-book") {
      headerWaypoint = new Waypoint({
        element: $heroEl,
        handler: function (direction) {
          if (direction && direction === "up") {
            $body.removeClass("scroll-down");
          } else {
            $body.addClass("scroll-down");
          }
        },
        offset: function () {
          var heroElHeight = this.element.outerHeight();
          return -(heroElHeight - 1);
        },
      });
    }

    // Photo Book scroll fx
    if (bodyLayout === "ppm-photo-book") {
      // to each "page", add waypoint for content scroll
      $(".book-page").each(function () {
        var $this = $(this);
        console.log($this);
        new Waypoint({
          element: $this.children(".page-content"),
          handler: function (direction) {
            if (direction && direction === "down") {
              $this.addClass("page-content-scrolling-down");
            } else {
              $this.removeClass("page-content-scrolling-down");
            }
          },
          offset: "75%",
        });
      });
    }

    // HOME page hero area
    // TODO: using [] of words from bk env description, populate bg or marquee / hero area
    const wordCloudWords = PPM.bkEnv
      .split(" ")
      .map((token) => token.replace(/[^0-9a-z]/gi, "").toLowerCase());
    if ($body && bodyLayout === "ppm-home") {
      $bkWordCloud.text(wordCloudWords.join(" "));
    }
  });
})(jQuery);
