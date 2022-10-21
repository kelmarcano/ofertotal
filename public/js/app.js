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

/***/ "./public/css/app.css":
/*!****************************!*\
  !*** ./public/css/app.css ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/src/index.js):\nError: PostCSS plugin tailwindcss requires PostCSS 8.\nMigration guide for end-users:\nhttps://github.com/postcss/postcss/wiki/PostCSS-8-for-end-users\n    at Processor.normalize (C:\\wamp64\\www\\tcomercia\\node_modules\\postcss-loader\\node_modules\\postcss\\lib\\processor.js:153:15)\n    at new Processor (C:\\wamp64\\www\\tcomercia\\node_modules\\postcss-loader\\node_modules\\postcss\\lib\\processor.js:56:25)\n    at postcss (C:\\wamp64\\www\\tcomercia\\node_modules\\postcss-loader\\node_modules\\postcss\\lib\\postcss.js:55:10)\n    at C:\\wamp64\\www\\tcomercia\\node_modules\\postcss-loader\\src\\index.js:140:12\n    at processTicksAndRejections (internal/process/task_queues.js:93:5)\n    at C:\\wamp64\\www\\tcomercia\\node_modules\\webpack\\lib\\NormalModule.js:316:20\n    at C:\\wamp64\\www\\tcomercia\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at C:\\wamp64\\www\\tcomercia\\node_modules\\loader-runner\\lib\\LoaderRunner.js:233:18\n    at context.callback (C:\\wamp64\\www\\tcomercia\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at C:\\wamp64\\www\\tcomercia\\node_modules\\postcss-loader\\src\\index.js:208:9\n    at processTicksAndRejections (internal/process/task_queues.js:93:5)");

/***/ }),

/***/ "./public/js/app.js":
/*!**************************!*\
  !*** ./public/js/app.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/******/
(function (modules) {
  // webpackBootstrap

  /******/
  // The module cache

  /******/
  var installedModules = {};
  /******/

  /******/
  // The require function

  /******/

  function __webpack_require__(moduleId) {
    /******/

    /******/
    // Check if module is in cache

    /******/
    if (installedModules[moduleId]) {
      /******/
      return installedModules[moduleId].exports;
      /******/
    }
    /******/
    // Create a new module (and put it into the cache)

    /******/


    var module = installedModules[moduleId] = {
      /******/
      i: moduleId,

      /******/
      l: false,

      /******/
      exports: {}
      /******/

    };
    /******/

    /******/
    // Execute the module function

    /******/

    modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
    /******/

    /******/
    // Flag the module as loaded

    /******/

    module.l = true;
    /******/

    /******/
    // Return the exports of the module

    /******/

    return module.exports;
    /******/
  }
  /******/

  /******/

  /******/
  // expose the modules object (__webpack_modules__)

  /******/


  __webpack_require__.m = modules;
  /******/

  /******/
  // expose the module cache

  /******/

  __webpack_require__.c = installedModules;
  /******/

  /******/
  // define getter function for harmony exports

  /******/

  __webpack_require__.d = function (exports, name, getter) {
    /******/
    if (!__webpack_require__.o(exports, name)) {
      /******/
      Object.defineProperty(exports, name, {
        enumerable: true,
        get: getter
      });
      /******/
    }
    /******/

  };
  /******/

  /******/
  // define __esModule on exports

  /******/


  __webpack_require__.r = function (exports) {
    /******/
    if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
      /******/
      Object.defineProperty(exports, Symbol.toStringTag, {
        value: 'Module'
      });
      /******/
    }
    /******/


    Object.defineProperty(exports, '__esModule', {
      value: true
    });
    /******/
  };
  /******/

  /******/
  // create a fake namespace object

  /******/
  // mode & 1: value is a module id, require it

  /******/
  // mode & 2: merge all properties of value into the ns

  /******/
  // mode & 4: return value when already ns object

  /******/
  // mode & 8|1: behave like require

  /******/


  __webpack_require__.t = function (value, mode) {
    /******/
    if (mode & 1) value = __webpack_require__(value);
    /******/

    if (mode & 8) return value;
    /******/

    if (mode & 4 && _typeof(value) === 'object' && value && value.__esModule) return value;
    /******/

    var ns = Object.create(null);
    /******/

    __webpack_require__.r(ns);
    /******/


    Object.defineProperty(ns, 'default', {
      enumerable: true,
      value: value
    });
    /******/

    if (mode & 2 && typeof value != 'string') for (var key in value) {
      __webpack_require__.d(ns, key, function (key) {
        return value[key];
      }.bind(null, key));
    }
    /******/

    return ns;
    /******/
  };
  /******/

  /******/
  // getDefaultExport function for compatibility with non-harmony modules

  /******/


  __webpack_require__.n = function (module) {
    /******/
    var getter = module && module.__esModule ?
    /******/
    function getDefault() {
      return module['default'];
    } :
    /******/
    function getModuleExports() {
      return module;
    };
    /******/

    __webpack_require__.d(getter, 'a', getter);
    /******/


    return getter;
    /******/
  };
  /******/

  /******/
  // Object.prototype.hasOwnProperty.call

  /******/


  __webpack_require__.o = function (object, property) {
    return Object.prototype.hasOwnProperty.call(object, property);
  };
  /******/

  /******/
  // __webpack_public_path__

  /******/


  __webpack_require__.p = "/";
  /******/

  /******/

  /******/
  // Load entry module and return exports

  /******/

  return __webpack_require__(__webpack_require__.s = 0);
  /******/
})({
  /***/
  "./resources/css/app.css": function resourcesCssAppCss(module, exports) {
    throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/src/index.js):\nError: PostCSS plugin tailwindcss requires PostCSS 8.\nMigration guide for end-users:\nhttps://github.com/postcss/postcss/wiki/PostCSS-8-for-end-users\n    at Processor.normalize (C:\\wamp64\\www\\tcomercia\\node_modules\\postcss-loader\\node_modules\\postcss\\lib\\processor.js:153:15)\n    at new Processor (C:\\wamp64\\www\\tcomercia\\node_modules\\postcss-loader\\node_modules\\postcss\\lib\\processor.js:56:25)\n    at postcss (C:\\wamp64\\www\\tcomercia\\node_modules\\postcss-loader\\node_modules\\postcss\\lib\\postcss.js:55:10)\n    at C:\\wamp64\\www\\tcomercia\\node_modules\\postcss-loader\\src\\index.js:140:12\n    at processTicksAndRejections (internal/process/task_queues.js:93:5)\n    at C:\\wamp64\\www\\tcomercia\\node_modules\\webpack\\lib\\NormalModule.js:316:20\n    at C:\\wamp64\\www\\tcomercia\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at C:\\wamp64\\www\\tcomercia\\node_modules\\loader-runner\\lib\\LoaderRunner.js:233:18\n    at context.callback (C:\\wamp64\\www\\tcomercia\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at C:\\wamp64\\www\\tcomercia\\node_modules\\postcss-loader\\src\\index.js:208:9\n    at processTicksAndRejections (internal/process/task_queues.js:93:5)");
    /***/
  },

  /***/
  "./resources/js/app.js": function resourcesJsAppJs(module, exports) {
    /***/
  },

  /***/
  0: function _(module, exports, __webpack_require__) {
    __webpack_require__(
    /*! C:\wamp64\www\tcomercia\resources\js\app.js */
    "./resources/js/app.js");

    module.exports = __webpack_require__(
    /*! C:\wamp64\www\tcomercia\resources\css\app.css */
    "./resources/css/app.css");
    /***/
  }
  /******/

});

/***/ }),

/***/ 0:
/*!*****************************************************!*\
  !*** multi ./public/js/app.js ./public/css/app.css ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\wamp64\www\tcomercia\public\js\app.js */"./public/js/app.js");
module.exports = __webpack_require__(/*! C:\wamp64\www\tcomercia\public\css\app.css */"./public/css/app.css");


/***/ })

/******/ });