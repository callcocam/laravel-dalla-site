(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["edit18"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractShowPage.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractShowPage.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/store/modules/user-management/moduleUserManagement */ "./packages/resources/js/store/modules/user-management/moduleUserManagement.js");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }



/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      user_not_found: false,
      url: null,
      selected: []
    };
  },
  methods: _objectSpread(_objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])({
    find: "userManagement/show"
  })), {}, {
    updateQueryString: function updateQueryString(params) {
      this.$router.replace({
        query: Object.assign({}, this.$route.query, params)
      })["catch"](function (err) {
        dd("err", err);
      });
    },
    urlWithApi: function urlWithApi() {
      if (!this.$route.meta.api) return;
      return this.$route.meta.api.replace("_id_", this.$route.params.id);
    },
    currentTabComponent: function currentTabComponent(Component) {
      return Component;
    },
    fetch_user_data: function fetch_user_data(url) {
      var _this = this;

      var parameters = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.$route.query;
      if (!url) return;
      var params = parameters;
      this.$vs.loading();
      this.find({
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
    }
  }),
  created: function created() {
    // Register Module UserManagement Module
    if (!_store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__["default"].isRegistered) {
      this.$store.registerModule("userManagement", _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__["default"]);
      _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__["default"].isRegistered = true;
    }
  },
  mounted: function mounted() {
    this.fetch_user_data(this.urlWithApi());
  }
});

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractShowPage.vue":
/*!****************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractShowPage.vue ***!
  \****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _AbstractShowPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AbstractShowPage.vue?vue&type=script&lang=js& */ "./packages/resources/js/views/pages/AbstractShowPage.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");
var render, staticRenderFns




/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__["default"])(
  _AbstractShowPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"],
  render,
  staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "packages/resources/js/views/pages/AbstractShowPage.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractShowPage.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractShowPage.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractShowPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractShowPage.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractShowPage.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractShowPage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ })

}]);