(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["edit12"],{

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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _views_pages_includes_profiles_ProfileEditTabAccount_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/views/pages/includes/profiles/ProfileEditTabAccount.vue */ "./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue");
/* harmony import */ var _views_pages_includes_profiles_ProfileEditTabInformation_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/views/pages/includes/profiles/ProfileEditTabInformation.vue */ "./packages/resources/js/views/pages/includes/profiles/ProfileEditTabInformation.vue");
/* harmony import */ var _views_pages_includes_profiles_ProfileEditTabSocial_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @/views/pages/includes/profiles/ProfileEditTabSocial.vue */ "./packages/resources/js/views/pages/includes/profiles/ProfileEditTabSocial.vue");
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _views_pages_AbstractPage__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @/views/pages/AbstractPage */ "./packages/resources/js/views/pages/AbstractPage.vue");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


 // Store Module



/* harmony default export */ __webpack_exports__["default"] = ({
  components: {
    ProfileEditTabAccount: _views_pages_includes_profiles_ProfileEditTabAccount_vue__WEBPACK_IMPORTED_MODULE_0__["default"],
    ProfileEditTabInformation: _views_pages_includes_profiles_ProfileEditTabInformation_vue__WEBPACK_IMPORTED_MODULE_1__["default"],
    ProfileEditTabSocial: _views_pages_includes_profiles_ProfileEditTabSocial_vue__WEBPACK_IMPORTED_MODULE_2__["default"]
  },
  "extends": _views_pages_AbstractPage__WEBPACK_IMPORTED_MODULE_4__["default"],
  data: function data() {
    return {
      user_not_found: false,

      /*
        This property is created for fetching latest data from API when tab is changed
          Please check it's watcher
      */
      activeTab: 0
    };
  },
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_3__["mapGetters"])({
    user_data: "userManagement/getUser"
  })),
  methods: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_3__["mapActions"])({
    fetchUser: "userManagement/fetchUser"
  })),
  created: function created() {
    var _this = this;

    this.$vs.loading();
    this.fetchUser({
      url: "/api/v1/profile"
    }).then(function (response) {
      _this.$vs.loading.close();
    })["catch"](function (error) {
      _this.$vs.loading.close();
    });
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_select__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-select */ "./node_modules/vue-select/dist/vue-select.js");
/* harmony import */ var vue_select__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_select__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var vform__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vform */ "./node_modules/vform/dist/vform.common.js");
/* harmony import */ var vform__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(vform__WEBPACK_IMPORTED_MODULE_1__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
  components: {
    vSelect: vue_select__WEBPACK_IMPORTED_MODULE_0___default.a
  },
  props: {
    data: {
      type: Object,
      required: true
    }
  },
  data: function data() {
    return {
      form: null
    };
  },
  created: function created() {
    if (this.data) {
      var data = [];
      Object.values(this.data).map(function (row) {
        if (row.type) {
          data[row.name] = row.value;
        }
      });
      this.form = new vform__WEBPACK_IMPORTED_MODULE_1__["Form"](data);
    }
  },
  methods: {
    notify: function notify(data) {
      var color = data.color,
          title = data.title,
          text = data.text,
          icon = data.icon,
          position = data.position;
      this.$vs.notify({
        color: color,
        title: title,
        text: text,
        icon: icon,
        position: position
      });
    },
    save_changes: function save_changes() {
      var _this = this;

      this.form.errors.clear();
      this.$vs.loading();
      this.urlWithApiStoreUpdate().then(function (response) {
        _this.notify(response.data);

        if (response.data.emit) {
          _this.$EventBus.$emit(response.data.emit, response.data);
        }

        _this.$vs.loading.close();
      })["catch"](function () {
        _this.isLoading = false;

        _this.$vs.loading.close();
      });
    },
    urlWithApiStoreUpdate: function urlWithApiStoreUpdate() {
      if (!this.$route.meta.api) return;
      return this.form.post(this.$route.meta.api);
    },
    reset_data: function reset_data() {},
    currentTabComponent: function currentTabComponent(Component) {
      return Component;
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=template&id=3a8bc603&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=template&id=3a8bc603& ***!
  \****************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { attrs: { id: "page-user-edit" } },
    [
      _c(
        "vs-alert",
        {
          attrs: {
            color: "danger",
            title: "User Not Found",
            active: _vm.user_not_found
          },
          on: {
            "update:active": function($event) {
              _vm.user_not_found = $event
            }
          }
        },
        [
          _c("span", [_vm._v("User record with not found.")]),
          _vm._v(" "),
          _c(
            "span",
            [
              _c("span", [_vm._v("Check")]),
              _vm._v(" "),
              _c(
                "router-link",
                {
                  staticClass: "text-inherit underline",
                  attrs: { to: { name: "admin" } }
                },
                [_vm._v(_vm._s(_vm.$t("Back To Dashboard")))]
              )
            ],
            1
          )
        ]
      ),
      _vm._v(" "),
      _vm.user_data
        ? _c("vx-card", [
            _c(
              "div",
              {
                staticClass: "tabs-container px-6 pt-6",
                attrs: { slot: "no-body" },
                slot: "no-body"
              },
              [
                _c(
                  "vs-tabs",
                  {
                    staticClass: "tab-action-btn-fill-conatiner",
                    model: {
                      value: _vm.activeTab,
                      callback: function($$v) {
                        _vm.activeTab = $$v
                      },
                      expression: "activeTab"
                    }
                  },
                  [
                    _c(
                      "vs-tab",
                      {
                        attrs: {
                          label: _vm.$t("Account"),
                          "icon-pack": "feather",
                          icon: "icon-user"
                        }
                      },
                      [
                        _c(
                          "div",
                          { staticClass: "tab-text" },
                          [
                            _c("profile-edit-tab-account", {
                              staticClass: "mt-4",
                              attrs: { data: _vm.user_data }
                            })
                          ],
                          1
                        )
                      ]
                    )
                  ],
                  1
                )
              ],
              1
            )
          ])
        : _vm._e()
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=template&id=a2608174&":
/*!****************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=template&id=a2608174& ***!
  \****************************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { attrs: { id: "user-edit-tab-info" } }, [
    _vm.form
      ? _c("div", { staticClass: "vx-row" }, [
          _c(
            "div",
            { staticClass: "vx-col w-full" },
            [
              _vm._l(_vm.data, function(row, i) {
                return [
                  !row.hidden_edit
                    ? [
                        _c(_vm.currentTabComponent(row.component), {
                          key: i,
                          tag: "component",
                          attrs: { collumn: row, form: _vm.form }
                        })
                      ]
                    : _vm._e()
                ]
              })
            ],
            2
          )
        ])
      : _vm._e(),
    _vm._v(" "),
    _vm.form
      ? _c("div", { staticClass: "vx-row" }, [
          _c("div", { staticClass: "vx-col w-full" }, [
            _c(
              "div",
              { staticClass: "mt-8 flex flex-wrap items-center justify-end" },
              [
                _c(
                  "vs-button",
                  {
                    staticClass: "ml-auto mt-2",
                    on: { click: _vm.save_changes }
                  },
                  [_vm._v(_vm._s(_vm.$t("Submit")))]
                )
              ],
              1
            )
          ])
        ])
      : _vm._e()
  ])
}
var staticRenderFns = []
render._withStripped = true



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

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractProfile.vue":
/*!***************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractProfile.vue ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _AbstractProfile_vue_vue_type_template_id_3a8bc603___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AbstractProfile.vue?vue&type=template&id=3a8bc603& */ "./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=template&id=3a8bc603&");
/* harmony import */ var _AbstractProfile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AbstractProfile.vue?vue&type=script&lang=js& */ "./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _AbstractProfile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _AbstractProfile_vue_vue_type_template_id_3a8bc603___WEBPACK_IMPORTED_MODULE_0__["render"],
  _AbstractProfile_vue_vue_type_template_id_3a8bc603___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "packages/resources/js/views/pages/AbstractProfile.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=script&lang=js&":
/*!****************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractProfile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractProfile.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractProfile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=template&id=3a8bc603&":
/*!**********************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=template&id=3a8bc603& ***!
  \**********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractProfile_vue_vue_type_template_id_3a8bc603___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractProfile.vue?vue&type=template&id=3a8bc603& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractProfile.vue?vue&type=template&id=3a8bc603&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractProfile_vue_vue_type_template_id_3a8bc603___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractProfile_vue_vue_type_template_id_3a8bc603___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue":
/*!***************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue ***!
  \***************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ProfileEditTabAccount_vue_vue_type_template_id_a2608174___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ProfileEditTabAccount.vue?vue&type=template&id=a2608174& */ "./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=template&id=a2608174&");
/* harmony import */ var _ProfileEditTabAccount_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ProfileEditTabAccount.vue?vue&type=script&lang=js& */ "./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ProfileEditTabAccount_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ProfileEditTabAccount_vue_vue_type_template_id_a2608174___WEBPACK_IMPORTED_MODULE_0__["render"],
  _ProfileEditTabAccount_vue_vue_type_template_id_a2608174___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ProfileEditTabAccount_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./ProfileEditTabAccount.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ProfileEditTabAccount_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=template&id=a2608174&":
/*!**********************************************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=template&id=a2608174& ***!
  \**********************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ProfileEditTabAccount_vue_vue_type_template_id_a2608174___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./ProfileEditTabAccount.vue?vue&type=template&id=a2608174& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/includes/profiles/ProfileEditTabAccount.vue?vue&type=template&id=a2608174&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ProfileEditTabAccount_vue_vue_type_template_id_a2608174___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ProfileEditTabAccount_vue_vue_type_template_id_a2608174___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);