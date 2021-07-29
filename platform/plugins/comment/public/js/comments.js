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
/******/ 	var __webpack_modules__ = ({

/***/ "./platform/plugins/comment/resources/assets/js/util/hashParam.js":
/*!************************************************************************!*\
  !*** ./platform/plugins/comment/resources/assets/js/util/hashParam.js ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ hashParam)
/* harmony export */ });
/**
 * Get param from the hash string.
 *
 * @param  {String} name
 * @param  {Any} _default
 * @return {Any}
 */
function hashParam(name) {
  var _default = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : undefined;

  var fragment = extract(window.location.search, '_escaped_fragment_');
  var str = fragment ? "#".concat(fragment) : window.location.hash.replace('#!', '#');
  return +extract(str, name, true) || _default;
}
/**
 * @param  {String} str
 * @param  {String} name
 * @param  {Boolean} isHash
 * @return {String|undefined}
 */

function extract(str, name, isHash) {
  name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
  var regex = new RegExp((isHash ? '[\\#]' : '[\\?&]') + name + '=([^&#]*)');
  var results = regex.exec(str);
  return results ? decodeURIComponent(results[1].replace(/\+/g, ' ')) : undefined;
}

/***/ }),

/***/ "./platform/plugins/comment/resources/assets/js/util/queryString.js":
/*!**************************************************************************!*\
  !*** ./platform/plugins/comment/resources/assets/js/util/queryString.js ***!
  \**************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ queryString)
/* harmony export */ });
var encode = function encode(str) {
  return encodeURIComponent(str).replace(/[!'()*]/g, function (x) {
    return "%".concat(x.charCodeAt(0).toString(16).toUpperCase());
  });
};
/**
 * Convert an object to a query string.
 *
 * @param  {Object} obj
 * @return {String}
 */


function queryString(obj) {
  return Object.keys(obj).map(function (key) {
    var value = obj[key];

    if (value === undefined) {
      return '';
    }

    if (value === null) {
      return encode(key);
    }

    return encode(key) + '=' + encode(value);
  }).filter(function (x) {
    return x.length > 0;
  }).join('&');
}

/***/ }),

/***/ "./platform/plugins/comment/resources/assets/js/util/scrollTo.js":
/*!***********************************************************************!*\
  !*** ./platform/plugins/comment/resources/assets/js/util/scrollTo.js ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ scrollTo)
/* harmony export */ });
/* harmony import */ var _vendor_zenscroll__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/vendor/zenscroll */ "./platform/plugins/comment/resources/assets/js/vendor/zenscroll.js");
/* harmony import */ var _vendor_zenscroll__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_vendor_zenscroll__WEBPACK_IMPORTED_MODULE_0__);

/**
 * Scroll to the target element or Y position.
 *
 * @param {HTMLElement|Number} target
 * @param {Number} duration
 */

function scrollTo(target) {
  var duration = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 200;
  (_vendor_zenscroll__WEBPACK_IMPORTED_MODULE_0___default())[isNaN(target) ? 'to' : 'toY'](target, duration);
}

/***/ }),

/***/ "./platform/plugins/comment/resources/assets/js/vendor/zenscroll.js":
/*!**************************************************************************!*\
  !*** ./platform/plugins/comment/resources/assets/js/vendor/zenscroll.js ***!
  \**************************************************************************/
/***/ (function(module, exports) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*eslint-disable*/

/**
 * Zenscroll 4.0.0
 * https://github.com/zengabor/zenscroll/
 *
 * Copyright 2015–2017 Gabor Lenard
 *
 * This is free and unencumbered software released into the public domain.
 *
 * Anyone is free to copy, modify, publish, use, compile, sell, or
 * distribute this software, either in source code form or as a compiled
 * binary, for any purpose, commercial or non-commercial, and by any
 * means.
 *
 * In jurisdictions that recognize copyright laws, the author or authors
 * of this software dedicate any and all copyright interest in the
 * software to the public domain. We make this dedication for the benefit
 * of the public at large and to the detriment of our heirs and
 * successors. We intend this dedication to be an overt act of
 * relinquishment in perpetuity of all present and future rights to this
 * software under copyright law.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR
 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 *
 * For more information, please refer to <http://unlicense.org>
 *
 */

/*jshint devel:true, asi:true */

/*global define, module */
(function (root, factory) {
  if (true) {
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory()),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
})(this, function () {
  "use strict"; // Detect if the browser already supports native smooth scrolling (e.g., Firefox 36+ and Chrome 49+) and it is enabled:

  var isNativeSmoothScrollEnabledOn = function isNativeSmoothScrollEnabledOn(elem) {
    return "getComputedStyle" in window && window.getComputedStyle(elem)["scroll-behavior"] === "smooth";
  }; // Exit if it’s not a browser environment:


  if (typeof window === "undefined" || !("document" in window)) {
    return {};
  }

  var makeScroller = function makeScroller(container, defaultDuration, edgeOffset) {
    // Use defaults if not provided
    defaultDuration = defaultDuration || 999; //ms

    if (!edgeOffset && edgeOffset !== 0) {
      // When scrolling, this amount of distance is kept from the edges of the container:
      edgeOffset = 9; //px
    } // Handling the life-cycle of the scroller


    var scrollTimeoutId;

    var setScrollTimeoutId = function setScrollTimeoutId(newValue) {
      scrollTimeoutId = newValue;
    };
    /**
     * Stop the current smooth scroll operation immediately
     */


    var stopScroll = function stopScroll() {
      clearTimeout(scrollTimeoutId);
      setScrollTimeoutId(0);
    };

    var getTopWithEdgeOffset = function getTopWithEdgeOffset(elem) {
      return Math.max(0, container.getTopOf(elem) - edgeOffset);
    };
    /**
     * Scrolls to a specific vertical position in the document.
     *
     * @param {targetY} The vertical position within the document.
     * @param {duration} Optionally the duration of the scroll operation.
     *        If not provided the default duration is used.
     * @param {onDone} An optional callback function to be invoked once the scroll finished.
     */


    var scrollToY = function scrollToY(targetY, duration, onDone) {
      stopScroll();

      if (duration === 0 || duration && duration < 0 || isNativeSmoothScrollEnabledOn(container.body)) {
        container.toY(targetY);

        if (onDone) {
          onDone();
        }
      } else {
        var startY = container.getY();
        var distance = Math.max(0, targetY) - startY;
        var startTime = new Date().getTime();
        duration = duration || Math.min(Math.abs(distance), defaultDuration);

        (function loopScroll() {
          setScrollTimeoutId(setTimeout(function () {
            // Calculate percentage:
            var p = Math.min(1, (new Date().getTime() - startTime) / duration); // Calculate the absolute vertical position:

            var y = Math.max(0, Math.floor(startY + distance * (p < 0.5 ? 2 * p * p : p * (4 - p * 2) - 1)));
            container.toY(y);

            if (p < 1 && container.getHeight() + y < container.body.scrollHeight) {
              loopScroll();
            } else {
              setTimeout(stopScroll, 99); // with cooldown time

              if (onDone) {
                onDone();
              }
            }
          }, 9));
        })();
      }
    };
    /**
     * Scrolls to the top of a specific element.
     *
     * @param {elem} The element to scroll to.
     * @param {duration} Optionally the duration of the scroll operation.
     * @param {onDone} An optional callback function to be invoked once the scroll finished.
     */


    var scrollToElem = function scrollToElem(elem, duration, onDone) {
      scrollToY(getTopWithEdgeOffset(elem), duration, onDone);
    };
    /**
     * Scrolls an element into view if necessary.
     *
     * @param {elem} The element.
     * @param {duration} Optionally the duration of the scroll operation.
     * @param {onDone} An optional callback function to be invoked once the scroll finished.
     */


    var scrollIntoView = function scrollIntoView(elem, duration, onDone) {
      var elemHeight = elem.getBoundingClientRect().height;
      var elemBottom = container.getTopOf(elem) + elemHeight;
      var containerHeight = container.getHeight();
      var y = container.getY();
      var containerBottom = y + containerHeight;

      if (getTopWithEdgeOffset(elem) < y || elemHeight + edgeOffset > containerHeight) {
        // Element is clipped at top or is higher than screen.
        scrollToElem(elem, duration, onDone);
      } else if (elemBottom + edgeOffset > containerBottom) {
        // Element is clipped at the bottom.
        scrollToY(elemBottom - containerHeight + edgeOffset, duration, onDone);
      } else if (onDone) {
        onDone();
      }
    };
    /**
     * Scrolls to the center of an element.
     *
     * @param {elem} The element.
     * @param {duration} Optionally the duration of the scroll operation.
     * @param {offset} Optionally the offset of the top of the element from the center of the screen.
     * @param {onDone} An optional callback function to be invoked once the scroll finished.
     */


    var scrollToCenterOf = function scrollToCenterOf(elem, duration, offset, onDone) {
      scrollToY(Math.max(0, container.getTopOf(elem) - container.getHeight() / 2 + (offset || elem.getBoundingClientRect().height / 2)), duration, onDone);
    };
    /**
     * Changes default settings for this scroller.
     *
     * @param {newDefaultDuration} Optionally a new value for default duration, used for each scroll method by default.
     *        Ignored if null or undefined.
     * @param {newEdgeOffset} Optionally a new value for the edge offset, used by each scroll method by default. Ignored if null or undefined.
     * @returns An object with the current values.
     */


    var setup = function setup(newDefaultDuration, newEdgeOffset) {
      if (newDefaultDuration === 0 || newDefaultDuration) {
        defaultDuration = newDefaultDuration;
      }

      if (newEdgeOffset === 0 || newEdgeOffset) {
        edgeOffset = newEdgeOffset;
      }

      return {
        defaultDuration: defaultDuration,
        edgeOffset: edgeOffset
      };
    };

    return {
      setup: setup,
      to: scrollToElem,
      toY: scrollToY,
      intoView: scrollIntoView,
      center: scrollToCenterOf,
      stop: stopScroll,
      moving: function moving() {
        return !!scrollTimeoutId;
      },
      getY: container.getY,
      getTopOf: container.getTopOf
    };
  };

  var docElem = document.documentElement;

  var getDocY = function getDocY() {
    return window.scrollY || docElem.scrollTop;
  }; // Create a scroller for the document:


  var zenscroll = makeScroller({
    body: document.scrollingElement || document.body,
    toY: function toY(y) {
      window.scrollTo(0, y);
    },
    getY: getDocY,
    getHeight: function getHeight() {
      return window.innerHeight || docElem.clientHeight;
    },
    getTopOf: function getTopOf(elem) {
      return elem.getBoundingClientRect().top + getDocY() - docElem.offsetTop;
    }
  });
  /**
   * Creates a scroller from the provided container element (e.g., a DIV)
   *
   * @param {scrollContainer} The vertical position within the document.
   * @param {defaultDuration} Optionally a value for default duration, used for each scroll method by default.
   *        Ignored if 0 or null or undefined.
   * @param {edgeOffset} Optionally a value for the edge offset, used by each scroll method by default.
   *        Ignored if null or undefined.
   * @returns A scroller object, similar to `zenscroll` but controlling the provided element.
   */

  zenscroll.createScroller = function (scrollContainer, defaultDuration, edgeOffset) {
    return makeScroller({
      body: scrollContainer,
      toY: function toY(y) {
        scrollContainer.scrollTop = y;
      },
      getY: function getY() {
        return scrollContainer.scrollTop;
      },
      getHeight: function getHeight() {
        return Math.min(scrollContainer.clientHeight, window.innerHeight || docElem.clientHeight);
      },
      getTopOf: function getTopOf(elem) {
        return elem.offsetTop;
      }
    }, defaultDuration, edgeOffset);
  };

  return zenscroll;
});

/***/ }),

/***/ "./node_modules/iframe-resizer/js/iframeResizer.js":
/*!*********************************************************!*\
  !*** ./node_modules/iframe-resizer/js/iframeResizer.js ***!
  \*********************************************************/
/***/ ((module, exports) => {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*
 * File: iframeResizer.js
 * Desc: Force iframes to size to content.
 * Requires: iframeResizer.contentWindow.js to be loaded into the target frame.
 * Doc: https://github.com/davidjbradshaw/iframe-resizer
 * Author: David J. Bradshaw - dave@bradshaw.net
 * Contributor: Jure Mav - jure.mav@gmail.com
 * Contributor: Reed Dadoune - reed@dadoune.com
 */

(function(undefined) {
  'use strict';

  if (typeof window === 'undefined') return; // don't run for server side render

  var count = 0,
    logEnabled = false,
    hiddenCheckEnabled = false,
    msgHeader = 'message',
    msgHeaderLen = msgHeader.length,
    msgId = '[iFrameSizer]', //Must match iframe msg ID
    msgIdLen = msgId.length,
    pagePosition = null,
    requestAnimationFrame = window.requestAnimationFrame,
    resetRequiredMethods = {
      max: 1,
      scroll: 1,
      bodyScroll: 1,
      documentElementScroll: 1
    },
    settings = {},
    timer = null,
    logId = 'Host Page',
    defaults = {
      autoResize: true,
      bodyBackground: null,
      bodyMargin: null,
      bodyMarginV1: 8,
      bodyPadding: null,
      checkOrigin: true,
      inPageLinks: false,
      enablePublicMethods: true,
      heightCalculationMethod: 'bodyOffset',
      id: 'iFrameResizer',
      interval: 32,
      log: false,
      maxHeight: Infinity,
      maxWidth: Infinity,
      minHeight: 0,
      minWidth: 0,
      resizeFrom: 'parent',
      scrolling: false,
      sizeHeight: true,
      sizeWidth: false,
      warningTimeout: 5000,
      tolerance: 0,
      widthCalculationMethod: 'scroll',
      closedCallback: function() {},
      initCallback: function() {},
      messageCallback: function() {
        warn('MessageCallback function not defined');
      },
      resizedCallback: function() {},
      scrollCallback: function() {
        return true;
      }
    };

  function getMutationObserver() {
    return window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
  }

  function addEventListener(obj, evt, func) {
    /* istanbul ignore else */ // Not testable in PhantonJS
    if ('addEventListener' in window) {
      obj.addEventListener(evt, func, false);
    } else if ('attachEvent' in window) {
      //IE
      obj.attachEvent('on' + evt, func);
    }
  }

  function removeEventListener(el, evt, func) {
    /* istanbul ignore else */ // Not testable in phantonJS
    if ('removeEventListener' in window) {
      el.removeEventListener(evt, func, false);
    } else if ('detachEvent' in window) {
      //IE
      el.detachEvent('on' + evt, func);
    }
  }

  function setupRequestAnimationFrame() {
    var vendors = ['moz', 'webkit', 'o', 'ms'],
      x;

    // Remove vendor prefixing if prefixed and break early if not
    for (x = 0; x < vendors.length && !requestAnimationFrame; x += 1) {
      requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
    }

    if (!requestAnimationFrame) {
      log('setup', 'RequestAnimationFrame not supported');
    }
  }

  function getMyID(iframeId) {
    var retStr = 'Host page: ' + iframeId;

    if (window.top !== window.self) {
      if (window.parentIFrame && window.parentIFrame.getId) {
        retStr = window.parentIFrame.getId() + ': ' + iframeId;
      } else {
        retStr = 'Nested host page: ' + iframeId;
      }
    }

    return retStr;
  }

  function formatLogHeader(iframeId) {
    return msgId + '[' + getMyID(iframeId) + ']';
  }

  function isLogEnabled(iframeId) {
    return settings[iframeId] ? settings[iframeId].log : logEnabled;
  }

  function log(iframeId, msg) {
    output('log', iframeId, msg, isLogEnabled(iframeId));
  }

  function info(iframeId, msg) {
    output('info', iframeId, msg, isLogEnabled(iframeId));
  }

  function warn(iframeId, msg) {
    output('warn', iframeId, msg, true);
  }

  function output(type, iframeId, msg, enabled) {
    if (true === enabled && 'object' === typeof window.console) {
      console[type](formatLogHeader(iframeId), msg);
    }
  }

  function iFrameListener(event) {
    function resizeIFrame() {
      function resize() {
        setSize(messageData);
        setPagePosition(iframeId);
        callback('resizedCallback', messageData);
      }

      ensureInRange('Height');
      ensureInRange('Width');

      syncResize(resize, messageData, 'init');
    }

    function processMsg() {
      var data = msg.substr(msgIdLen).split(':');

      return {
        iframe: settings[data[0]] && settings[data[0]].iframe,
        id: data[0],
        height: data[1],
        width: data[2],
        type: data[3]
      };
    }

    function ensureInRange(Dimension) {
      var max = Number(settings[iframeId]['max' + Dimension]),
        min = Number(settings[iframeId]['min' + Dimension]),
        dimension = Dimension.toLowerCase(),
        size = Number(messageData[dimension]);

      log(
        iframeId,
        'Checking ' + dimension + ' is in range ' + min + '-' + max
      );

      if (size < min) {
        size = min;
        log(iframeId, 'Set ' + dimension + ' to min value');
      }

      if (size > max) {
        size = max;
        log(iframeId, 'Set ' + dimension + ' to max value');
      }

      messageData[dimension] = '' + size;
    }

    function isMessageFromIFrame() {
      function checkAllowedOrigin() {
        function checkList() {
          var i = 0,
            retCode = false;

          log(
            iframeId,
            'Checking connection is from allowed list of origins: ' +
              checkOrigin
          );

          for (; i < checkOrigin.length; i++) {
            if (checkOrigin[i] === origin) {
              retCode = true;
              break;
            }
          }
          return retCode;
        }

        function checkSingle() {
          var remoteHost = settings[iframeId] && settings[iframeId].remoteHost;
          log(iframeId, 'Checking connection is from: ' + remoteHost);
          return origin === remoteHost;
        }

        return checkOrigin.constructor === Array ? checkList() : checkSingle();
      }

      var origin = event.origin,
        checkOrigin = settings[iframeId] && settings[iframeId].checkOrigin;

      if (checkOrigin && '' + origin !== 'null' && !checkAllowedOrigin()) {
        throw new Error(
          'Unexpected message received from: ' +
            origin +
            ' for ' +
            messageData.iframe.id +
            '. Message was: ' +
            event.data +
            '. This error can be disabled by setting the checkOrigin: false option or by providing of array of trusted domains.'
        );
      }

      return true;
    }

    function isMessageForUs() {
      return (
        msgId === ('' + msg).substr(0, msgIdLen) &&
        msg.substr(msgIdLen).split(':')[0] in settings
      ); //''+Protects against non-string msg
    }

    function isMessageFromMetaParent() {
      //Test if this message is from a parent above us. This is an ugly test, however, updating
      //the message format would break backwards compatibity.
      var retCode = messageData.type in { true: 1, false: 1, undefined: 1 };

      if (retCode) {
        log(iframeId, 'Ignoring init message from meta parent page');
      }

      return retCode;
    }

    function getMsgBody(offset) {
      return msg.substr(msg.indexOf(':') + msgHeaderLen + offset);
    }

    function forwardMsgFromIFrame(msgBody) {
      log(
        iframeId,
        'MessageCallback passed: {iframe: ' +
          messageData.iframe.id +
          ', message: ' +
          msgBody +
          '}'
      );
      callback('messageCallback', {
        iframe: messageData.iframe,
        message: JSON.parse(msgBody)
      });
      log(iframeId, '--');
    }

    function getPageInfo() {
      var bodyPosition = document.body.getBoundingClientRect(),
        iFramePosition = messageData.iframe.getBoundingClientRect();

      return JSON.stringify({
        iframeHeight: iFramePosition.height,
        iframeWidth: iFramePosition.width,
        clientHeight: Math.max(
          document.documentElement.clientHeight,
          window.innerHeight || 0
        ),
        clientWidth: Math.max(
          document.documentElement.clientWidth,
          window.innerWidth || 0
        ),
        offsetTop: parseInt(iFramePosition.top - bodyPosition.top, 10),
        offsetLeft: parseInt(iFramePosition.left - bodyPosition.left, 10),
        scrollTop: window.pageYOffset,
        scrollLeft: window.pageXOffset
      });
    }

    function sendPageInfoToIframe(iframe, iframeId) {
      function debouncedTrigger() {
        trigger(
          'Send Page Info',
          'pageInfo:' + getPageInfo(),
          iframe,
          iframeId
        );
      }
      debounceFrameEvents(debouncedTrigger, 32, iframeId);
    }

    function startPageInfoMonitor() {
      function setListener(type, func) {
        function sendPageInfo() {
          if (settings[id]) {
            sendPageInfoToIframe(settings[id].iframe, id);
          } else {
            stop();
          }
        }

        ['scroll', 'resize'].forEach(function(evt) {
          log(id, type + evt + ' listener for sendPageInfo');
          func(window, evt, sendPageInfo);
        });
      }

      function stop() {
        setListener('Remove ', removeEventListener);
      }

      function start() {
        setListener('Add ', addEventListener);
      }

      var id = iframeId; //Create locally scoped copy of iFrame ID

      start();

      if (settings[id]) {
        settings[id].stopPageInfo = stop;
      }
    }

    function stopPageInfoMonitor() {
      if (settings[iframeId] && settings[iframeId].stopPageInfo) {
        settings[iframeId].stopPageInfo();
        delete settings[iframeId].stopPageInfo;
      }
    }

    function checkIFrameExists() {
      var retBool = true;

      if (null === messageData.iframe) {
        warn(iframeId, 'IFrame (' + messageData.id + ') not found');
        retBool = false;
      }
      return retBool;
    }

    function getElementPosition(target) {
      var iFramePosition = target.getBoundingClientRect();

      getPagePosition(iframeId);

      return {
        x: Math.floor(Number(iFramePosition.left) + Number(pagePosition.x)),
        y: Math.floor(Number(iFramePosition.top) + Number(pagePosition.y))
      };
    }

    function scrollRequestFromChild(addOffset) {
      /* istanbul ignore next */ //Not testable in Karma
      function reposition() {
        pagePosition = newPosition;
        scrollTo();
        log(iframeId, '--');
      }

      function calcOffset() {
        return {
          x: Number(messageData.width) + offset.x,
          y: Number(messageData.height) + offset.y
        };
      }

      function scrollParent() {
        if (window.parentIFrame) {
          window.parentIFrame['scrollTo' + (addOffset ? 'Offset' : '')](
            newPosition.x,
            newPosition.y
          );
        } else {
          warn(
            iframeId,
            'Unable to scroll to requested position, window.parentIFrame not found'
          );
        }
      }

      var offset = addOffset
          ? getElementPosition(messageData.iframe)
          : { x: 0, y: 0 },
        newPosition = calcOffset();

      log(
        iframeId,
        'Reposition requested from iFrame (offset x:' +
          offset.x +
          ' y:' +
          offset.y +
          ')'
      );

      if (window.top !== window.self) {
        scrollParent();
      } else {
        reposition();
      }
    }

    function scrollTo() {
      if (false !== callback('scrollCallback', pagePosition)) {
        setPagePosition(iframeId);
      } else {
        unsetPagePosition();
      }
    }

    function findTarget(location) {
      function jumpToTarget() {
        var jumpPosition = getElementPosition(target);

        log(
          iframeId,
          'Moving to in page link (#' +
            hash +
            ') at x: ' +
            jumpPosition.x +
            ' y: ' +
            jumpPosition.y
        );
        pagePosition = {
          x: jumpPosition.x,
          y: jumpPosition.y
        };

        scrollTo();
        log(iframeId, '--');
      }

      function jumpToParent() {
        if (window.parentIFrame) {
          window.parentIFrame.moveToAnchor(hash);
        } else {
          log(
            iframeId,
            'In page link #' +
              hash +
              ' not found and window.parentIFrame not found'
          );
        }
      }

      var hash = location.split('#')[1] || '',
        hashData = decodeURIComponent(hash),
        target =
          document.getElementById(hashData) ||
          document.getElementsByName(hashData)[0];

      if (target) {
        jumpToTarget();
      } else if (window.top !== window.self) {
        jumpToParent();
      } else {
        log(iframeId, 'In page link #' + hash + ' not found');
      }
    }

    function callback(funcName, val) {
      return chkCallback(iframeId, funcName, val);
    }

    function actionMsg() {
      if (settings[iframeId] && settings[iframeId].firstRun) firstRun();

      switch (messageData.type) {
        case 'close':
          if (settings[iframeId].closeRequestCallback)
            chkCallback(
              iframeId,
              'closeRequestCallback',
              settings[iframeId].iframe
            );
          else closeIFrame(messageData.iframe);
          break;
        case 'message':
          forwardMsgFromIFrame(getMsgBody(6));
          break;
        case 'scrollTo':
          scrollRequestFromChild(false);
          break;
        case 'scrollToOffset':
          scrollRequestFromChild(true);
          break;
        case 'pageInfo':
          sendPageInfoToIframe(
            settings[iframeId] && settings[iframeId].iframe,
            iframeId
          );
          startPageInfoMonitor();
          break;
        case 'pageInfoStop':
          stopPageInfoMonitor();
          break;
        case 'inPageLink':
          findTarget(getMsgBody(9));
          break;
        case 'reset':
          resetIFrame(messageData);
          break;
        case 'init':
          resizeIFrame();
          callback('initCallback', messageData.iframe);
          break;
        default:
          resizeIFrame();
      }
    }

    function hasSettings(iframeId) {
      var retBool = true;

      if (!settings[iframeId]) {
        retBool = false;
        warn(
          messageData.type +
            ' No settings for ' +
            iframeId +
            '. Message was: ' +
            msg
        );
      }

      return retBool;
    }

    function iFrameReadyMsgReceived() {
      for (var iframeId in settings) {
        trigger(
          'iFrame requested init',
          createOutgoingMsg(iframeId),
          document.getElementById(iframeId),
          iframeId
        );
      }
    }

    function firstRun() {
      if (settings[iframeId]) {
        settings[iframeId].firstRun = false;
      }
    }

    function clearWarningTimeout() {
      if (settings[iframeId]) {
        clearTimeout(settings[iframeId].msgTimeout);
        settings[iframeId].warningTimeout = 0;
      }
    }

    var msg = event.data,
      messageData = {},
      iframeId = null;

    if ('[iFrameResizerChild]Ready' === msg) {
      iFrameReadyMsgReceived();
    } else if (isMessageForUs()) {
      messageData = processMsg();
      iframeId = logId = messageData.id;
      if (settings[iframeId]) {
        settings[iframeId].loaded = true;
      }

      if (!isMessageFromMetaParent() && hasSettings(iframeId)) {
        log(iframeId, 'Received: ' + msg);

        if (checkIFrameExists() && isMessageFromIFrame()) {
          actionMsg();
        }
      }
    } else {
      info(iframeId, 'Ignored: ' + msg);
    }
  }

  function chkCallback(iframeId, funcName, val) {
    var func = null,
      retVal = null;

    if (settings[iframeId]) {
      func = settings[iframeId][funcName];

      if ('function' === typeof func) {
        retVal = func(val);
      } else {
        throw new TypeError(
          funcName + ' on iFrame[' + iframeId + '] is not a function'
        );
      }
    }

    return retVal;
  }

  function removeIframeListeners(iframe) {
    var iframeId = iframe.id;
    delete settings[iframeId];
  }

  function closeIFrame(iframe) {
    var iframeId = iframe.id;
    log(iframeId, 'Removing iFrame: ' + iframeId);

    try {
      // Catch race condition error with React
      if (iframe.parentNode) {
        iframe.parentNode.removeChild(iframe);
      }
    } catch (e) {}

    chkCallback(iframeId, 'closedCallback', iframeId);
    log(iframeId, '--');
    removeIframeListeners(iframe);
  }

  function getPagePosition(iframeId) {
    if (null === pagePosition) {
      pagePosition = {
        x:
          window.pageXOffset !== undefined
            ? window.pageXOffset
            : document.documentElement.scrollLeft,
        y:
          window.pageYOffset !== undefined
            ? window.pageYOffset
            : document.documentElement.scrollTop
      };
      log(
        iframeId,
        'Get page position: ' + pagePosition.x + ',' + pagePosition.y
      );
    }
  }

  function setPagePosition(iframeId) {
    if (null !== pagePosition) {
      window.scrollTo(pagePosition.x, pagePosition.y);
      log(
        iframeId,
        'Set page position: ' + pagePosition.x + ',' + pagePosition.y
      );
      unsetPagePosition();
    }
  }

  function unsetPagePosition() {
    pagePosition = null;
  }

  function resetIFrame(messageData) {
    function reset() {
      setSize(messageData);
      trigger('reset', 'reset', messageData.iframe, messageData.id);
    }

    log(
      messageData.id,
      'Size reset requested by ' +
        ('init' === messageData.type ? 'host page' : 'iFrame')
    );
    getPagePosition(messageData.id);
    syncResize(reset, messageData, 'reset');
  }

  function setSize(messageData) {
    function setDimension(dimension) {
      if (!messageData.id) {
        log('undefined', 'messageData id not set');
        return;
      }
      messageData.iframe.style[dimension] = messageData[dimension] + 'px';
      log(
        messageData.id,
        'IFrame (' +
          iframeId +
          ') ' +
          dimension +
          ' set to ' +
          messageData[dimension] +
          'px'
      );
    }

    function chkZero(dimension) {
      //FireFox sets dimension of hidden iFrames to zero.
      //So if we detect that set up an event to check for
      //when iFrame becomes visible.

      /* istanbul ignore next */ //Not testable in PhantomJS
      if (!hiddenCheckEnabled && '0' === messageData[dimension]) {
        hiddenCheckEnabled = true;
        log(iframeId, 'Hidden iFrame detected, creating visibility listener');
        fixHiddenIFrames();
      }
    }

    function processDimension(dimension) {
      setDimension(dimension);
      chkZero(dimension);
    }

    var iframeId = messageData.iframe.id;

    if (settings[iframeId]) {
      if (settings[iframeId].sizeHeight) {
        processDimension('height');
      }
      if (settings[iframeId].sizeWidth) {
        processDimension('width');
      }
    }
  }

  function syncResize(func, messageData, doNotSync) {
    /* istanbul ignore if */ //Not testable in PhantomJS
    if (doNotSync !== messageData.type && requestAnimationFrame) {
      log(messageData.id, 'Requesting animation frame');
      requestAnimationFrame(func);
    } else {
      func();
    }
  }

  function trigger(calleeMsg, msg, iframe, id, noResponseWarning) {
    function postMessageToIFrame() {
      var target = settings[id] && settings[id].targetOrigin;
      log(
        id,
        '[' +
          calleeMsg +
          '] Sending msg to iframe[' +
          id +
          '] (' +
          msg +
          ') targetOrigin: ' +
          target
      );
      iframe.contentWindow.postMessage(msgId + msg, target);
    }

    function iFrameNotFound() {
      warn(id, '[' + calleeMsg + '] IFrame(' + id + ') not found');
    }

    function chkAndSend() {
      if (
        iframe &&
        'contentWindow' in iframe &&
        null !== iframe.contentWindow
      ) {
        //Null test for PhantomJS
        postMessageToIFrame();
      } else {
        iFrameNotFound();
      }
    }

    function warnOnNoResponse() {
      function warning() {
        if (settings[id] && !settings[id].loaded && !errorShown) {
          errorShown = true;
          warn(
            id,
            'IFrame has not responded within ' +
              settings[id].warningTimeout / 1000 +
              ' seconds. Check iFrameResizer.contentWindow.js has been loaded in iFrame. This message can be ignored if everything is working, or you can set the warningTimeout option to a higher value or zero to suppress this warning.'
          );
        }
      }

      if (
        !!noResponseWarning &&
        settings[id] &&
        !!settings[id].warningTimeout
      ) {
        settings[id].msgTimeout = setTimeout(
          warning,
          settings[id].warningTimeout
        );
      }
    }

    var errorShown = false;

    id = id || iframe.id;

    if (settings[id]) {
      chkAndSend();
      warnOnNoResponse();
    }
  }

  function createOutgoingMsg(iframeId) {
    return (
      iframeId +
      ':' +
      settings[iframeId].bodyMarginV1 +
      ':' +
      settings[iframeId].sizeWidth +
      ':' +
      settings[iframeId].log +
      ':' +
      settings[iframeId].interval +
      ':' +
      settings[iframeId].enablePublicMethods +
      ':' +
      settings[iframeId].autoResize +
      ':' +
      settings[iframeId].bodyMargin +
      ':' +
      settings[iframeId].heightCalculationMethod +
      ':' +
      settings[iframeId].bodyBackground +
      ':' +
      settings[iframeId].bodyPadding +
      ':' +
      settings[iframeId].tolerance +
      ':' +
      settings[iframeId].inPageLinks +
      ':' +
      settings[iframeId].resizeFrom +
      ':' +
      settings[iframeId].widthCalculationMethod
    );
  }

  function setupIFrame(iframe, options) {
    function setLimits() {
      function addStyle(style) {
        if (
          Infinity !== settings[iframeId][style] &&
          0 !== settings[iframeId][style]
        ) {
          iframe.style[style] = settings[iframeId][style] + 'px';
          log(
            iframeId,
            'Set ' + style + ' = ' + settings[iframeId][style] + 'px'
          );
        }
      }

      function chkMinMax(dimension) {
        if (
          settings[iframeId]['min' + dimension] >
          settings[iframeId]['max' + dimension]
        ) {
          throw new Error(
            'Value for min' +
              dimension +
              ' can not be greater than max' +
              dimension
          );
        }
      }

      chkMinMax('Height');
      chkMinMax('Width');

      addStyle('maxHeight');
      addStyle('minHeight');
      addStyle('maxWidth');
      addStyle('minWidth');
    }

    function newId() {
      var id = (options && options.id) || defaults.id + count++;
      if (null !== document.getElementById(id)) {
        id = id + count++;
      }
      return id;
    }

    function ensureHasId(iframeId) {
      logId = iframeId;
      if ('' === iframeId) {
        iframe.id = iframeId = newId();
        logEnabled = (options || {}).log;
        logId = iframeId;
        log(
          iframeId,
          'Added missing iframe ID: ' + iframeId + ' (' + iframe.src + ')'
        );
      }

      return iframeId;
    }

    function setScrolling() {
      log(
        iframeId,
        'IFrame scrolling ' +
          (settings[iframeId] && settings[iframeId].scrolling
            ? 'enabled'
            : 'disabled') +
          ' for ' +
          iframeId
      );
      iframe.style.overflow =
        false === (settings[iframeId] && settings[iframeId].scrolling)
          ? 'hidden'
          : 'auto';
      switch (settings[iframeId] && settings[iframeId].scrolling) {
        case 'omit':
          break;
        case true:
          iframe.scrolling = 'yes';
          break;
        case false:
          iframe.scrolling = 'no';
          break;
        default:
          iframe.scrolling = settings[iframeId]
            ? settings[iframeId].scrolling
            : 'no';
      }
    }

    //The V1 iFrame script expects an int, where as in V2 expects a CSS
    //string value such as '1px 3em', so if we have an int for V2, set V1=V2
    //and then convert V2 to a string PX value.
    function setupBodyMarginValues() {
      if (
        'number' ===
          typeof (settings[iframeId] && settings[iframeId].bodyMargin) ||
        '0' === (settings[iframeId] && settings[iframeId].bodyMargin)
      ) {
        settings[iframeId].bodyMarginV1 = settings[iframeId].bodyMargin;
        settings[iframeId].bodyMargin =
          '' + settings[iframeId].bodyMargin + 'px';
      }
    }

    function checkReset() {
      // Reduce scope of firstRun to function, because IE8's JS execution
      // context stack is borked and this value gets externally
      // changed midway through running this function!!!
      var firstRun = settings[iframeId] && settings[iframeId].firstRun,
        resetRequertMethod =
          settings[iframeId] &&
          settings[iframeId].heightCalculationMethod in resetRequiredMethods;

      if (!firstRun && resetRequertMethod) {
        resetIFrame({ iframe: iframe, height: 0, width: 0, type: 'init' });
      }
    }

    function setupIFrameObject() {
      if (Function.prototype.bind && settings[iframeId]) {
        //Ignore unpolyfilled IE8.
        settings[iframeId].iframe.iFrameResizer = {
          close: closeIFrame.bind(null, settings[iframeId].iframe),

          removeListeners: removeIframeListeners.bind(
            null,
            settings[iframeId].iframe
          ),

          resize: trigger.bind(
            null,
            'Window resize',
            'resize',
            settings[iframeId].iframe
          ),

          moveToAnchor: function(anchor) {
            trigger(
              'Move to anchor',
              'moveToAnchor:' + anchor,
              settings[iframeId].iframe,
              iframeId
            );
          },

          sendMessage: function(message) {
            message = JSON.stringify(message);
            trigger(
              'Send Message',
              'message:' + message,
              settings[iframeId].iframe,
              iframeId
            );
          }
        };
      }
    }

    //We have to call trigger twice, as we can not be sure if all
    //iframes have completed loading when this code runs. The
    //event listener also catches the page changing in the iFrame.
    function init(msg) {
      function iFrameLoaded() {
        trigger('iFrame.onload', msg, iframe, undefined, true);
        checkReset();
      }

      function createDestroyObserver(MutationObserver) {
        if (!iframe.parentNode) {
          return;
        }

        var destroyObserver = new MutationObserver(function (mutations) {
          mutations.forEach(function (mutation) {
            var removedNodes = Array.prototype.slice.call(mutation.removedNodes); // Transform NodeList into an Array
            removedNodes.forEach(function (removedNode) {
              if (removedNode === iframe) {
                closeIFrame(iframe);
              }
            });
          });
        });
        destroyObserver.observe(iframe.parentNode, {
          childList: true
        });
      }

      var MutationObserver = getMutationObserver();
      if (MutationObserver) {
        createDestroyObserver(MutationObserver);
      }

      addEventListener(iframe, 'load', iFrameLoaded);
      trigger('init', msg, iframe, undefined, true);
    }

    function checkOptions(options) {
      if ('object' !== typeof options) {
        throw new TypeError('Options is not an object');
      }
    }

    function copyOptions(options) {
      for (var option in defaults) {
        if (defaults.hasOwnProperty(option)) {
          settings[iframeId][option] = options.hasOwnProperty(option)
            ? options[option]
            : defaults[option];
        }
      }
    }

    function getTargetOrigin(remoteHost) {
      return '' === remoteHost || 'file://' === remoteHost ? '*' : remoteHost;
    }

    function processOptions(options) {
      options = options || {};
      settings[iframeId] = {
        firstRun: true,
        iframe: iframe,
        remoteHost: iframe.src
          .split('/')
          .slice(0, 3)
          .join('/')
      };

      checkOptions(options);
      copyOptions(options);

      if (settings[iframeId]) {
        settings[iframeId].targetOrigin =
          true === settings[iframeId].checkOrigin
            ? getTargetOrigin(settings[iframeId].remoteHost)
            : '*';
      }
    }

    function beenHere() {
      return iframeId in settings && 'iFrameResizer' in iframe;
    }

    var iframeId = ensureHasId(iframe.id);

    if (!beenHere()) {
      processOptions(options);
      setScrolling();
      setLimits();
      setupBodyMarginValues();
      init(createOutgoingMsg(iframeId));
      setupIFrameObject();
    } else {
      warn(iframeId, 'Ignored iFrame, already setup.');
    }
  }

  function debouce(fn, time) {
    if (null === timer) {
      timer = setTimeout(function() {
        timer = null;
        fn();
      }, time);
    }
  }

  var frameTimer = {};
  function debounceFrameEvents(fn, time, frameId) {
    if (!frameTimer[frameId]) {
      frameTimer[frameId] = setTimeout(function() {
        frameTimer[frameId] = null;
        fn();
      }, time);
    }
  } //Not testable in PhantomJS

  /* istanbul ignore next */ function fixHiddenIFrames() {
    function checkIFrames() {
      function checkIFrame(settingId) {
        function chkDimension(dimension) {
          return (
            '0px' ===
            (settings[settingId] && settings[settingId].iframe.style[dimension])
          );
        }

        function isVisible(el) {
          return null !== el.offsetParent;
        }

        if (
          settings[settingId] &&
          isVisible(settings[settingId].iframe) &&
          (chkDimension('height') || chkDimension('width'))
        ) {
          trigger(
            'Visibility change',
            'resize',
            settings[settingId].iframe,
            settingId
          );
        }
      }

      for (var settingId in settings) {
        checkIFrame(settingId);
      }
    }

    function mutationObserved(mutations) {
      log(
        'window',
        'Mutation observed: ' + mutations[0].target + ' ' + mutations[0].type
      );
      debouce(checkIFrames, 16);
    }

    function createMutationObserver() {
      var target = document.querySelector('body'),
        config = {
          attributes: true,
          attributeOldValue: false,
          characterData: true,
          characterDataOldValue: false,
          childList: true,
          subtree: true
        },
        observer = new MutationObserver(mutationObserved);

      observer.observe(target, config);
    }

    var MutationObserver = getMutationObserver();
    if (MutationObserver) {
      createMutationObserver();
    }
  }

  function resizeIFrames(event) {
    function resize() {
      sendTriggerMsg('Window ' + event, 'resize');
    }

    log('window', 'Trigger event: ' + event);
    debouce(resize, 16);
  } //Not testable in PhantomJS

  /* istanbul ignore next */ function tabVisible() {
    function resize() {
      sendTriggerMsg('Tab Visable', 'resize');
    }

    if ('hidden' !== document.visibilityState) {
      log('document', 'Trigger event: Visiblity change');
      debouce(resize, 16);
    }
  }

  function sendTriggerMsg(eventName, event) {
    function isIFrameResizeEnabled(iframeId) {
      return (
        settings[iframeId] &&
        'parent' === settings[iframeId].resizeFrom &&
        settings[iframeId].autoResize &&
        !settings[iframeId].firstRun
      );
    }

    for (var iframeId in settings) {
      if (isIFrameResizeEnabled(iframeId)) {
        trigger(eventName, event, document.getElementById(iframeId), iframeId);
      }
    }
  }

  function setupEventListeners() {
    addEventListener(window, 'message', iFrameListener);

    addEventListener(window, 'resize', function() {
      resizeIFrames('resize');
    });

    addEventListener(document, 'visibilitychange', tabVisible);
    addEventListener(document, '-webkit-visibilitychange', tabVisible); //Andriod 4.4
    addEventListener(window, 'focusin', function() {
      resizeIFrames('focus');
    }); //IE8-9
    addEventListener(window, 'focus', function() {
      resizeIFrames('focus');
    });
  }

  function factory() {
    function init(options, element) {
      function chkType() {
        if (!element.tagName) {
          throw new TypeError('Object is not a valid DOM element');
        } else if ('IFRAME' !== element.tagName.toUpperCase()) {
          throw new TypeError(
            'Expected <IFRAME> tag, found <' + element.tagName + '>'
          );
        }
      }

      if (element) {
        chkType();
        setupIFrame(element, options);
        iFrames.push(element);
      }
    }

    function warnDeprecatedOptions(options) {
      if (options && options.enablePublicMethods) {
        warn(
          'enablePublicMethods option has been removed, public methods are now always available in the iFrame'
        );
      }
    }

    var iFrames;

    setupRequestAnimationFrame();
    setupEventListeners();

    return function iFrameResizeF(options, target) {
      iFrames = []; //Only return iFrames past in on this call

      warnDeprecatedOptions(options);

      switch (typeof target) {
        case 'undefined':
        case 'string':
          Array.prototype.forEach.call(
            document.querySelectorAll(target || 'iframe'),
            init.bind(undefined, options)
          );
          break;
        case 'object':
          init(options, target);
          break;
        default:
          throw new TypeError('Unexpected data type (' + typeof target + ')');
      }

      return iFrames;
    };
  }

  function createJQueryPublicMethod($) {
    if (!$.fn) {
      info('', 'Unable to bind to jQuery, it is not fully loaded.');
    } else if (!$.fn.iFrameResize) {
      $.fn.iFrameResize = function $iFrameResizeF(options) {
        function init(index, element) {
          setupIFrame(element, options);
        }

        return this.filter('iframe')
          .each(init)
          .end();
      };
    }
  }

  if (window.jQuery) {
    createJQueryPublicMethod(window.jQuery);
  }

  if (true) {
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
  window.iFrameResize = window.iFrameResize || factory();
})();


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
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
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!******************************************************************!*\
  !*** ./platform/plugins/comment/resources/assets/js/comments.js ***!
  \******************************************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _util_scrollTo__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./util/scrollTo */ "./platform/plugins/comment/resources/assets/js/util/scrollTo.js");
/* harmony import */ var _util_hashParam__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./util/hashParam */ "./platform/plugins/comment/resources/assets/js/util/hashParam.js");
/* harmony import */ var _util_queryString__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./util/queryString */ "./platform/plugins/comment/resources/assets/js/util/queryString.js");
/* harmony import */ var iframe_resizer_js_iframeResizer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! iframe-resizer/js/iframeResizer */ "./node_modules/iframe-resizer/js/iframeResizer.js");
/* harmony import */ var iframe_resizer_js_iframeResizer__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(iframe_resizer_js_iframeResizer__WEBPACK_IMPORTED_MODULE_3__);
var _excluded = ["el"];

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) { symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); } keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _objectWithoutProperties(source, excluded) { if (source == null) return {}; var target = _objectWithoutPropertiesLoose(source, excluded); var key, i; if (Object.getOwnPropertySymbols) { var sourceSymbolKeys = Object.getOwnPropertySymbols(source); for (i = 0; i < sourceSymbolKeys.length; i++) { key = sourceSymbolKeys[i]; if (excluded.indexOf(key) >= 0) continue; if (!Object.prototype.propertyIsEnumerable.call(source, key)) continue; target[key] = source[key]; } } return target; }

function _objectWithoutPropertiesLoose(source, excluded) { if (source == null) return {}; var target = {}; var sourceKeys = Object.keys(source); var key, i; for (i = 0; i < sourceKeys.length; i++) { key = sourceKeys[i]; if (excluded.indexOf(key) >= 0) continue; target[key] = source[key]; } return target; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }






var Comments = /*#__PURE__*/function () {
  /**
   * @param {Object} options
   */
  function Comments(_ref) {
    var el = _ref.el,
        options = _objectWithoutProperties(_ref, _excluded);

    _classCallCheck(this, Comments);

    this.el = el;
    var defaults = {
      url: '/comments'
    };
    this.options = _objectSpread(_objectSpread({}, defaults), options);

    if (typeof this.el === 'string') {
      this.el = document.querySelector(this.el);
    }

    if (!this.el) {
      throw new Error('[comments] Element not found.');
    }

    this.el.innerHTML = '';
    this.initSpinner();
    this.initIframe();
  }
  /**
   * Initialize the spinner.
   */


  _createClass(Comments, [{
    key: "initSpinner",
    value: function initSpinner() {
      this.spinner = document.createElement('div');
      this.spinner.classList.add('comments__spinner');
      this.el.appendChild(this.spinner);
    }
    /**
     * Initialize the iframe.
     */

  }, {
    key: "initIframe",
    value: function initIframe() {
      var _this = this;

      this.iframe = document.createElement('iframe');
      this.iframe.scrolling = 'no';
      this.iframe.src = this.buildUrl();
      this.iframe.classList.add('comments__iframe');

      this.iframe.onload = function () {
        _this.spinner.style.display = 'none';
        _this.iframe.style.opacity = 1;
      };

      this.el.appendChild(this.iframe);
      iframe_resizer_js_iframeResizer__WEBPACK_IMPORTED_MODULE_3___default()({
        messageCallback: function messageCallback(_ref2) {
          var iframe = _ref2.iframe,
              _ref2$message = _ref2.message,
              type = _ref2$message.type,
              position = _ref2$message.position;

          if (type === 'scroll') {
            var rect = iframe.getBoundingClientRect();
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            setTimeout(function () {
              (0,_util_scrollTo__WEBPACK_IMPORTED_MODULE_0__.default)(position + rect.top + scrollTop);
            }, 50);
          }
        }
      }, this.iframe);
    }
    /**
     * Build the url.
     *
     * @return {String}
     */

  }, {
    key: "buildUrl",
    value: function buildUrl() {
      var o = this.options;
      var data = o.data ? typeof o.data === 'function' ? o.data() : o.data : {};
      var origin = location.protocol + '//' + location.hostname + (location.port ? ':' + location.port : '');
      var permalink = o.permalink || (location.origin || origin) + location.pathname + location.search;

      var params = _objectSpread(_objectSpread({}, data), {}, {
        permalink: permalink,
        order: o.order,
        page_id: o.pageId,
        per_page: o.perPage,
        page: (0,_util_hashParam__WEBPACK_IMPORTED_MODULE_1__.default)('page'),
        target: (0,_util_hashParam__WEBPACK_IMPORTED_MODULE_1__.default)('comment'),
        commentable_id: o.commentableId,
        commentable_type: o.commentableType
      });

      return o.url + (o.url.indexOf('?') > -1 ? '&' : '?') + (0,_util_queryString__WEBPACK_IMPORTED_MODULE_2__.default)(params);
    }
  }]);

  return Comments;
}();

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Comments);
})();

/******/ 	return __webpack_exports__;
/******/ })()
;
});