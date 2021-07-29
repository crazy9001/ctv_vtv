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
/*!********************************************************************!*\
  !*** ./platform/packages/revision/resources/assets/js/revision.js ***!
  \********************************************************************/
$(document).ready(function () {
  $.each($('.html-diff-content'), function (index, item) {
    $(item).html(htmldiff($(item).data('original'), $(item).html()));
  });
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});