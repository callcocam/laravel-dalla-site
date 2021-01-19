(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[6],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_perfect_scrollbar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-perfect-scrollbar */ "./node_modules/vue-perfect-scrollbar/dist/index.js");
/* harmony import */ var vue_perfect_scrollbar__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(vue_perfect_scrollbar__WEBPACK_IMPORTED_MODULE_0__);
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
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  components: {
    VuePerfectScrollbar: vue_perfect_scrollbar__WEBPACK_IMPORTED_MODULE_0___default.a
  },
  data: function data() {
    return {
      unreadNotifications: [],
      settings: {
        maxScrollbarLength: 60,
        wheelSpeed: .60
      }
    };
  },
  methods: {
    elapsedTime: function elapsedTime(startTime) {
      var x = new Date(startTime);
      var now = new Date();
      var timeDiff = now - x;
      timeDiff /= 1000;
      var seconds = Math.round(timeDiff);
      timeDiff = Math.floor(timeDiff / 60);
      var minutes = Math.round(timeDiff % 60);
      timeDiff = Math.floor(timeDiff / 60);
      var hours = Math.round(timeDiff % 24);
      timeDiff = Math.floor(timeDiff / 24);
      var days = Math.round(timeDiff % 365);
      timeDiff = Math.floor(timeDiff / 365);
      var years = timeDiff;

      if (years > 0) {
        return years + (years > 1 ? ' Years ' : ' Year ') + 'ago';
      } else if (days > 0) {
        return days + (days > 1 ? ' Days ' : ' Day ') + 'ago';
      } else if (hours > 0) {
        return hours + (hours > 1 ? ' Hrs ' : ' Hour ') + 'ago';
      } else if (minutes > 0) {
        return minutes + (minutes > 1 ? ' Mins ' : ' Min ') + 'ago';
      } else if (seconds > 0) {
        return seconds + (seconds > 1 ? ' sec ago' : 'just now');
      }

      return 'Just Now';
    },
    // Method for creating dummy notification time
    randomDate: function randomDate(_ref) {
      var hr = _ref.hr,
          min = _ref.min,
          sec = _ref.sec;
      var date = new Date();
      if (hr) date.setHours(date.getHours() - hr);
      if (min) date.setMinutes(date.getMinutes() - min);
      if (sec) date.setSeconds(date.getSeconds() - sec);
      return date;
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=template&id=025e01f1&":
/*!**********************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=template&id=025e01f1& ***!
  \**********************************************************************************************************************************************************************************************************************************************************/
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
    "vs-dropdown",
    {
      staticClass: "cursor-pointer",
      attrs: { "vs-custom-content": "", "vs-trigger-click": "" }
    },
    [
      _c("feather-icon", {
        staticClass: "cursor-pointer mt-1 sm:mr-6 mr-2",
        attrs: { icon: "BellIcon", badge: _vm.unreadNotifications.length }
      }),
      _vm._v(" "),
      _c(
        "vs-dropdown-menu",
        {
          staticClass:
            "notification-dropdown dropdown-custom vx-navbar-dropdown"
        },
        [
          _c(
            "div",
            {
              staticClass:
                "notification-top text-center p-5 bg-primary text-white"
            },
            [
              _c("h3", { staticClass: "text-white" }, [
                _vm._v(_vm._s(_vm.unreadNotifications.length) + " New")
              ]),
              _vm._v(" "),
              _c("p", { staticClass: "opacity-75" }, [
                _vm._v("App Notifications")
              ])
            ]
          ),
          _vm._v(" "),
          _c(
            "VuePerfectScrollbar",
            {
              key: _vm.$vs.rtl,
              ref: "mainSidebarPs",
              staticClass: "scroll-area--nofications-dropdown p-0 mb-10",
              attrs: { settings: _vm.settings }
            },
            [
              _c(
                "ul",
                { staticClass: "bordered-items" },
                _vm._l(_vm.unreadNotifications, function(ntf) {
                  return _c(
                    "li",
                    {
                      key: ntf.index,
                      staticClass:
                        "flex justify-between px-4 py-4 notification cursor-pointer"
                    },
                    [
                      _c(
                        "div",
                        { staticClass: "flex items-start" },
                        [
                          _c("feather-icon", {
                            attrs: {
                              icon: ntf.icon,
                              svgClasses: [
                                "text-" + ntf.category,
                                "stroke-current mr-1 h-6 w-6"
                              ]
                            }
                          }),
                          _vm._v(" "),
                          _c("div", { staticClass: "mx-2" }, [
                            _c(
                              "span",
                              {
                                staticClass:
                                  "font-medium block notification-title",
                                class: ["text-" + ntf.category]
                              },
                              [_vm._v(_vm._s(ntf.title))]
                            ),
                            _vm._v(" "),
                            _c("small", [_vm._v(_vm._s(ntf.msg))])
                          ])
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c("small", { staticClass: "mt-1 whitespace-no-wrap" }, [
                        _vm._v(_vm._s(_vm.elapsedTime(ntf.time)))
                      ])
                    ]
                  )
                }),
                0
              )
            ]
          ),
          _vm._v(" "),
          _c(
            "div",
            {
              staticClass:
                "\n      checkout-footer\n      fixed\n      bottom-0\n      rounded-b-lg\n      text-primary\n      w-full\n      p-2\n      font-semibold\n      text-center\n      border\n      border-b-0\n      border-l-0\n      border-r-0\n      border-solid\n      d-theme-border-grey-light\n      cursor-pointer"
            },
            [_c("span", [_vm._v("View All Notifications")])]
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue":
/*!*********************************************************************************************!*\
  !*** ./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _NotificationDropDown_vue_vue_type_template_id_025e01f1___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NotificationDropDown.vue?vue&type=template&id=025e01f1& */ "./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=template&id=025e01f1&");
/* harmony import */ var _NotificationDropDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NotificationDropDown.vue?vue&type=script&lang=js& */ "./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _NotificationDropDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _NotificationDropDown_vue_vue_type_template_id_025e01f1___WEBPACK_IMPORTED_MODULE_0__["render"],
  _NotificationDropDown_vue_vue_type_template_id_025e01f1___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************!*\
  !*** ./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NotificationDropDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./NotificationDropDown.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NotificationDropDown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=template&id=025e01f1&":
/*!****************************************************************************************************************************!*\
  !*** ./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=template&id=025e01f1& ***!
  \****************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NotificationDropDown_vue_vue_type_template_id_025e01f1___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./NotificationDropDown.vue?vue&type=template&id=025e01f1& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/navbar/components/NotificationDropDown.vue?vue&type=template&id=025e01f1&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NotificationDropDown_vue_vue_type_template_id_025e01f1___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NotificationDropDown_vue_vue_type_template_id_025e01f1___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);