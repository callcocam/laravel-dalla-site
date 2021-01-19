(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["edit0~edit10~edit12~edit16~edit18~edit20~edit22~edit24~edit28~edit30~edit32~edit4~edit6~edit8"],{

/***/ "./packages/resources/js/store/modules/user-management/moduleUserManagement.js":
/*!*************************************************************************************!*\
  !*** ./packages/resources/js/store/modules/user-management/moduleUserManagement.js ***!
  \*************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _moduleUserManagementState_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./moduleUserManagementState.js */ "./packages/resources/js/store/modules/user-management/moduleUserManagementState.js");
/* harmony import */ var _moduleUserManagementMutations_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./moduleUserManagementMutations.js */ "./packages/resources/js/store/modules/user-management/moduleUserManagementMutations.js");
/* harmony import */ var _moduleUserManagementActions_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./moduleUserManagementActions.js */ "./packages/resources/js/store/modules/user-management/moduleUserManagementActions.js");
/* harmony import */ var _moduleUserManagementGetters_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./moduleUserManagementGetters.js */ "./packages/resources/js/store/modules/user-management/moduleUserManagementGetters.js");
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */




/* harmony default export */ __webpack_exports__["default"] = ({
  isRegistered: false,
  namespaced: true,
  state: _moduleUserManagementState_js__WEBPACK_IMPORTED_MODULE_0__["default"],
  mutations: _moduleUserManagementMutations_js__WEBPACK_IMPORTED_MODULE_1__["default"],
  actions: _moduleUserManagementActions_js__WEBPACK_IMPORTED_MODULE_2__["default"],
  getters: _moduleUserManagementGetters_js__WEBPACK_IMPORTED_MODULE_3__["default"]
});

/***/ }),

/***/ "./packages/resources/js/store/modules/user-management/moduleUserManagementActions.js":
/*!********************************************************************************************!*\
  !*** ./packages/resources/js/store/modules/user-management/moduleUserManagementActions.js ***!
  \********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _utilities_axios__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/utilities/axios */ "./packages/resources/js/utilities/axios/index.js");


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

/* harmony default export */ __webpack_exports__["default"] = ({
  all: function all(context, payload) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
      var url, params, response;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              context.dispatch("clear_data");
              url = payload.url, params = payload.params;
              _context.next = 4;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"].get(url, {
                params: params
              });

            case 4:
              response = _context.sent;
              return _context.abrupt("return", context.dispatch("set_data", response.data));

            case 6:
            case "end":
              return _context.stop();
          }
        }
      }, _callee);
    }))();
  },
  find: function find(context, payload) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
      var url, params, response;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
        while (1) {
          switch (_context2.prev = _context2.next) {
            case 0:
              context.dispatch("clear_data");
              url = payload.url, params = payload.params;
              _context2.next = 4;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"].get(url, {
                params: params
              });

            case 4:
              response = _context2.sent;
              context.dispatch("set_data", response.data);
              return _context2.abrupt("return", response);

            case 7:
            case "end":
              return _context2.stop();
          }
        }
      }, _callee2);
    }))();
  },
  show: function show(context, payload) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3() {
      var url, params, response;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
        while (1) {
          switch (_context3.prev = _context3.next) {
            case 0:
              context.dispatch("clear_data");
              url = payload.url, params = payload.params;
              _context3.next = 4;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"].get(url, {
                params: params
              });

            case 4:
              response = _context3.sent;
              context.dispatch("set_data", response.data);
              return _context3.abrupt("return", response);

            case 7:
            case "end":
              return _context3.stop();
          }
        }
      }, _callee3);
    }))();
  },
  removeRecord: function removeRecord(_ref, payload) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4() {
      var commit, url, params, id, response;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
        while (1) {
          switch (_context4.prev = _context4.next) {
            case 0:
              commit = _ref.commit;
              url = payload.url, params = payload.params, id = payload.id;
              _context4.next = 4;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"]["delete"](url.replace("_id_", id), {
                params: params
              });

            case 4:
              response = _context4.sent;
              return _context4.abrupt("return", response);

            case 6:
            case "end":
              return _context4.stop();
          }
        }
      }, _callee4);
    }))();
  },
  fetchUser: function fetchUser(_ref2, payload) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee5() {
      var commit, url, params, _yield$axios$get, data;

      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee5$(_context5) {
        while (1) {
          switch (_context5.prev = _context5.next) {
            case 0:
              commit = _ref2.commit;
              commit("SET_USER", null);
              url = payload.url, params = payload.params;
              _context5.next = 5;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"].get(url, {
                params: params
              });

            case 5:
              _yield$axios$get = _context5.sent;
              data = _yield$axios$get.data;
              commit("SET_USER", data.data);
              return _context5.abrupt("return", data);

            case 9:
            case "end":
              return _context5.stop();
          }
        }
      }, _callee5);
    }))();
  },
  fetchCompany: function fetchCompany(_ref3, payload) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee6() {
      var commit, url, params, _yield$axios$get2, data;

      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee6$(_context6) {
        while (1) {
          switch (_context6.prev = _context6.next) {
            case 0:
              commit = _ref3.commit;
              commit("SET_COMPANY", null);
              commit("SET_TENANT", null);
              url = payload.url, params = payload.params;
              _context6.next = 6;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"].get(url, {
                params: params
              });

            case 6:
              _yield$axios$get2 = _context6.sent;
              data = _yield$axios$get2.data;
              commit("SET_COMPANY", data.data.companies.value);
              commit("SET_TENANT", data.data);
              commit("SET_ACTIONS", data.data);

            case 11:
            case "end":
              return _context6.stop();
          }
        }
      }, _callee6);
    }))();
  },
  fetchTranslations: function fetchTranslations(_ref4, payload) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee7() {
      var commit, url, params, data;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee7$(_context7) {
        while (1) {
          switch (_context7.prev = _context7.next) {
            case 0:
              commit = _ref4.commit;
              url = payload.url, params = payload.params;
              _context7.next = 4;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"].get(url, {
                params: params
              });

            case 4:
              data = _context7.sent;
              commit("SET_ROWS", data);
              return _context7.abrupt("return", data);

            case 7:
            case "end":
              return _context7.stop();
          }
        }
      }, _callee7);
    }))();
  },
  fetchSearch: function fetchSearch(_ref5) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee8() {
      var commit, _yield$axios$get3, data;

      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee8$(_context8) {
        while (1) {
          switch (_context8.prev = _context8.next) {
            case 0:
              commit = _ref5.commit;
              _context8.next = 3;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"].get("/api/v1/search-route");

            case 3:
              _yield$axios$get3 = _context8.sent;
              data = _yield$axios$get3.data;
              commit("SET_NAVBAR_SEARCH_AND_PINLIST", data);
              return _context8.abrupt("return", data);

            case 7:
            case "end":
              return _context8.stop();
          }
        }
      }, _callee8);
    }))();
  },
  fetchAccessToken: function fetchAccessToken(_ref6) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee9() {
      var commit, _yield$axios$post, data;

      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee9$(_context9) {
        while (1) {
          switch (_context9.prev = _context9.next) {
            case 0:
              commit = _ref6.commit;
              _context9.next = 3;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"].post("/api/v1/refresh");

            case 3:
              _yield$axios$post = _context9.sent;
              data = _yield$axios$post.data;
              return _context9.abrupt("return", data);

            case 6:
            case "end":
              return _context9.stop();
          }
        }
      }, _callee9);
    }))();
  },
  clear_data: function clear_data(_ref7) {
    var commit = _ref7.commit;
    commit("SET_ROWS", null);
    commit("SET_QUERY", null);
    commit("SET_ACTIONS", null);
    commit("SET_META", []);
    commit("SET_OPTIONS", null);
    commit("SET_HEADERS", null);
    commit("SET_NAVIGATIONS", null);
  },
  set_data: function set_data(_ref8, response) {
    var commit = _ref8.commit;
    var actions = response.actions,
        options = response.options,
        navigations = response.navigations,
        data = response.data,
        filters = response.filters,
        meta = response.meta,
        headers = response.headers;
    commit("SET_ROWS", data);
    commit("SET_META", meta);
    commit("SET_ACTIONS", actions);
    commit("SET_HEADERS", headers);
    commit("SET_NAVIGATIONS", navigations);
    commit("SET_FILTERS", filters);
    commit("SET_OPTIONS", options);
    return meta;
  }
});

/***/ }),

/***/ "./packages/resources/js/store/modules/user-management/moduleUserManagementGetters.js":
/*!********************************************************************************************!*\
  !*** ./packages/resources/js/store/modules/user-management/moduleUserManagementGetters.js ***!
  \********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
/* harmony default export */ __webpack_exports__["default"] = (_defineProperty({
  getErrors: function getErrors(state) {
    return state.errors;
  },
  getAll: function getAll(state) {
    return state.rows;
  },
  getFind: function getFind(state) {
    return state.rows;
  },
  getMeta: function getMeta(state) {
    return state.meta;
  },
  getHeaders: function getHeaders(state) {
    return state.headers;
  },
  getNavigations: function getNavigations(state) {
    return state.navigations;
  },
  getActions: function getActions(state) {
    return state.actions;
  },
  getFilters: function getFilters(state) {
    return state.filters;
  },
  getOptions: function getOptions(state) {
    return state.options;
  },
  getCards: function getCards(state) {
    return state.rows.cards;
  },
  getQuery: function getQuery(state) {
    return state.rows.query;
  },
  getResults: function getResults(state) {
    return state.results;
  },
  getCompany: function getCompany(state) {
    return state.company;
  },
  getTenant: function getTenant(state) {
    return state.tenant;
  },
  getUser: function getUser(state) {
    return state.user;
  }
}, "getActions", function getActions(state) {
  return state.actions;
}));

/***/ }),

/***/ "./packages/resources/js/store/modules/user-management/moduleUserManagementMutations.js":
/*!**********************************************************************************************!*\
  !*** ./packages/resources/js/store/modules/user-management/moduleUserManagementMutations.js ***!
  \**********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
/* harmony default export */ __webpack_exports__["default"] = ({
  SET_ROWS: function SET_ROWS(state, payload) {
    state.rows = payload;
  },
  SET_FIND: function SET_FIND(state, payload) {
    state.rows = payload;
  },
  SET_QUERY: function SET_QUERY(state, payload) {
    state.query = payload;
  },
  SET_HEADERS: function SET_HEADERS(state, payload) {
    state.headers = payload;
  },
  SET_FILTERS: function SET_FILTERS(state, payload) {
    state.filters = payload;
  },
  SET_OPTIONS: function SET_OPTIONS(state, payload) {
    state.options = payload;
  },
  SET_RESULTS: function SET_RESULTS(state, payload) {
    state.results = payload;
  },
  SET_META: function SET_META(state, payload) {
    state.meta = payload;
  },
  SET_NAVIGATIONS: function SET_NAVIGATIONS(state, payload) {
    state.navigations = payload;
  },
  SET_ERROR: function SET_ERROR(state, payload) {
    state.errors = payload;
  },
  SET_COMPANY: function SET_COMPANY(state, payload) {
    state.company = payload;
  },
  SET_TENANT: function SET_TENANT(state, payload) {
    state.tenant = payload;
  },
  SET_USER: function SET_USER(state, payload) {
    state.user = payload;
  },
  SET_ACTIONS: function SET_ACTIONS(state, payload) {
    state.actions = payload;
  }
});

/***/ }),

/***/ "./packages/resources/js/store/modules/user-management/moduleUserManagementState.js":
/*!******************************************************************************************!*\
  !*** ./packages/resources/js/store/modules/user-management/moduleUserManagementState.js ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
/* harmony default export */ __webpack_exports__["default"] = ({
  errors: null,
  company: null,
  tenant: null,
  user: null,
  meta: null,
  rows: null,
  headers: null,
  results: null,
  filters: null,
  navigations: null,
  query: null,
  actions: null,
  options: null
});

/***/ })

}]);