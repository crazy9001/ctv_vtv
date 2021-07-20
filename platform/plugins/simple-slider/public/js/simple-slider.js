(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else if(typeof exports === 'object')
		exports["Comments"] = factory();
	else
		root["Comments"] = factory();
})(window, function() {
return /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 48);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./platform/plugins/simple-slider/resources/assets/js/simple-slider.js":
/*!*****************************************************************************!*\
  !*** ./platform/plugins/simple-slider/resources/assets/js/simple-slider.js ***!
  \*****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("function _classCallCheck(instance, Constructor) {\n  if (!(instance instanceof Constructor)) {\n    throw new TypeError(\"Cannot call a class as a function\");\n  }\n}\n\nfunction _defineProperties(target, props) {\n  for (var i = 0; i < props.length; i++) {\n    var descriptor = props[i];\n    descriptor.enumerable = descriptor.enumerable || false;\n    descriptor.configurable = true;\n    if (\"value\" in descriptor) descriptor.writable = true;\n    Object.defineProperty(target, descriptor.key, descriptor);\n  }\n}\n\nfunction _createClass(Constructor, protoProps, staticProps) {\n  if (protoProps) _defineProperties(Constructor.prototype, protoProps);\n  if (staticProps) _defineProperties(Constructor, staticProps);\n  return Constructor;\n}\n\nvar SimpleSliderManagement = /*#__PURE__*/function () {\n  function SimpleSliderManagement() {\n    _classCallCheck(this, SimpleSliderManagement);\n  }\n\n  _createClass(SimpleSliderManagement, [{\n    key: \"init\",\n    value: function init() {\n      var slider = $('.slider');\n      slider.each(function (index, el) {\n        var single = $(el).data('single');\n        $(el).find('.post').hover(function () {\n          var parent = $(el).parent().find('.slider-control');\n\n          if (!parent.hasClass('active')) {\n            parent.addClass('active');\n          }\n        }, function () {\n          var parent = $(el).parent().find('.slider-control');\n\n          if (parent.hasClass('active')) {\n            parent.removeClass('active');\n          }\n        });\n        $(el).owlCarousel({\n          autoPlay: $(el).data('autoplay'),\n          slideSpeed: 3000,\n          paginationSpeed: 400,\n          singleItem: single\n        });\n        $(el).siblings('.next').click(function () {\n          $(el).trigger('owl.next');\n        });\n        $(el).siblings('.prev').click(function () {\n          $(el).trigger('owl.prev');\n        });\n      });\n      $('.slider-wrap').fadeIn();\n    }\n  }]);\n\n  return SimpleSliderManagement;\n}();\n\n$(document).ready(function () {\n  new SimpleSliderManagement().init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9Db21tZW50cy8uL3BsYXRmb3JtL3BsdWdpbnMvc2ltcGxlLXNsaWRlci9yZXNvdXJjZXMvYXNzZXRzL2pzL3NpbXBsZS1zbGlkZXIuanM/ZGQ1ZiJdLCJuYW1lcyI6WyJTaW1wbGVTbGlkZXJNYW5hZ2VtZW50Iiwic2xpZGVyIiwiJCIsInNpbmdsZSIsInBhcmVudCIsImF1dG9QbGF5Iiwic2xpZGVTcGVlZCIsInBhZ2luYXRpb25TcGVlZCIsInNpbmdsZUl0ZW0iXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7SUFBTUEsc0I7Ozs7Ozs7MkJBQ0s7QUFDSCxVQUFJQyxNQUFNLEdBQUdDLENBQUMsQ0FBZCxTQUFjLENBQWQ7QUFDQUQsWUFBTSxDQUFOQSxLQUFZLHFCQUFlO0FBQ3ZCLFlBQUlFLE1BQU0sR0FBR0QsQ0FBQyxDQUFEQSxFQUFDLENBQURBLE1BQWIsUUFBYUEsQ0FBYjtBQUNBQSxTQUFDLENBQURBLEVBQUMsQ0FBREEscUJBQTBCLFlBQU07QUFDNUIsY0FBSUUsTUFBTSxHQUFHRixDQUFDLENBQURBLEVBQUMsQ0FBREEsZUFBYixpQkFBYUEsQ0FBYjs7QUFDQSxjQUFJLENBQUNFLE1BQU0sQ0FBTkEsU0FBTCxRQUFLQSxDQUFMLEVBQWdDO0FBQzVCQSxrQkFBTSxDQUFOQTtBQUNIO0FBSkxGLFdBTUcsWUFBTTtBQUNMLGNBQUlFLE1BQU0sR0FBR0YsQ0FBQyxDQUFEQSxFQUFDLENBQURBLGVBQWIsaUJBQWFBLENBQWI7O0FBQ0EsY0FBSUUsTUFBTSxDQUFOQSxTQUFKLFFBQUlBLENBQUosRUFBK0I7QUFDM0JBLGtCQUFNLENBQU5BO0FBQ0g7QUFWTEY7QUFZQUEsU0FBQyxDQUFEQSxFQUFDLENBQURBLGFBQWtCO0FBQ2RHLGtCQUFRLEVBQUVILENBQUMsQ0FBREEsRUFBQyxDQUFEQSxNQURJLFVBQ0pBLENBREk7QUFFZEksb0JBQVUsRUFGSTtBQUdkQyx5QkFBZSxFQUhEO0FBSWRDLG9CQUFVLEVBQUVMO0FBSkUsU0FBbEJEO0FBT0FBLFNBQUMsQ0FBREEsRUFBQyxDQUFEQSx5QkFBOEIsWUFBTTtBQUNoQ0EsV0FBQyxDQUFEQSxFQUFDLENBQURBO0FBREpBO0FBR0FBLFNBQUMsQ0FBREEsRUFBQyxDQUFEQSx5QkFBOEIsWUFBTTtBQUNoQ0EsV0FBQyxDQUFEQSxFQUFDLENBQURBO0FBREpBO0FBeEJKRDtBQTZCQUMsT0FBQyxDQUFEQSxjQUFDLENBQURBO0FBQ0g7Ozs7OztBQUdMQSxDQUFDLENBQURBLFFBQUMsQ0FBREEsT0FBa0IsWUFBTTtBQUNwQjtBQURKQSIsImZpbGUiOiIuL3BsYXRmb3JtL3BsdWdpbnMvc2ltcGxlLXNsaWRlci9yZXNvdXJjZXMvYXNzZXRzL2pzL3NpbXBsZS1zbGlkZXIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJjbGFzcyBTaW1wbGVTbGlkZXJNYW5hZ2VtZW50IHtcbiAgICBpbml0KCkge1xuICAgICAgICBsZXQgc2xpZGVyID0gJCgnLnNsaWRlcicpO1xuICAgICAgICBzbGlkZXIuZWFjaCgoaW5kZXgsIGVsKSA9PiB7XG4gICAgICAgICAgICBsZXQgc2luZ2xlID0gJChlbCkuZGF0YSgnc2luZ2xlJyk7XG4gICAgICAgICAgICAkKGVsKS5maW5kKCcucG9zdCcpLmhvdmVyKCgpID0+IHtcbiAgICAgICAgICAgICAgICBsZXQgcGFyZW50ID0gJChlbCkucGFyZW50KCkuZmluZCgnLnNsaWRlci1jb250cm9sJyk7XG4gICAgICAgICAgICAgICAgaWYgKCFwYXJlbnQuaGFzQ2xhc3MoJ2FjdGl2ZScpKSB7XG4gICAgICAgICAgICAgICAgICAgIHBhcmVudC5hZGRDbGFzcygnYWN0aXZlJyk7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICB9LCAoKSA9PiB7XG4gICAgICAgICAgICAgICAgbGV0IHBhcmVudCA9ICQoZWwpLnBhcmVudCgpLmZpbmQoJy5zbGlkZXItY29udHJvbCcpO1xuICAgICAgICAgICAgICAgIGlmIChwYXJlbnQuaGFzQ2xhc3MoJ2FjdGl2ZScpKSB7XG4gICAgICAgICAgICAgICAgICAgIHBhcmVudC5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAkKGVsKS5vd2xDYXJvdXNlbCh7XG4gICAgICAgICAgICAgICAgYXV0b1BsYXk6ICQoZWwpLmRhdGEoJ2F1dG9wbGF5JyksXG4gICAgICAgICAgICAgICAgc2xpZGVTcGVlZDogMzAwMCxcbiAgICAgICAgICAgICAgICBwYWdpbmF0aW9uU3BlZWQ6IDQwMCxcbiAgICAgICAgICAgICAgICBzaW5nbGVJdGVtOiBzaW5nbGVcbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAkKGVsKS5zaWJsaW5ncygnLm5leHQnKS5jbGljaygoKSA9PiB7XG4gICAgICAgICAgICAgICAgJChlbCkudHJpZ2dlcignb3dsLm5leHQnKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgJChlbCkuc2libGluZ3MoJy5wcmV2JykuY2xpY2soKCkgPT4ge1xuICAgICAgICAgICAgICAgICQoZWwpLnRyaWdnZXIoJ293bC5wcmV2Jyk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgJCgnLnNsaWRlci13cmFwJykuZmFkZUluKCk7XG4gICAgfVxufVxuXG4kKGRvY3VtZW50KS5yZWFkeSgoKSA9PiB7XG4gICAgbmV3IFNpbXBsZVNsaWRlck1hbmFnZW1lbnQoKS5pbml0KCk7XG59KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./platform/plugins/simple-slider/resources/assets/js/simple-slider.js\n");

/***/ }),

/***/ 48:
/*!***********************************************************************************!*\
  !*** multi ./platform/plugins/simple-slider/resources/assets/js/simple-slider.js ***!
  \***********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\SourceCode\vtv-weather\platform\plugins\simple-slider\resources\assets\js\simple-slider.js */"./platform/plugins/simple-slider/resources/assets/js/simple-slider.js");


/***/ })

/******/ });
});