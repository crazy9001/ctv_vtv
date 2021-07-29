(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else if(typeof exports === 'object')
		exports["Comments"] = factory();
	else
		root["Comments"] = factory();
})(self, function() {
return /******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************************************************!*\
  !*** ./platform/plugins/simple-slider/resources/assets/js/simple-slider.js ***!
  \*****************************************************************************/
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var SimpleSliderManagement = /*#__PURE__*/function () {
  function SimpleSliderManagement() {
    _classCallCheck(this, SimpleSliderManagement);
  }

  _createClass(SimpleSliderManagement, [{
    key: "init",
    value: function init() {
      var slider = $('.slider');
      slider.each(function (index, el) {
        var single = $(el).data('single');
        $(el).find('.post').hover(function () {
          var parent = $(el).parent().find('.slider-control');

          if (!parent.hasClass('active')) {
            parent.addClass('active');
          }
        }, function () {
          var parent = $(el).parent().find('.slider-control');

          if (parent.hasClass('active')) {
            parent.removeClass('active');
          }
        });
        $(el).owlCarousel({
          autoPlay: $(el).data('autoplay'),
          slideSpeed: 3000,
          paginationSpeed: 400,
          singleItem: single
        });
        $(el).siblings('.next').click(function () {
          $(el).trigger('owl.next');
        });
        $(el).siblings('.prev').click(function () {
          $(el).trigger('owl.prev');
        });
      });
      $('.slider-wrap').fadeIn();
    }
  }]);

  return SimpleSliderManagement;
}();

$(document).ready(function () {
  new SimpleSliderManagement().init();
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});