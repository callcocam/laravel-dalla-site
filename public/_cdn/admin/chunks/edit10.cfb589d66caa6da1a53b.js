(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["edit10"],{

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