(function ($) {
      "use strict";
      $(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
            if (!$(this).next().hasClass("show")) {
                  $(this).parents(".dropdown-menu").first().find(".show").removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass("show");
            $(this)
                  .parents("li.nav-item.dropdown.show")
                  .on("hidden.bs.dropdown", function (e) {
                        $(".dropdown-submenu .show").removeClass("show");
                  });
            return false;
      });
      $(document).on("ready", function () {
            $("[data-background]").each(function () {
                  $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
            });
      });
      $(".search-btn").on("click", function () {
            $(".search-area").toggleClass("open");
      });
      $(".sidebar-btn").on("click", function () {
            $(".sidebar-popup").addClass("open");
            $(".sidebar-wrapper").addClass("open");
      });
      $(".close-sidebar-popup, .sidebar-popup").on("click", function () {
            $(".sidebar-popup").removeClass("open");
            $(".sidebar-wrapper").removeClass("open");
      });
      $(window).on("load", function () {
            $(".preloader").fadeOut("slow");
      });
      $(window).scroll(function () {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                  $("#scroll-top").addClass("active");
            } else {
                  $("#scroll-top").removeClass("active");
            }
      });
      $("#scroll-top").on("click", function () {
            $("html, body").animate(
                  {
                        scrollTop: 0,
                  },
                  1500
            );
            return false;
      });
      $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                  $(".navbar").addClass("fixed-top");
            } else {
                  $(".navbar").removeClass("fixed-top");
            }
      });
})(jQuery);

