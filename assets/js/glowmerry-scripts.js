(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".glowmerry-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".glowmerry-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".glowmerry-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".glowmerry-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".glowmerry-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".glowmerry-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".glowmerry-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".glowmerry-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".glowmerry-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".glowmerry-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".glowmerry-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".glowmerry-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".glowmerry-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".glowmerry-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".glowmerry-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".glowmerry-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".glowmerry-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".glowmerry-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".glowmerry-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".glowmerry-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".glowmerry-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".glowmerry-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".glowmerry-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".glowmerry-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".glowmerry-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".glowmerry-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".glowmerry-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".glowmerry-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".glowmerry-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".glowmerry-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".glowmerry-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".glowmerry-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".glowmerry-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".glowmerry-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".glowmerry-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".glowmerry-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".glowmerry-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".glowmerry-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".glowmerry-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".glowmerry-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".glowmerry-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".glowmerry-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".glowmerry-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".glowmerry-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".glowmerry-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);
  // Back to Top
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $(".glowmerry-scrollto-top").fadeIn();
    } else {
      $(".glowmerry-scrollto-top").fadeOut();
    }
  });
  $(".glowmerry-scrollto-top").click(function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 600);
  });
})(jQuery);
