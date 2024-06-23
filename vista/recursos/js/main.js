(function ($) {
  "use strict";
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 200, "easeInOutExpo");
    return false;
  });

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $(".navbar").addClass("nav-sticky");
    } else {
      $(".navbar").removeClass("nav-sticky");
    }
  });

  $(document).ready(function () {
    $(".nav-link").hover(
      function () {
        $(this).find("i").addClass("bx-tada");
      },
      function () {
        $(this).find("i").removeClass("bx-tada");
      }
    );
  });

  $(document).ready(function () {
    $(".socials a").hover(
      function () {
        $(this).find("i").addClass("bx-tada");
      },
      function () {
        $(this).find("i").removeClass("bx-tada");
      }
    );
  });

  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
})(jQuery);
