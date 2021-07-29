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
/*!*****************************************************************!*\
  !*** ./platform/plugins/gallery/resources/assets/js/gallery.js ***!
  \*****************************************************************/
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var GalleryManagement = /*#__PURE__*/function () {
  function GalleryManagement() {
    _classCallCheck(this, GalleryManagement);
  }

  _createClass(GalleryManagement, [{
    key: "init",
    value: function init() {
      var container = document.querySelector('#list-photo');
      var masonry; // initialize Masonry after all images have loaded

      if (container) {
        imagesLoaded(container, function () {
          masonry = new Masonry(container);
        });
      }

      $('#list-photo').lightGallery({
        loop: true,
        thumbnail: true,
        fourceAutoply: false,
        autoplay: false,
        pager: false,
        speed: 300,
        scale: 1,
        keypress: true
      });
      $(document).on('click', '.lg-toogle-thumb', function () {
        $(document).find('.lg-sub-html').toggleClass('inactive');
      });
    }
  }]);

  return GalleryManagement;
}();

$(document).ready(function () {
  new GalleryManagement().init();
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});