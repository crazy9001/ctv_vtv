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
/******/ 	return __webpack_require__(__webpack_require__.s = 49);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./platform/plugins/simple-slider/resources/assets/js/simple-slider-admin.js":
/*!***********************************************************************************!*\
  !*** ./platform/plugins/simple-slider/resources/assets/js/simple-slider-admin.js ***!
  \***********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("function _classCallCheck(instance, Constructor) {\n  if (!(instance instanceof Constructor)) {\n    throw new TypeError(\"Cannot call a class as a function\");\n  }\n}\n\nfunction _defineProperties(target, props) {\n  for (var i = 0; i < props.length; i++) {\n    var descriptor = props[i];\n    descriptor.enumerable = descriptor.enumerable || false;\n    descriptor.configurable = true;\n    if (\"value\" in descriptor) descriptor.writable = true;\n    Object.defineProperty(target, descriptor.key, descriptor);\n  }\n}\n\nfunction _createClass(Constructor, protoProps, staticProps) {\n  if (protoProps) _defineProperties(Constructor.prototype, protoProps);\n  if (staticProps) _defineProperties(Constructor, staticProps);\n  return Constructor;\n}\n\nvar SimpleSliderAdminManagement = /*#__PURE__*/function () {\n  function SimpleSliderAdminManagement() {\n    _classCallCheck(this, SimpleSliderAdminManagement);\n  }\n\n  _createClass(SimpleSliderAdminManagement, [{\n    key: \"init\",\n    value: function init() {\n      $.each($('#simple-slider-items-table_wrapper tbody'), function (index, el) {\n        Sortable.create(el, {\n          group: el + '_' + index,\n          // or { name: \"...\", pull: [true, false, clone], put: [true, false, array] }\n          sort: true,\n          // sorting inside list\n          delay: 0,\n          // time in milliseconds to define when the sorting should start\n          disabled: false,\n          // Disables the sortable if set to true.\n          store: null,\n          // @see Store\n          animation: 150,\n          // ms, animation speed moving items when sorting, `0` — without animation\n          handle: 'tr',\n          ghostClass: 'sortable-ghost',\n          // Class name for the drop placeholder\n          chosenClass: 'sortable-chosen',\n          // Class name for the chosen item\n          dataIdAttr: 'data-id',\n          forceFallback: false,\n          // ignore the HTML5 DnD behaviour and force the fallback to kick in\n          fallbackClass: 'sortable-fallback',\n          // Class name for the cloned DOM Element when using forceFallback\n          fallbackOnBody: false,\n          // Appends the cloned DOM Element into the Document's Body\n          scroll: true,\n          // or HTMLElement\n          scrollSensitivity: 30,\n          // px, how near the mouse must be to an edge to start scrolling.\n          scrollSpeed: 10,\n          // px\n          // dragging ended\n          onEnd: function onEnd() {\n            var $box = $(el).closest('.widget-body');\n            $box.find('.btn-save-sort-order').addClass('sort-button-active').show();\n            $.each($box.find('tbody tr'), function (index, sort) {\n              $(sort).find('.order-column').text(index + 1);\n            });\n          }\n        });\n      });\n      $('.btn-save-sort-order').off('click').on('click', function (event) {\n        event.preventDefault();\n\n        var _self = $(event.currentTarget);\n\n        if (_self.hasClass('sort-button-active')) {\n          var $box = _self.closest('.widget-body');\n\n          $box.find('.btn-save-sort-order').addClass('button-loading');\n          var items = [];\n          console.log($box.find('tbody tr'));\n          $.each($box.find('tbody tr'), function (index, sort) {\n            items.push(parseInt($(sort).find('td:first-child').text()));\n            $(sort).find('.order-column').text(index + 1);\n          });\n          $.ajax({\n            type: 'POST',\n            cache: false,\n            url: route('simple-slider.sorting'),\n            data: {\n              items: items\n            },\n            success: function success(res) {\n              Botble.showSuccess(res.message);\n              $box.find('.btn-save-sort-order').removeClass('button-loading').hide();\n\n              _self.removeClass('sort-button-active');\n            },\n            error: function error(res) {\n              Botble.showError(res.message);\n\n              _self.removeClass('sort-button-active');\n            }\n          });\n        }\n      });\n    }\n  }]);\n\n  return SimpleSliderAdminManagement;\n}();\n\n$(document).ready(function () {\n  new SimpleSliderAdminManagement().init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9Db21tZW50cy8uL3BsYXRmb3JtL3BsdWdpbnMvc2ltcGxlLXNsaWRlci9yZXNvdXJjZXMvYXNzZXRzL2pzL3NpbXBsZS1zbGlkZXItYWRtaW4uanM/MGVjZiJdLCJuYW1lcyI6WyJTaW1wbGVTbGlkZXJBZG1pbk1hbmFnZW1lbnQiLCIkIiwiU29ydGFibGUiLCJncm91cCIsImVsIiwic29ydCIsImRlbGF5IiwiZGlzYWJsZWQiLCJzdG9yZSIsImFuaW1hdGlvbiIsImhhbmRsZSIsImdob3N0Q2xhc3MiLCJjaG9zZW5DbGFzcyIsImRhdGFJZEF0dHIiLCJmb3JjZUZhbGxiYWNrIiwiZmFsbGJhY2tDbGFzcyIsImZhbGxiYWNrT25Cb2R5Iiwic2Nyb2xsIiwic2Nyb2xsU2Vuc2l0aXZpdHkiLCJzY3JvbGxTcGVlZCIsIm9uRW5kIiwiJGJveCIsImluZGV4IiwiZXZlbnQiLCJfc2VsZiIsIml0ZW1zIiwiY29uc29sZSIsInBhcnNlSW50IiwidHlwZSIsImNhY2hlIiwidXJsIiwicm91dGUiLCJkYXRhIiwic3VjY2VzcyIsIkJvdGJsZSIsInJlcyIsImVycm9yIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0lBQU1BLDJCOzs7Ozs7OzJCQUNLO0FBQ0hDLE9BQUMsQ0FBREEsS0FBT0EsQ0FBQyxDQUFSQSwwQ0FBUSxDQUFSQSxFQUFzRCxxQkFBZTtBQUNqRUMsZ0JBQVEsQ0FBUkEsV0FBb0I7QUFDaEJDLGVBQUssRUFBRUMsRUFBRSxHQUFGQSxNQURTO0FBQ1M7QUFDekJDLGNBQUksRUFGWTtBQUVKO0FBQ1pDLGVBQUssRUFIVztBQUdOO0FBQ1ZDLGtCQUFRLEVBSlE7QUFJQztBQUNqQkMsZUFBSyxFQUxXO0FBS0g7QUFDYkMsbUJBQVMsRUFOTztBQU1BO0FBQ2hCQyxnQkFBTSxFQVBVO0FBUWhCQyxvQkFBVSxFQVJNO0FBUWM7QUFDOUJDLHFCQUFXLEVBVEs7QUFTZ0I7QUFDaENDLG9CQUFVLEVBVk07QUFZaEJDLHVCQUFhLEVBWkc7QUFZTTtBQUN0QkMsdUJBQWEsRUFiRztBQWFvQjtBQUNwQ0Msd0JBQWMsRUFkRTtBQWNRO0FBRXhCQyxnQkFBTSxFQWhCVTtBQWdCRjtBQUNkQywyQkFBaUIsRUFqQkQ7QUFpQk87QUFDdkJDLHFCQUFXLEVBbEJLO0FBa0JDO0FBRWpCO0FBQ0FDLGVBQUssRUFBRSxpQkFBTTtBQUNULGdCQUFJQyxJQUFJLEdBQUdwQixDQUFDLENBQURBLEVBQUMsQ0FBREEsU0FBWCxjQUFXQSxDQUFYO0FBQ0FvQixnQkFBSSxDQUFKQTtBQUNBcEIsYUFBQyxDQUFEQSxLQUFPb0IsSUFBSSxDQUFKQSxLQUFQcEIsVUFBT29CLENBQVBwQixFQUE4Qix1QkFBaUI7QUFDM0NBLGVBQUMsQ0FBREEsSUFBQyxDQUFEQSw0QkFBbUNxQixLQUFLLEdBQXhDckI7QUFESkE7QUFHSDtBQTNCZSxTQUFwQkM7QUFESkQ7QUFnQ0FBLE9BQUMsQ0FBREEsc0JBQUMsQ0FBREEsMEJBQW1ELGlCQUFTO0FBQ3hEc0IsYUFBSyxDQUFMQTs7QUFDQSxZQUFJQyxLQUFLLEdBQUd2QixDQUFDLENBQUNzQixLQUFLLENBQW5CLGFBQWEsQ0FBYjs7QUFDQSxZQUFJQyxLQUFLLENBQUxBLFNBQUosb0JBQUlBLENBQUosRUFBMEM7QUFDdEMsY0FBSUgsSUFBSSxHQUFHRyxLQUFLLENBQUxBLFFBQVgsY0FBV0EsQ0FBWDs7QUFDQUgsY0FBSSxDQUFKQTtBQUNBLGNBQUlJLEtBQUssR0FBVDtBQUNBQyxpQkFBTyxDQUFQQSxJQUFZTCxJQUFJLENBQUpBLEtBQVpLLFVBQVlMLENBQVpLO0FBQ0F6QixXQUFDLENBQURBLEtBQU9vQixJQUFJLENBQUpBLEtBQVBwQixVQUFPb0IsQ0FBUHBCLEVBQThCLHVCQUFpQjtBQUMzQ3dCLGlCQUFLLENBQUxBLEtBQVdFLFFBQVEsQ0FBQzFCLENBQUMsQ0FBREEsSUFBQyxDQUFEQSx3QkFBcEJ3QixJQUFvQnhCLEVBQUQsQ0FBbkJ3QjtBQUNBeEIsYUFBQyxDQUFEQSxJQUFDLENBQURBLDRCQUFtQ3FCLEtBQUssR0FBeENyQjtBQUZKQTtBQUlBQSxXQUFDLENBQURBLEtBQU87QUFDSDJCLGdCQUFJLEVBREQ7QUFFSEMsaUJBQUssRUFGRjtBQUdIQyxlQUFHLEVBQUVDLEtBQUssQ0FIUCx1QkFHTyxDQUhQO0FBSUhDLGdCQUFJLEVBQUU7QUFDRlAsbUJBQUssRUFBRUE7QUFETCxhQUpIO0FBT0hRLG1CQUFPLEVBQUUsc0JBQU87QUFDWkMsb0JBQU0sQ0FBTkEsWUFBbUJDLEdBQUcsQ0FBdEJEO0FBQ0FiLGtCQUFJLENBQUpBOztBQUNBRyxtQkFBSyxDQUFMQTtBQVZEO0FBWUhZLGlCQUFLLEVBQUUsb0JBQU87QUFDVkYsb0JBQU0sQ0FBTkEsVUFBaUJDLEdBQUcsQ0FBcEJEOztBQUNBVixtQkFBSyxDQUFMQTtBQUNIO0FBZkUsV0FBUHZCO0FBaUJIO0FBN0JMQTtBQStCSDs7Ozs7O0FBR0xBLENBQUMsQ0FBREEsUUFBQyxDQUFEQSxPQUFrQixZQUFNO0FBQ3BCO0FBREpBIiwiZmlsZSI6Ii4vcGxhdGZvcm0vcGx1Z2lucy9zaW1wbGUtc2xpZGVyL3Jlc291cmNlcy9hc3NldHMvanMvc2ltcGxlLXNsaWRlci1hZG1pbi5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbImNsYXNzIFNpbXBsZVNsaWRlckFkbWluTWFuYWdlbWVudCB7XG4gICAgaW5pdCgpIHtcbiAgICAgICAgJC5lYWNoKCQoJyNzaW1wbGUtc2xpZGVyLWl0ZW1zLXRhYmxlX3dyYXBwZXIgdGJvZHknKSwgKGluZGV4LCBlbCkgPT4ge1xuICAgICAgICAgICAgU29ydGFibGUuY3JlYXRlKGVsLCB7XG4gICAgICAgICAgICAgICAgZ3JvdXA6IGVsICsgJ18nICsgaW5kZXgsIC8vIG9yIHsgbmFtZTogXCIuLi5cIiwgcHVsbDogW3RydWUsIGZhbHNlLCBjbG9uZV0sIHB1dDogW3RydWUsIGZhbHNlLCBhcnJheV0gfVxuICAgICAgICAgICAgICAgIHNvcnQ6IHRydWUsIC8vIHNvcnRpbmcgaW5zaWRlIGxpc3RcbiAgICAgICAgICAgICAgICBkZWxheTogMCwgLy8gdGltZSBpbiBtaWxsaXNlY29uZHMgdG8gZGVmaW5lIHdoZW4gdGhlIHNvcnRpbmcgc2hvdWxkIHN0YXJ0XG4gICAgICAgICAgICAgICAgZGlzYWJsZWQ6IGZhbHNlLCAvLyBEaXNhYmxlcyB0aGUgc29ydGFibGUgaWYgc2V0IHRvIHRydWUuXG4gICAgICAgICAgICAgICAgc3RvcmU6IG51bGwsIC8vIEBzZWUgU3RvcmVcbiAgICAgICAgICAgICAgICBhbmltYXRpb246IDE1MCwgLy8gbXMsIGFuaW1hdGlvbiBzcGVlZCBtb3ZpbmcgaXRlbXMgd2hlbiBzb3J0aW5nLCBgMGAg4oCUIHdpdGhvdXQgYW5pbWF0aW9uXG4gICAgICAgICAgICAgICAgaGFuZGxlOiAndHInLFxuICAgICAgICAgICAgICAgIGdob3N0Q2xhc3M6ICdzb3J0YWJsZS1naG9zdCcsIC8vIENsYXNzIG5hbWUgZm9yIHRoZSBkcm9wIHBsYWNlaG9sZGVyXG4gICAgICAgICAgICAgICAgY2hvc2VuQ2xhc3M6ICdzb3J0YWJsZS1jaG9zZW4nLCAvLyBDbGFzcyBuYW1lIGZvciB0aGUgY2hvc2VuIGl0ZW1cbiAgICAgICAgICAgICAgICBkYXRhSWRBdHRyOiAnZGF0YS1pZCcsXG5cbiAgICAgICAgICAgICAgICBmb3JjZUZhbGxiYWNrOiBmYWxzZSwgLy8gaWdub3JlIHRoZSBIVE1MNSBEbkQgYmVoYXZpb3VyIGFuZCBmb3JjZSB0aGUgZmFsbGJhY2sgdG8ga2ljayBpblxuICAgICAgICAgICAgICAgIGZhbGxiYWNrQ2xhc3M6ICdzb3J0YWJsZS1mYWxsYmFjaycsIC8vIENsYXNzIG5hbWUgZm9yIHRoZSBjbG9uZWQgRE9NIEVsZW1lbnQgd2hlbiB1c2luZyBmb3JjZUZhbGxiYWNrXG4gICAgICAgICAgICAgICAgZmFsbGJhY2tPbkJvZHk6IGZhbHNlLCAgLy8gQXBwZW5kcyB0aGUgY2xvbmVkIERPTSBFbGVtZW50IGludG8gdGhlIERvY3VtZW50J3MgQm9keVxuXG4gICAgICAgICAgICAgICAgc2Nyb2xsOiB0cnVlLCAvLyBvciBIVE1MRWxlbWVudFxuICAgICAgICAgICAgICAgIHNjcm9sbFNlbnNpdGl2aXR5OiAzMCwgLy8gcHgsIGhvdyBuZWFyIHRoZSBtb3VzZSBtdXN0IGJlIHRvIGFuIGVkZ2UgdG8gc3RhcnQgc2Nyb2xsaW5nLlxuICAgICAgICAgICAgICAgIHNjcm9sbFNwZWVkOiAxMCwgLy8gcHhcblxuICAgICAgICAgICAgICAgIC8vIGRyYWdnaW5nIGVuZGVkXG4gICAgICAgICAgICAgICAgb25FbmQ6ICgpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgbGV0ICRib3ggPSAkKGVsKS5jbG9zZXN0KCcud2lkZ2V0LWJvZHknKTtcbiAgICAgICAgICAgICAgICAgICAgJGJveC5maW5kKCcuYnRuLXNhdmUtc29ydC1vcmRlcicpLmFkZENsYXNzKCdzb3J0LWJ1dHRvbi1hY3RpdmUnKS5zaG93KCk7XG4gICAgICAgICAgICAgICAgICAgICQuZWFjaCgkYm94LmZpbmQoJ3Rib2R5IHRyJyksIChpbmRleCwgc29ydCkgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgJChzb3J0KS5maW5kKCcub3JkZXItY29sdW1uJykudGV4dChpbmRleCArIDEpO1xuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgJCgnLmJ0bi1zYXZlLXNvcnQtb3JkZXInKS5vZmYoJ2NsaWNrJykub24oJ2NsaWNrJywgZXZlbnQgPT4ge1xuICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgIGxldCBfc2VsZiA9ICQoZXZlbnQuY3VycmVudFRhcmdldCk7XG4gICAgICAgICAgICBpZiAoX3NlbGYuaGFzQ2xhc3MoJ3NvcnQtYnV0dG9uLWFjdGl2ZScpKSB7XG4gICAgICAgICAgICAgICAgbGV0ICRib3ggPSBfc2VsZi5jbG9zZXN0KCcud2lkZ2V0LWJvZHknKTtcbiAgICAgICAgICAgICAgICAkYm94LmZpbmQoJy5idG4tc2F2ZS1zb3J0LW9yZGVyJykuYWRkQ2xhc3MoJ2J1dHRvbi1sb2FkaW5nJyk7XG4gICAgICAgICAgICAgICAgbGV0IGl0ZW1zID0gW107XG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2coJGJveC5maW5kKCd0Ym9keSB0cicpKTtcbiAgICAgICAgICAgICAgICAkLmVhY2goJGJveC5maW5kKCd0Ym9keSB0cicpLCAoaW5kZXgsIHNvcnQpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgaXRlbXMucHVzaChwYXJzZUludCgkKHNvcnQpLmZpbmQoJ3RkOmZpcnN0LWNoaWxkJykudGV4dCgpKSk7XG4gICAgICAgICAgICAgICAgICAgICQoc29ydCkuZmluZCgnLm9yZGVyLWNvbHVtbicpLnRleHQoaW5kZXggKyAxKTtcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgICAgICB0eXBlOiAnUE9TVCcsXG4gICAgICAgICAgICAgICAgICAgIGNhY2hlOiBmYWxzZSxcbiAgICAgICAgICAgICAgICAgICAgdXJsOiByb3V0ZSgnc2ltcGxlLXNsaWRlci5zb3J0aW5nJyksXG4gICAgICAgICAgICAgICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGl0ZW1zOiBpdGVtc1xuICAgICAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgICAgICBzdWNjZXNzOiByZXMgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgQm90YmxlLnNob3dTdWNjZXNzKHJlcy5tZXNzYWdlKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICRib3guZmluZCgnLmJ0bi1zYXZlLXNvcnQtb3JkZXInKS5yZW1vdmVDbGFzcygnYnV0dG9uLWxvYWRpbmcnKS5oaWRlKCk7XG4gICAgICAgICAgICAgICAgICAgICAgICBfc2VsZi5yZW1vdmVDbGFzcygnc29ydC1idXR0b24tYWN0aXZlJyk7XG4gICAgICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgICAgIGVycm9yOiByZXMgPT4ge1xuICAgICAgICAgICAgICAgICAgICAgICAgQm90YmxlLnNob3dFcnJvcihyZXMubWVzc2FnZSk7XG4gICAgICAgICAgICAgICAgICAgICAgICBfc2VsZi5yZW1vdmVDbGFzcygnc29ydC1idXR0b24tYWN0aXZlJyk7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfSk7XG4gICAgfVxufVxuXG4kKGRvY3VtZW50KS5yZWFkeSgoKSA9PiB7XG4gICAgbmV3IFNpbXBsZVNsaWRlckFkbWluTWFuYWdlbWVudCgpLmluaXQoKTtcbn0pO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./platform/plugins/simple-slider/resources/assets/js/simple-slider-admin.js\n");

/***/ }),

/***/ 49:
/*!*****************************************************************************************!*\
  !*** multi ./platform/plugins/simple-slider/resources/assets/js/simple-slider-admin.js ***!
  \*****************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\SourceCode\vtv-weather\platform\plugins\simple-slider\resources\assets\js\simple-slider-admin.js */"./platform/plugins/simple-slider/resources/assets/js/simple-slider-admin.js");


/***/ })

/******/ });
});