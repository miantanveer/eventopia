/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ./resources/assets/js/owl-carousel.js ***!
  \*********************************************/
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

(function ($) {
  var _owl$owlCarousel;

  // ______________Owl-carousel-icons2
  var owl = $('.owl-carousel-icons2');
  owl.owlCarousel((_owl$owlCarousel = {
    loop: true,
    rewind: false,
    margin: 25,
    animateIn: 'fadeInDowm',
    animateOut: 'fadeOutDown',
    autoplay: false,
    autoplayTimeout: 5000,
    // set value to change speed
    autoplayHoverPause: true,
    dots: false,
    nav: false
  }, _defineProperty(_owl$owlCarousel, "autoplay", true), _defineProperty(_owl$owlCarousel, "responsiveClass", true), _defineProperty(_owl$owlCarousel, "responsive", {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1300: {
      items: 4
    }
  }), _owl$owlCarousel));
})(jQuery);
/******/ })()
;