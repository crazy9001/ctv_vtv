/******/ (() => { // webpackBootstrap
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
/*!*************************************************************************!*\
  !*** ./platform/core/base/resources/assets/js/medium-editor-manager.js ***!
  \*************************************************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "MediumEditorManager": () => (/* binding */ MediumEditorManager)
/* harmony export */ });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var MediumEditorManager = /*#__PURE__*/function () {
  function MediumEditorManager(element) {
    _classCallCheck(this, MediumEditorManager);

    this.element = element;
  }

  _createClass(MediumEditorManager, [{
    key: "init",
    value: function init() {
      this.editor = new MediumEditor(this.element, {
        buttonLabels: 'fontawesome',
        placeholder: {
          text: 'Nhập nội dung',
          hideOnClick: true
        },
        toolbar: {
          allowMultiParagraphSelection: true,
          buttons: ['bold', 'italic', 'underline', {
            name: 'anchor',
            contentDefault: '<i class="fa fa-link"></i>'
          }, {
            name: 'justifyFull',
            contentDefault: '<i class="fa fa-align-justify"></i>'
          }, {
            name: 'justifyLeft',
            contentDefault: '<i class="fa fa-align-left"></i>'
          }, {
            name: 'justifyCenter',
            contentDefault: '<i class="fa fa-align-center"></i>'
          }, {
            name: 'justifyRight',
            contentDefault: '<i class="fa fa-align-right"></i>'
          }, {
            name: 'table',
            contentDefault: '<i class="fa fa-table"></i>'
          }],
          diffLeft: 0,
          diffTop: -10,
          firstButtonClass: 'medium-editor-button-first',
          lastButtonClass: 'medium-editor-button-last',
          relativeContainer: null,
          standardizeSelectionStart: false,
          "static": false,

          /* options which only apply when static is true */
          align: 'center',
          sticky: false,
          updateOnEmptySelection: false
        },
        extensions: {
          table: new MediumEditorTable()
        }
      });
    }
  }]);

  return MediumEditorManager;
}();
/******/ })()
;