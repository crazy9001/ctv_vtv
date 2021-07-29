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
/*!*********************************************************************!*\
  !*** ./platform/plugins/audit-log/resources/assets/js/audit-log.js ***!
  \*********************************************************************/
$(document).ready(function () {
  BDashboard.loadWidget($('#widget_audit_logs').find('.widget-content'), route('audit-log.widget.activities'));
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});