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
/*!***********************************************************!*\
  !*** ./platform/plugins/blog/resources/assets/js/blog.js ***!
  \***********************************************************/
$(document).ready(function () {
  BDashboard.loadWidget($('#widget_posts_recent').find('.widget-content'), route('posts.widget.recent-posts'));
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});