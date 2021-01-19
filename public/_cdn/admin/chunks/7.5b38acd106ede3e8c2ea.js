(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[7],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
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
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      token: null
    };
  },
  computed: {
    activeUserInfo: function activeUserInfo() {
      return this.$store.state.AppActiveUser;
    }
  },
  methods: {
    logout: function logout() {
      // This is just for demo Purpose. If user clicks on logout -> redirect
      this.$auth.logOut();
      this.$refs.logoutForm.submit();
    }
  },
  created: function created() {
    this.token = document.head.querySelector('meta[name="csrf-token"]').content;
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=template&id=76121155&":
/*!*****************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=template&id=76121155& ***!
  \*****************************************************************************************************************************************************************************************************************************************************/
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
  return _vm.activeUserInfo.name
    ? _c(
        "div",
        { staticClass: "the-navbar__user-meta flex items-center" },
        [
          _c(
            "div",
            { staticClass: "text-right leading-tight hidden sm:block" },
            [
              _c("p", { staticClass: "font-semibold" }, [
                _vm._v(_vm._s(_vm.activeUserInfo.name) + " ")
              ])
            ]
          ),
          _vm._v(" "),
          _c(
            "vs-dropdown",
            {
              staticClass: "cursor-pointer",
              attrs: { "vs-custom-content": "", "vs-trigger-click": "" }
            },
            [
              _c("div", { staticClass: "con-img ml-3" }, [
                _vm.activeUserInfo.cover
                  ? _c("img", {
                      key: "onlineImg",
                      staticClass:
                        "rounded-full shadow-md cursor-pointer block",
                      attrs: {
                        src: _vm.activeUserInfo.cover,
                        alt: "user-img",
                        width: "40",
                        height: "40"
                      }
                    })
                  : _vm._e()
              ]),
              _vm._v(" "),
              _c("vs-dropdown-menu", { staticClass: "vx-navbar-dropdown" }, [
                _c(
                  "ul",
                  { staticStyle: { "min-width": "15rem" } },
                  [
                    _c(
                      "li",
                      {
                        staticClass:
                          "flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white",
                        on: {
                          click: function($event) {
                            _vm.$router
                              .push({ name: "admin.profile.index" })
                              .catch(function() {})
                          }
                        }
                      },
                      [
                        _c("feather-icon", {
                          attrs: { icon: "UserIcon", svgClasses: "w-4 h-4" }
                        }),
                        _vm._v(" "),
                        _c("span", { staticClass: "ml-2" }, [
                          _vm._v(_vm._s(_vm.$t("Profile")))
                        ])
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c("vs-divider", { staticClass: "m-1" }),
                    _vm._v(" "),
                    _c(
                      "li",
                      {
                        staticClass:
                          "flex py-2 px-4 cursor-pointer hover:bg-primary hover:text-white",
                        on: { click: _vm.logout }
                      },
                      [
                        _c(
                          "form",
                          {
                            ref: "logoutForm",
                            staticStyle: { display: "none" },
                            attrs: { action: "/logout", method: "POST" }
                          },
                          [
                            _c("input", {
                              attrs: { type: "text", name: "_token" },
                              domProps: { value: _vm.token }
                            })
                          ]
                        ),
                        _vm._v(" "),
                        _c("feather-icon", {
                          attrs: { icon: "LogOutIcon", svgClasses: "w-4 h-4" }
                        }),
                        _vm._v(" "),
                        _c("span", { staticClass: "ml-2" }, [
                          _vm._v(_vm._s(_vm.$t("Logout")))
                        ])
                      ],
                      1
                    )
                  ],
                  1
                )
              ])
            ],
            1
          )
        ],
        1
      )
    : _vm._e()
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue":
/*!****************************************************************************************!*\
  !*** ./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue ***!
  \****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ProfileDropDown_vue_vue_type_template_id_76121155___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ProfileDropDown.vue?vue&type=template&id=76121155& */ "./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=template&id=76121155&");
/* harmony import */ var _ProfileDropDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ProfileDropDown.vue?vue&type=script&lang=js& */ "./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ProfileDropDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ProfileDropDown_vue_vue_type_template_id_76121155___WEBPACK_IMPORTED_MODULE_0__["render"],
  _ProfileDropDown_vue_vue_type_template_id_76121155___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************!*\
  !*** ./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ProfileDropDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./ProfileDropDown.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ProfileDropDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=template&id=76121155&":
/*!***********************************************************************************************************************!*\
  !*** ./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=template&id=76121155& ***!
  \***********************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ProfileDropDown_vue_vue_type_template_id_76121155___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./ProfileDropDown.vue?vue&type=template&id=76121155& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/navbar/components/ProfileDropDown.vue?vue&type=template&id=76121155&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ProfileDropDown_vue_vue_type_template_id_76121155___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ProfileDropDown_vue_vue_type_template_id_76121155___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);