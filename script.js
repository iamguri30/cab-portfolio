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

// Set today's date as the minimum selectable date
const today = new Date().toISOString().split('T')[0];
document.getElementById('datePicker').setAttribute('min', today);

document.addEventListener("DOMContentLoaded", function () {
      const timePicker = document.getElementById("time-picker");
      const timePicker2 = document.getElementById("time-picker2");
      const now = new Date();
      const hours = String(now.getHours()).padStart(2, "0");
      const minutes = String(now.getMinutes()).padStart(2, "0");
      const currentTime = `${hours}:${minutes}`;

      // Set the min attribute to the current time
      timePicker.setAttribute("min", currentTime);
      timePicker2.setAttribute("min", currentTime);
});

function getcarType(x){
      document.getElementById("cartypeText").value = x;
}