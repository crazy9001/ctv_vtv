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
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./platform/themes/ripple/assets/js/ripple.js ***!
  \****************************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "Ripple": () => (/* binding */ Ripple)
/* harmony export */ });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

var searchInput = $('.search-input');
var superSearch = $('.super-search');
var closeSearch = $('.close-search');
var searchResult = $('.search-result');
var timeoutID = null;
var Ripple = /*#__PURE__*/function () {
  function Ripple() {
    _classCallCheck(this, Ripple);

    _defineProperty(this, "loadPlayer", function (el, url) {
      var player = videojs(el, {
        autoplay: false,
        sources: [{
          type: "video/mp4",
          //type: "application/x-mpegURL",
          src: url
        }]
      });
      player.hlsQualitySelector();
      player.play();
    });
  }

  _createClass(Ripple, [{
    key: "searchFunction",
    value: function searchFunction(keyword) {
      clearTimeout(timeoutID);
      timeoutID = setTimeout(function () {
        superSearch.removeClass('search-finished');
        searchResult.fadeOut();
        $.ajax({
          type: 'GET',
          cache: false,
          url: superSearch.data('search-url'),
          data: {
            'q': keyword
          },
          success: function success(res) {
            if (!res.error) {
              searchResult.html(res.data.items);
              superSearch.addClass('search-finished');
            } else {
              searchResult.html(res.message);
            }

            searchResult.fadeIn(500);
          },
          error: function error(res) {
            searchResult.html(res.responseText);
            searchResult.fadeIn(500);
          }
        });
      }, 500);
    }
  }, {
    key: "initVideoPlayer",
    value: function initVideoPlayer() {
      var videos = document.getElementsByTagName('video');

      for (var i = 0; i < videos.length; i++) {
        var video = videos[i];
        this.loadPlayer(video.id, $(video).closest('div.video-player').data('video'));
      }
    }
  }, {
    key: "bindActionToElement",
    value: function bindActionToElement() {
      var _this = this;

      closeSearch.on('click', function (event) {
        event.preventDefault();

        if (closeSearch.hasClass('active')) {
          superSearch.removeClass('active');
          searchResult.hide();
          closeSearch.removeClass('active');
          $('body').removeClass('overflow');
          $('.quick-search > .form-control').focus();
        } else {
          superSearch.addClass('active');

          if (searchInput.val() !== '') {
            _this.searchFunction(searchInput.val());
          }

          $('body').addClass('overflow');
          closeSearch.addClass('active');
        }
      });
      searchInput.keyup(function (e) {
        searchInput.val(e.target.value);

        _this.searchFunction(e.target.value);
      });
      this.initVideoPlayer();
    }
  }]);

  return Ripple;
}();
$(document).ready(function () {
  new Ripple().bindActionToElement();
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});