/******/ (function(modules) { // webpackBootstrap
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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/bootstrap-menu-hover.js":
/*!****************************************!*\
  !*** ./src/js/bootstrap-menu-hover.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("(function( $ ){\r\n    $(\".btn-group, .dropdown\").hover(\r\n        function () {\r\n            $('>.dropdown-menu', this).stop(true, true).fadeIn(\"fast\");\r\n            $(this).addClass('open');\r\n        },\r\n        function () {\r\n            $('>.dropdown-menu', this).stop(true, true).fadeOut(\"fast\");\r\n            $(this).removeClass('open');\r\n        }\r\n    );\r\n})(jQuery);\n\n//# sourceURL=webpack:///./src/js/bootstrap-menu-hover.js?");

/***/ }),

/***/ "./src/js/preloader.js":
/*!*****************************!*\
  !*** ./src/js/preloader.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("(function( $ ){\r\n    $(window).on('load', () => {\r\n        $(\"#loader-wrapper\").fadeOut('slow');\r\n    });\r\n})(jQuery);\n\n//# sourceURL=webpack:///./src/js/preloader.js?");

/***/ }),

/***/ "./src/js/script.js":
/*!**************************!*\
  !*** ./src/js/script.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _preloader__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./preloader */ \"./src/js/preloader.js\");\n/* harmony import */ var _preloader__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_preloader__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _bootstrap_menu_hover__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./bootstrap-menu-hover */ \"./src/js/bootstrap-menu-hover.js\");\n/* harmony import */ var _bootstrap_menu_hover__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_bootstrap_menu_hover__WEBPACK_IMPORTED_MODULE_1__);\n\r\n\r\n(function( $ ){\r\n    \r\n})(jQuery);\r\n// $(\".nav-link.dropdown-toggle\").hover( function () {\r\n//     // Open up the dropdown\r\n//     $(this).removeAttr('data-toggle'); // remove the data-toggle attribute so we can click and follow link\r\n//     $(this).parent().addClass('show'); // add the class show to the li parent\r\n//     $(this).next().addClass('show'); // add the class show to the dropdown div sibling\r\n// }, function () {\r\n//     // on mouseout check to see if hovering over the dropdown or the link still\r\n//     var isDropdownHovered = $(this).next().filter(\":hover\").length; // check the dropdown for hover - returns true of false\r\n//     var isThisHovered = $(this).filter(\":hover\").length;  // check the top level item for hover\r\n//     if(isDropdownHovered || isThisHovered) {\r\n//         // still hovering over the link or the dropdown\r\n//     } else {\r\n//         // no longer hovering over either - lets remove the 'show' classes\r\n//         $(this).attr('data-toggle', 'dropdown'); // put back the data-toggle attr\r\n//         $(this).parent().removeClass('show');\r\n//         $(this).next().removeClass('show');\r\n//     }\r\n// });\r\n// // Check the dropdown on hover\r\n// $(\".dropdown-menu\").hover( function () {\r\n// }, function() {\r\n//     var isDropdownHovered = $(this).prev().filter(\":hover\").length; // check the dropdown for hover - returns true of false\r\n//     var isThisHovered= $(this).filter(\":hover\").length;  // check the top level item for hover\r\n//     if(isDropdownHovered || isThisHovered) {\r\n//         // do nothing - hovering over the dropdown of the top level link\r\n//     } else {\r\n//         // get rid of the classes showing it\r\n//         $(this).parent().removeClass('show');\r\n//         $(this).removeClass('show');\r\n//     }\r\n// });\r\n\r\n\r\n\n\n//# sourceURL=webpack:///./src/js/script.js?");

/***/ }),

/***/ "./src/scss/main.scss":
/*!****************************!*\
  !*** ./src/scss/main.scss ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./src/scss/main.scss?");

/***/ }),

/***/ 0:
/*!*****************************************************!*\
  !*** multi ./src/js/script.js ./src/scss/main.scss ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! ./src/js/script.js */\"./src/js/script.js\");\nmodule.exports = __webpack_require__(/*! ./src/scss/main.scss */\"./src/scss/main.scss\");\n\n\n//# sourceURL=webpack:///multi_./src/js/script.js_./src/scss/main.scss?");

/***/ })

/******/ });