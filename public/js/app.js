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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\laragon\\www\\project_peter\\resources\\js\\app.js: Unexpected token (154:0)\n\n\u001b[0m \u001b[90m 152 |\u001b[39m $(document)\u001b[33m.\u001b[39mready(\u001b[36mfunction\u001b[39m () {\u001b[0m\n\u001b[0m \u001b[90m 153 |\u001b[39m     \u001b[36mthis\u001b[39m\u001b[33m.\u001b[39mloading \u001b[33m=\u001b[39m \u001b[36mtrue\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 154 |\u001b[39m \u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<\u001b[39m \u001b[33mHEAD\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m     |\u001b[39m \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 155 |\u001b[39m     axios\u001b[33m.\u001b[39m\u001b[36mget\u001b[39m(\u001b[32m\"/admin\"\u001b[39m)\u001b[33m.\u001b[39mthen(\u001b[36mfunction\u001b[39m (resp) {\u001b[0m\n\u001b[0m \u001b[90m 156 |\u001b[39m \u001b[33m===\u001b[39m\u001b[33m===\u001b[39m\u001b[33m=\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 157 |\u001b[39m     axios\u001b[33m.\u001b[39m\u001b[36mget\u001b[39m(\u001b[32m\"/admin/api/users\"\u001b[39m)\u001b[33m.\u001b[39mthen(\u001b[36mfunction\u001b[39m (resp) {\u001b[0m\n    at instantiate (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:72:32)\n    at constructor (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:359:12)\n    at Parser.raise (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:3339:19)\n    at Parser.unexpected (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:3377:16)\n    at Parser.parseExprAtom (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:13123:22)\n    at Parser.parseExprSubscripts (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12648:23)\n    at Parser.parseUpdate (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12627:21)\n    at Parser.parseMaybeUnary (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12598:23)\n    at Parser.parseMaybeUnaryOrPrivate (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12392:61)\n    at Parser.parseExprOps (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12399:23)\n    at Parser.parseMaybeConditional (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12369:23)\n    at Parser.parseMaybeAssign (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12321:21)\n    at Parser.parseExpressionBase (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12257:23)\n    at C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12251:39\n    at Parser.allowInAnd (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:14346:16)\n    at Parser.parseExpression (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12251:17)\n    at Parser.parseStatementContent (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:14786:23)\n    at Parser.parseStatement (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:14643:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:15286:25)\n    at Parser.parseBlockBody (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:15277:10)\n    at Parser.parseBlock (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:15261:10)\n    at Parser.parseFunctionBody (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:13951:24)\n    at Parser.parseFunctionBodyAndFinish (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:13935:10)\n    at C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:15436:12\n    at Parser.withSmartMixTopicForbiddingContext (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:14323:14)\n    at Parser.parseFunction (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:15435:10)\n    at Parser.parseFunctionOrFunctionSent (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:13280:17)\n    at Parser.parseExprAtom (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:13002:21)\n    at Parser.parseExprSubscripts (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12648:23)\n    at Parser.parseUpdate (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12627:21)\n    at Parser.parseMaybeUnary (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12598:23)\n    at Parser.parseMaybeUnaryOrPrivate (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12392:61)\n    at Parser.parseExprOps (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12399:23)\n    at Parser.parseMaybeConditional (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12369:23)\n    at Parser.parseMaybeAssign (C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12321:21)\n    at C:\\laragon\\www\\project_peter\\node_modules\\@babel\\parser\\lib\\index.js:12279:39");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\laragon\www\project_peter\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\laragon\www\project_peter\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });