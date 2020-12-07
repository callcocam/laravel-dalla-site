(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[3],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************/
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
  props: {
    footerType: {
      type: String,
      required: true
    },
    hideScrollToTop: {
      type: Boolean,
      required: true
    },
    navbarType: {
      type: String,
      required: true
    },
    navbarColor: {
      type: String,
      required: true,
      "default": "#fff"
    },
    routerTransition: {
      type: String,
      required: true
    }
  },
  data: function data() {
    return {
      active: false,
      customPrimaryColor: '#28C76F',
      customNavbarColor: '#28C76F',
      routerTransitionsList: [{
        text: 'Zoom Fade',
        value: 'zoom-fade'
      }, {
        text: 'Slide Fade',
        value: 'slide-fade'
      }, {
        text: 'Fade Bottom',
        value: 'fade-bottom'
      }, {
        text: 'Fade',
        value: 'fade'
      }, {
        text: 'Zoom Out',
        value: 'zoom-out'
      }, {
        text: 'None',
        value: 'none'
      }],
      settings: {
        maxScrollbarLength: 60,
        wheelSpeed: .60
      },
      themeColors: ['#7367F0', '#3DC9B3', '#EA5455', '#FF9F43', '#1E1E1E']
    };
  },
  watch: {
    layoutType: function layoutType(val) {
      // Reset unsupported options
      if (val === "horizontal") {
        this.themeMode === "semi-dark" ? this.themeMode = "light" : null;
        this.navbarType === "hidden" ? this.navbarTypeLocal = "floating" : null;
        this.$emit('updateNavbarColor', "#fff");
      }
    }
  },
  computed: {
    footerTypeLocal: {
      get: function get() {
        return this.footerType;
      },
      set: function set(val) {
        this.$emit('updateFooter', val);
      }
    },
    hideScrollToTopLocal: {
      get: function get() {
        return this.hideScrollToTop;
      },
      set: function set(val) {
        this.$emit('toggleHideScrollToTop', val);
      }
    },
    navbarColorInitial: function navbarColorInitial() {
      return this.$store.state.theme === 'dark' ? '#10163a' : '#fff';
    },
    navbarColorOptionClasses: function navbarColorOptionClasses() {
      var _this = this;

      return function (color) {
        var classes = {};
        if (color == _this.navbarColorLocal) classes['shadow-outline'] = true;
        if (_this.navbarTypeLocal == 'static') classes['cursor-not-allowed'] = true;
        return classes;
      };
    },
    navbarColorLocal: {
      get: function get() {
        return this.navbarColor;
      },
      set: function set(val) {
        if (this.navbarType == 'static') return;
        this.$emit('updateNavbarColor', val);
      }
    },
    navbarTypeLocal: {
      get: function get() {
        return this.navbarType;
      },
      set: function set(val) {
        this.$emit('updateNavbar', val);
      }
    },
    layoutType: {
      get: function get() {
        return this.$store.state.mainLayoutType;
      },
      set: function set(val) {
        this.$store.commit("UPDATE_MAIN_LAYOUT_TYPE", val);
      }
    },
    primaryColor: {
      get: function get() {
        return this.$store.state.themePrimaryColor;
      },
      set: function set(val) {
        this.$store.commit('UPDATE_PRIMARY_COLOR', val);
      }
    },
    reduced_sidebar: {
      get: function get() {
        return this.$store.state.reduceButton;
      },
      set: function set(val) {
        this.$store.commit('TOGGLE_REDUCE_BUTTON', val);
      }
    },
    routerTransitionLocal: {
      get: function get() {
        return this.routerTransition;
      },
      set: function set(val) {
        this.$emit('updateRouterTransition', val);
      }
    },
    rtl: {
      get: function get() {
        return this.$vs.rtl;
      },
      set: function set(val) {
        this.$vs.rtl = val;
      }
    },
    themeMode: {
      get: function get() {
        return this.$store.state.theme;
      },
      set: function set(val) {
        this.$store.dispatch('updateTheme', val);
      }
    },
    windowWidth: function windowWidth() {
      return this.$store.state.windowWidth;
    }
  },
  methods: {
    updatePrimaryColor: function updatePrimaryColor(color) {
      this.primaryColor = color;
      this.$vs.theme({
        primary: color
      });
    }
  },
  components: {
    VuePerfectScrollbar: vue_perfect_scrollbar__WEBPACK_IMPORTED_MODULE_0___default.a
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=style&index=0&lang=scss&":
/*!*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--10-2!./node_modules/sass-loader/dist/cjs.js??ref--10-3!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=style&index=0&lang=scss& ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "#theme-customizer .vs-sidebar {\n  position: fixed;\n  z-index: 52000;\n  width: 400px;\n  max-width: 90vw;\n}[dir] #theme-customizer .vs-sidebar {\n  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.11), 0 5px 15px 0 rgba(0, 0, 0, 0.08);\n}\n.customizer-btn {\n  position: fixed;\n  top: 50%;\n  z-index: 50000;\n}\n[dir=ltr] .customizer-btn {\n  right: 0;\n  border-top-right-radius: 0;\n  border-bottom-right-radius: 0;\n}\n[dir=rtl] .customizer-btn {\n  left: 0;\n  border-top-left-radius: 0;\n  border-bottom-left-radius: 0;\n}\n[dir=ltr] .customizer-btn .vs-icon {\n  -webkit-animation: spin 1.5s linear infinite;\n  animation: spin 1.5s linear infinite;\n}\n[dir=rtl] .customizer-btn .vs-icon {\n  -webkit-animation: spin 1.5s linear infinite;\n          animation: spin 1.5s linear infinite;\n}\n.scroll-area--customizer {\n  height: calc(100% - 5rem);\n}", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=style&index=0&lang=scss&":
/*!*********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--10-2!./node_modules/sass-loader/dist/cjs.js??ref--10-3!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=style&index=0&lang=scss& ***!
  \*********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../../node_modules/css-loader!../../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../../node_modules/postcss-loader/src??ref--10-2!../../../../../../node_modules/sass-loader/dist/cjs.js??ref--10-3!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./TheCustomizer.vue?vue&type=style&index=0&lang=scss& */ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=style&index=0&lang=scss&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=template&id=6c9f72bb&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=template&id=6c9f72bb& ***!
  \********************************************************************************************************************************************************************************************************************************************/
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
    { attrs: { id: "theme-customizer" } },
    [
      _c("vs-button", {
        staticClass: "customizer-btn",
        attrs: {
          color: "primary",
          type: "filled",
          "icon-pack": "feather",
          icon: "icon-settings"
        },
        on: {
          click: function($event) {
            $event.stopPropagation()
            _vm.active = !_vm.active
          }
        }
      }),
      _vm._v(" "),
      _c(
        "vs-sidebar",
        {
          staticClass: "items-no-padding",
          attrs: {
            "click-not-close": "",
            "hidden-background": "",
            "position-right": ""
          },
          model: {
            value: _vm.active,
            callback: function($$v) {
              _vm.active = $$v
            },
            expression: "active"
          }
        },
        [
          _c(
            "div",
            { staticClass: "h-full" },
            [
              _c(
                "div",
                {
                  staticClass:
                    "customizer-header mt-6 flex items-center justify-between px-6"
                },
                [
                  _c("div", [
                    _c("h4", [_vm._v(_vm._s(_vm.$t("THEME CUSTOMIZER")))]),
                    _vm._v(" "),
                    _c("small", [
                      _vm._v(_vm._s(_vm.$t("Customize & Preview in Real Time")))
                    ])
                  ]),
                  _vm._v(" "),
                  _c("feather-icon", {
                    staticClass: "cursor-pointer",
                    attrs: { icon: "XIcon" },
                    on: {
                      click: function($event) {
                        $event.stopPropagation()
                        _vm.active = false
                      }
                    }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c("vs-divider", { staticClass: "mb-0" }),
              _vm._v(" "),
              _c(
                "VuePerfectScrollbar",
                {
                  key: _vm.$vs.rtl,
                  staticClass: "scroll-area--customizer pt-4 pb-6",
                  attrs: { settings: _vm.settings }
                },
                [
                  _c(
                    "div",
                    { staticClass: "px-6" },
                    [
                      _c("vs-divider"),
                      _vm._v(" "),
                      _c("div", [
                        _c("h5", { staticClass: "mb-4" }, [
                          _vm._v(_vm._s(_vm.$t("Theme Color")))
                        ]),
                        _vm._v(" "),
                        _c(
                          "ul",
                          { staticClass: "clearfix" },
                          [
                            _vm._l(_vm.themeColors, function(color) {
                              return _c("li", {
                                key: color,
                                staticClass:
                                  "w-10 cursor-pointer h-10 rounded-lg m-2 float-left",
                                class: {
                                  "shadow-outline": color == _vm.primaryColor
                                },
                                style: { backgroundColor: color },
                                on: {
                                  click: function($event) {
                                    return _vm.updatePrimaryColor(color)
                                  }
                                }
                              })
                            }),
                            _vm._v(" "),
                            _c("li", {
                              staticClass:
                                "w-10 cursor-pointer h-10 rounded-lg m-2 float-left",
                              class: {
                                "shadow-outline":
                                  _vm.customPrimaryColor == _vm.primaryColor
                              },
                              style: {
                                backgroundColor: _vm.customPrimaryColor
                              },
                              on: {
                                click: function($event) {
                                  return _vm.updatePrimaryColor(
                                    _vm.customPrimaryColor
                                  )
                                }
                              }
                            }),
                            _vm._v(" "),
                            _c("li", { staticClass: "float-left" }, [
                              _c("input", {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.customPrimaryColor,
                                    expression: "customPrimaryColor"
                                  }
                                ],
                                staticClass:
                                  "w-10 cursor-pointer h-10 rounded-lg m-2",
                                attrs: { type: "color" },
                                domProps: { value: _vm.customPrimaryColor },
                                on: {
                                  input: function($event) {
                                    if ($event.target.composing) {
                                      return
                                    }
                                    _vm.customPrimaryColor = $event.target.value
                                  }
                                }
                              })
                            ])
                          ],
                          2
                        )
                      ]),
                      _vm._v(" "),
                      _c("vs-divider"),
                      _vm._v(" "),
                      _c("div", { staticClass: "mt-4" }, [
                        _c("h5", { staticClass: "mb-2" }, [
                          _vm._v(_vm._s(_vm.$t("Theme Mode")))
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c(
                              "vs-radio",
                              {
                                staticClass: "mr-4",
                                attrs: {
                                  "vs-value": "light",
                                  "vs-name": "theme-mode-light"
                                },
                                model: {
                                  value: _vm.themeMode,
                                  callback: function($$v) {
                                    _vm.themeMode = $$v
                                  },
                                  expression: "themeMode"
                                }
                              },
                              [_vm._v(_vm._s(_vm.$t("Light")))]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-radio",
                              {
                                staticClass: "mr-4",
                                attrs: {
                                  "vs-value": "dark",
                                  "vs-name": "theme-mode-dark"
                                },
                                model: {
                                  value: _vm.themeMode,
                                  callback: function($$v) {
                                    _vm.themeMode = $$v
                                  },
                                  expression: "themeMode"
                                }
                              },
                              [_vm._v(_vm._s(_vm.$t("Dark")))]
                            ),
                            _vm._v(" "),
                            _vm.layoutType === "vertical"
                              ? _c(
                                  "vs-radio",
                                  {
                                    attrs: {
                                      "vs-value": "semi-dark",
                                      "vs-name": "theme-mode-semi-dark"
                                    },
                                    model: {
                                      value: _vm.themeMode,
                                      callback: function($$v) {
                                        _vm.themeMode = $$v
                                      },
                                      expression: "themeMode"
                                    }
                                  },
                                  [_vm._v("Semi Dark")]
                                )
                              : _vm._e()
                          ],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c("vs-divider"),
                      _vm._v(" "),
                      _vm.layoutType === "vertical"
                        ? [
                            _c(
                              "div",
                              { staticClass: "mt-4 flex justify-between" },
                              [
                                _c("h5", [
                                  _vm._v(_vm._s(_vm.$t("Collapse Sidebar")))
                                ]),
                                _vm._v(" "),
                                _c("vs-switch", {
                                  model: {
                                    value: _vm.reduced_sidebar,
                                    callback: function($$v) {
                                      _vm.reduced_sidebar = $$v
                                    },
                                    expression: "reduced_sidebar"
                                  }
                                })
                              ],
                              1
                            ),
                            _vm._v(" "),
                            _c("vs-divider")
                          ]
                        : _vm._e(),
                      _vm._v(" "),
                      _vm.layoutType === "vertical"
                        ? [
                            _c("div", { staticClass: "mt-4" }, [
                              _c("h5", [
                                _vm._v(_vm._s(_vm.$t("Navbar Color")))
                              ]),
                              _vm._v(" "),
                              _c(
                                "ul",
                                { staticClass: "clearfix" },
                                [
                                  _c("li", {
                                    staticClass:
                                      "w-10 m-2 h-10 rounded-lg float-left cursor-pointer border border-solid d-theme-border-grey-light",
                                    class: _vm.navbarColorOptionClasses(
                                      _vm.navbarColorInitial
                                    ),
                                    style: {
                                      background: _vm.navbarColorInitial
                                    },
                                    on: {
                                      click: function($event) {
                                        _vm.navbarColorLocal =
                                          _vm.navbarColorInitial
                                      }
                                    }
                                  }),
                                  _vm._v(" "),
                                  _vm._l(_vm.themeColors, function(color) {
                                    return _c("li", {
                                      key: color,
                                      staticClass:
                                        "w-10 cursor-pointer h-10 rounded-lg m-2 float-left",
                                      class: _vm.navbarColorOptionClasses(
                                        color
                                      ),
                                      style: { backgroundColor: color },
                                      on: {
                                        click: function($event) {
                                          _vm.navbarColorLocal = color
                                        }
                                      }
                                    })
                                  }),
                                  _vm._v(" "),
                                  _c("li", {
                                    staticClass:
                                      "w-10 cursor-pointer h-10 rounded-lg m-2 float-left",
                                    class: _vm.navbarColorOptionClasses(
                                      _vm.navbarColorOptionClasses
                                    ),
                                    style: {
                                      backgroundColor: _vm.customNavbarColor
                                    },
                                    on: {
                                      click: function($event) {
                                        _vm.navbarColorLocal =
                                          _vm.customNavbarColor
                                      }
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("li", { staticClass: "float-left" }, [
                                    _c("input", {
                                      directives: [
                                        {
                                          name: "model",
                                          rawName: "v-model",
                                          value: _vm.customNavbarColor,
                                          expression: "customNavbarColor"
                                        }
                                      ],
                                      staticClass:
                                        "w-10 cursor-pointer h-10 rounded-lg m-2",
                                      attrs: { type: "color" },
                                      domProps: {
                                        value: _vm.customNavbarColor
                                      },
                                      on: {
                                        input: function($event) {
                                          if ($event.target.composing) {
                                            return
                                          }
                                          _vm.customNavbarColor =
                                            $event.target.value
                                        }
                                      }
                                    })
                                  ])
                                ],
                                2
                              )
                            ]),
                            _vm._v(" "),
                            _c("vs-divider")
                          ]
                        : _vm._e(),
                      _vm._v(" "),
                      _c("div", { staticClass: "mt-4" }, [
                        _c("h5", { staticClass: "mb-2" }, [
                          _vm._v(
                            _vm._s(
                              _vm.layoutType === "vertical" ||
                                _vm.windowWidth < 1200
                                ? "Navbar"
                                : "Nav Menu"
                            ) +
                              " " +
                              _vm._s(_vm.$t("Type"))
                          )
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _vm.layoutType === "vertical" ||
                            _vm.windowWidth < 1200
                              ? _c(
                                  "vs-radio",
                                  {
                                    staticClass: "mr-4",
                                    attrs: {
                                      "vs-value": "hidden",
                                      "vs-name": "navbar-type-hidden"
                                    },
                                    model: {
                                      value: _vm.navbarTypeLocal,
                                      callback: function($$v) {
                                        _vm.navbarTypeLocal = $$v
                                      },
                                      expression: "navbarTypeLocal"
                                    }
                                  },
                                  [_vm._v("Hidden")]
                                )
                              : _vm._e(),
                            _vm._v(" "),
                            _c(
                              "vs-radio",
                              {
                                staticClass: "mr-4",
                                attrs: {
                                  "vs-value": "static",
                                  "vs-name": "navbar-type-static"
                                },
                                model: {
                                  value: _vm.navbarTypeLocal,
                                  callback: function($$v) {
                                    _vm.navbarTypeLocal = $$v
                                  },
                                  expression: "navbarTypeLocal"
                                }
                              },
                              [_vm._v("Static")]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-radio",
                              {
                                staticClass: "mr-4",
                                attrs: {
                                  "vs-value": "sticky",
                                  "vs-name": "navbar-type-sticky"
                                },
                                model: {
                                  value: _vm.navbarTypeLocal,
                                  callback: function($$v) {
                                    _vm.navbarTypeLocal = $$v
                                  },
                                  expression: "navbarTypeLocal"
                                }
                              },
                              [_vm._v("Sticky")]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-radio",
                              {
                                attrs: {
                                  "vs-value": "floating",
                                  "vs-name": "navbar-type-floating"
                                },
                                model: {
                                  value: _vm.navbarTypeLocal,
                                  callback: function($$v) {
                                    _vm.navbarTypeLocal = $$v
                                  },
                                  expression: "navbarTypeLocal"
                                }
                              },
                              [_vm._v("Floating")]
                            )
                          ],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c("vs-divider"),
                      _vm._v(" "),
                      _c("div", { staticClass: "mt-4" }, [
                        _c("h5", { staticClass: "mb-2" }, [
                          _vm._v(_vm._s(_vm.$t("Footer Type")))
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c(
                              "vs-radio",
                              {
                                staticClass: "mr-4",
                                attrs: {
                                  "vs-value": "hidden",
                                  "vs-name": "footer-type-hidden"
                                },
                                model: {
                                  value: _vm.footerTypeLocal,
                                  callback: function($$v) {
                                    _vm.footerTypeLocal = $$v
                                  },
                                  expression: "footerTypeLocal"
                                }
                              },
                              [_vm._v(_vm._s(_vm.$t("Hidden")))]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-radio",
                              {
                                staticClass: "mr-4",
                                attrs: {
                                  "vs-value": "static",
                                  "vs-name": "footer-type-static"
                                },
                                model: {
                                  value: _vm.footerTypeLocal,
                                  callback: function($$v) {
                                    _vm.footerTypeLocal = $$v
                                  },
                                  expression: "footerTypeLocal"
                                }
                              },
                              [_vm._v(_vm._s(_vm.$t("Static")))]
                            ),
                            _vm._v(" "),
                            _c(
                              "vs-radio",
                              {
                                attrs: {
                                  "vs-value": "sticky",
                                  "vs-name": "footer-type-sticky"
                                },
                                model: {
                                  value: _vm.footerTypeLocal,
                                  callback: function($$v) {
                                    _vm.footerTypeLocal = $$v
                                  },
                                  expression: "footerTypeLocal"
                                }
                              },
                              [_vm._v(_vm._s(_vm.$t("Sticky")))]
                            )
                          ],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c("vs-divider"),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "mt-4 flex justify-between" },
                        [
                          _c("h5", { staticClass: "mb-2" }, [
                            _vm._v(_vm._s(_vm.$t("Hide Scroll To Top")))
                          ]),
                          _vm._v(" "),
                          _c("vs-switch", {
                            model: {
                              value: _vm.hideScrollToTopLocal,
                              callback: function($$v) {
                                _vm.hideScrollToTopLocal = $$v
                              },
                              expression: "hideScrollToTopLocal"
                            }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c("vs-divider")
                    ],
                    2
                  )
                ]
              )
            ],
            1
          )
        ]
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./packages/resources/js/layouts/components/customizer/TheCustomizer.vue":
/*!*******************************************************************************!*\
  !*** ./packages/resources/js/layouts/components/customizer/TheCustomizer.vue ***!
  \*******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _TheCustomizer_vue_vue_type_template_id_6c9f72bb___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./TheCustomizer.vue?vue&type=template&id=6c9f72bb& */ "./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=template&id=6c9f72bb&");
/* harmony import */ var _TheCustomizer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./TheCustomizer.vue?vue&type=script&lang=js& */ "./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _TheCustomizer_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./TheCustomizer.vue?vue&type=style&index=0&lang=scss& */ "./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=style&index=0&lang=scss&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _TheCustomizer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _TheCustomizer_vue_vue_type_template_id_6c9f72bb___WEBPACK_IMPORTED_MODULE_0__["render"],
  _TheCustomizer_vue_vue_type_template_id_6c9f72bb___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "packages/resources/js/layouts/components/customizer/TheCustomizer.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************!*\
  !*** ./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./TheCustomizer.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=style&index=0&lang=scss&":
/*!*****************************************************************************************************************!*\
  !*** ./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=style&index=0&lang=scss& ***!
  \*****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/style-loader!../../../../../../node_modules/css-loader!../../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../../node_modules/postcss-loader/src??ref--10-2!../../../../../../node_modules/sass-loader/dist/cjs.js??ref--10-3!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./TheCustomizer.vue?vue&type=style&index=0&lang=scss& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=style&index=0&lang=scss&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=template&id=6c9f72bb&":
/*!**************************************************************************************************************!*\
  !*** ./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=template&id=6c9f72bb& ***!
  \**************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_template_id_6c9f72bb___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./TheCustomizer.vue?vue&type=template&id=6c9f72bb& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/layouts/components/customizer/TheCustomizer.vue?vue&type=template&id=6c9f72bb&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_template_id_6c9f72bb___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_TheCustomizer_vue_vue_type_template_id_6c9f72bb___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);