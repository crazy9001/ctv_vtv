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
/*!*******************************************************************!*\
  !*** ./platform/packages/theme/resources/assets/js/custom-css.js ***!
  \*******************************************************************/
$(document).ready(function () {
  Botble.initCodeEditor('custom_css');
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});