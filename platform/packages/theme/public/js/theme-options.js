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
/*!**********************************************************************!*\
  !*** ./platform/packages/theme/resources/assets/js/theme-options.js ***!
  \**********************************************************************/
$(document).ready(function () {
  if ($(document).find('.colorpicker-input').length > 0) {
    $(document).find('.colorpicker-input').colorpicker();
  }

  if ($(document).find('.iconpicker-input').length > 0) {
    $(document).find('.iconpicker-input').iconpicker({
      selected: true,
      hideOnSelect: true
    });
  }

  $(document).ready(function () {
    $(document).on('click', '.button-save-theme-options', function (event) {
      event.preventDefault();

      var _self = $(event.currentTarget);

      _self.addClass('button-loading');

      if (typeof CKEDITOR != 'undefined') {
        for (var i in CKEDITOR.instances) {
          CKEDITOR.instances[i].updateElement();
        }
      }

      if (typeof tinymce != 'undefined') {
        for (var instance in tinymce.editors) {
          if (tinymce.editors[instance].getContent) {
            $('#' + instance).html(tinymce.editors[instance].getContent());
          }
        }
      }

      var $form = _self.closest('form');

      $.ajax({
        url: $form.prop('action'),
        type: 'POST',
        data: $form.serialize(),
        success: function success(data) {
          _self.removeClass('button-loading');

          if (data.error) {
            Botble.showError(data.message);
          } else {
            Botble.showSuccess(data.message);
            $form.removeClass('dirty');
          }
        },
        error: function error(data) {
          _self.removeClass('button-loading');

          Botble.handleError(data);
        }
      });
    });
  });
});
/******/ 	return __webpack_exports__;
/******/ })()
;
});