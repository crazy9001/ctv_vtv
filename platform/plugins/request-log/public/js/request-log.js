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
/*!*************************************************************************!*\
  !*** ./platform/plugins/request-log/resources/assets/js/request-log.js ***!
  \*************************************************************************/
$(document).ready(function () {
  BDashboard.loadWidget($('#widget_request_errors').find('.widget-content'), route('request-log.widget.request-errors'));
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});