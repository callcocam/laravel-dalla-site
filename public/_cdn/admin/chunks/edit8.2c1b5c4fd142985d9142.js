(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["edit8"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractListOld.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractListOld.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/store/modules/user-management/moduleUserManagement */ "./packages/resources/js/store/modules/user-management/moduleUserManagement.js");
/* harmony import */ var _views_pages_AbstractPage__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @/views/pages/AbstractPage */ "./packages/resources/js/views/pages/AbstractPage.vue");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




/* harmony default export */ __webpack_exports__["default"] = ({
  "extends": _views_pages_AbstractPage__WEBPACK_IMPORTED_MODULE_2__["default"],
  data: function data() {
    return {
      user_not_found: false,
      url: null,
      page: 1,
      lastPage: 1,
      params: {}
    };
  },
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])({
    userTemplate: "userManagement/getTemplate",
    rows: "userManagement/getAll",
    meta: "userManagement/getMeta"
  })),
  methods: _objectSpread(_objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])({
    all: "userManagement/all"
  })), {}, {
    urlWithApi: function urlWithApi() {
      if (!this.$route.meta.api) return;
      return this.$route.meta.api;
    },
    fetch_user_data: function fetch_user_data(url) {
      var _this = this;

      var parameters = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.$route.query;
      if (!url) return;
      var params = parameters;
      dd("parameters", parameters);
      this.$vs.loading();
      this.all({
        url: url,
        params: params
      }).then(function (response) {
        _this.$vs.loading.close();

        _this.user_not_found = false;
      })["catch"](function (error) {
        _this.$vs.loading.close();

        _this.user_not_found = true;

        _this.$store.commit("userManagement/SET_ERROR", error);
      });
    },
    updateQueryString: function updateQueryString(params) {
      this.$router.replace({
        query: params
      });
    }
  }),
  created: function created() {
    dd("created AbstractList", this.$route); // Register Module UserManagement Module

    if (!_store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__["default"].isRegistered) {
      this.$store.registerModule("userManagement", _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__["default"]);
      _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__["default"].isRegistered = true;
    }

    this.fetch_user_data(this.urlWithApi());
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractPage.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractPage.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/store/modules/user-management/moduleUserManagement */ "./packages/resources/js/store/modules/user-management/moduleUserManagement.js");

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      user_not_found: false,
      url: null,
      selected: [],
      params: {}
    };
  },
  methods: {
    handleChangePage: function handleChangePage(page) {
      console.log("The user changed the page to:".concat(this.meta.current_page, " ").concat(page));
      if (this.meta.current_page == page) return;
      if (!page) return;
      this.updateQueryString({
        page: page
      });
    },
    updateQueryString: function updateQueryString(params) {
      this.$router.replace({
        query: params
      });
    },
    currentTabComponent: function currentTabComponent(Component) {
      return Component;
    }
  },
  created: function created() {
    // Register Module UserManagement Module
    if (!_store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_0__["default"].isRegistered) {
      this.$store.registerModule("userManagement", _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_0__["default"]);
      _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_0__["default"].isRegistered = true;
    }
  }
});

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractListOld.vue":
/*!***************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractListOld.vue ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _AbstractListOld_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AbstractListOld.vue?vue&type=script&lang=js& */ "./packages/resources/js/views/pages/AbstractListOld.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns




/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__["default"])(
  _AbstractListOld_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"],
  render,
  staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "packages/resources/js/views/pages/AbstractListOld.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractListOld.vue?vue&type=script&lang=js&":
/*!****************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractListOld.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractListOld_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractListOld.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractListOld.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractListOld_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractPage.vue":
/*!************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractPage.vue ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _AbstractPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AbstractPage.vue?vue&type=script&lang=js& */ "./packages/resources/js/views/pages/AbstractPage.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns




/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__["default"])(
  _AbstractPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"],
  render,
  staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "packages/resources/js/views/pages/AbstractPage.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractPage.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractPage.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractPage.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractPage.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ })

}]);