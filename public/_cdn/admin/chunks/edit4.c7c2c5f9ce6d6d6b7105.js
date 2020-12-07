(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["edit4"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractForm.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractForm.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/store/modules/user-management/moduleUserManagement */ "./packages/resources/js/store/modules/user-management/moduleUserManagement.js");
/* harmony import */ var vform__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! vform */ "./node_modules/vform/dist/vform.common.js");
/* harmony import */ var vform__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(vform__WEBPACK_IMPORTED_MODULE_2__);
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
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      user_not_found: false,
      url: null,
      eventBus: "updated",
      activeTab: 0,
      page: 1,
      lastPage: 1,
      params: {},
      form: null
    };
  },
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])({
    userTemplate: "userManagement/getTemplate",
    rows: "userManagement/getFind",
    meta: "userManagement/getMeta"
  })),
  methods: _objectSpread(_objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])({
    find: "userManagement/find"
  })), {}, {
    hiddeCreateOrEdit: function hiddeCreateOrEdit(row) {
      if (this.$route.params.id) return row.hidden_edit;
      this.eventBus = "created";
      return row.hidden_create;
    },
    urlWithApi: function urlWithApi() {
      if (!this.$route.meta.api) return;
      return this.$route.meta.api.replace("_id_", this.$route.params.id);
    },
    urlWithIndex: function urlWithIndex() {
      if (!this.$route.meta.parent) return;
      this.$router.push({
        name: this.$route.meta.parent.replace("list", "index")
      });
    },
    urlWithApiStoreUpdate: function urlWithApiStoreUpdate() {
      if (!this.$route.meta.update && !this.$route.meta.store) return;

      if (this.$route.params.id) {
        return this.form.put(this.$route.meta.update.replace("_id_", this.$route.params.id));
      }

      return this.form.post(this.$route.meta.store);
    },
    submit: function submit() {
      var _this = this;

      this.form.errors.clear();
      this.$vs.loading();
      this.urlWithApiStoreUpdate().then(function (response) {
        _this.notify(response.data);

        if (response.data.redirect) {
          _this.$router.push(response.data.redirect);
        }

        if (response.data.emit) {
          _this.$EventBus.$emit(response.data.emit, response.data);
        }

        _this.$vs.loading.close();
      })["catch"](function () {
        _this.isLoading = false;

        _this.$vs.loading.close();
      });
    },
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
    fetch_user_data: function fetch_user_data(url) {
      var _this2 = this;

      var parameters = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.$route.query;
      if (!url) return;
      var params = parameters;
      this.$vs.loading();
      this.find({
        url: url,
        params: params
      }).then(function (response) {
        var data = [];
        Object.values(response.data.data).map(function (row) {
          if (row.type) {
            data[row.name] = row.value;
          }
        });
        _this2.form = new vform__WEBPACK_IMPORTED_MODULE_2__["Form"](data);

        _this2.$vs.loading.close();

        _this2.user_not_found = false;
      })["catch"](function (error) {
        _this2.$vs.loading.close();

        _this2.user_not_found = true;

        _this2.$store.commit("userManagement/SET_ERROR", error);
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
  }),
  created: function created() {
    // Register Module UserManagement Module
    if (!_store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__["default"].isRegistered) {
      this.$store.registerModule("userManagement", _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__["default"]);
      _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_1__["default"].isRegistered = true;
    }
  },
  mounted: function mounted() {
    //dd(this.$i18n.locale,this.$i18n.messages[this.$i18n.locale]);
    this.fetch_user_data(this.urlWithApi());
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractForm.vue?vue&type=template&id=1452ae5a&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractForm.vue?vue&type=template&id=1452ae5a& ***!
  \*************************************************************************************************************************************************************************************************************************/
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
      _vm.form
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
                          label: _vm.$t("Data"),
                          "icon-pack": "feather",
                          icon: "icon-settings"
                        }
                      },
                      [
                        _c("div", { staticClass: "tab-text" }, [
                          _c(
                            "form",
                            {
                              on: {
                                submit: function($event) {
                                  $event.preventDefault()
                                  return _vm.submit($event)
                                }
                              }
                            },
                            [
                              _vm._l(_vm.rows, function(row, i) {
                                return [
                                  !_vm.hiddeCreateOrEdit(row)
                                    ? [
                                        _c(
                                          _vm.currentTabComponent(
                                            row.component
                                          ),
                                          {
                                            key: i,
                                            tag: "component",
                                            attrs: {
                                              collumn: row,
                                              form: _vm.form
                                            }
                                          }
                                        )
                                      ]
                                    : _vm._e()
                                ]
                              }),
                              _vm._v(" "),
                              _c("div", { staticClass: "vx-row" }, [
                                _c(
                                  "div",
                                  { staticClass: "vx-col w-full" },
                                  [
                                    _c(
                                      "vs-button",
                                      {
                                        staticClass: "mr-3 mb-2",
                                        nativeOn: {
                                          click: function($event) {
                                            return _vm.submit($event)
                                          }
                                        }
                                      },
                                      [_vm._v(_vm._s(_vm.$t("Submit")))]
                                    ),
                                    _vm._v(" "),
                                    _c(
                                      "vs-button",
                                      {
                                        staticClass: "mb-2",
                                        attrs: {
                                          color: "warning",
                                          type: "border"
                                        },
                                        on: { click: _vm.urlWithIndex }
                                      },
                                      [_vm._v(_vm._s(_vm.$t("Reset")))]
                                    )
                                  ],
                                  1
                                )
                              ])
                            ],
                            2
                          )
                        ])
                      ]
                    ),
                    _vm._v(" "),
                    _vm.rows.cards
                      ? _vm._l(_vm.rows.cards, function(card, i) {
                          return _c(
                            "vs-tab",
                            {
                              key: i,
                              attrs: {
                                label: _vm.$t(card.label),
                                "icon-pack": "feather",
                                icon: "icon-user"
                              }
                            },
                            [
                              _c(_vm.currentTabComponent(card.component), {
                                key: i,
                                tag: "component",
                                attrs: { rows: card.value }
                              })
                            ],
                            1
                          )
                        })
                      : _vm._e()
                  ],
                  2
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

/***/ "./packages/resources/js/views/pages/AbstractForm.vue":
/*!************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractForm.vue ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _AbstractForm_vue_vue_type_template_id_1452ae5a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AbstractForm.vue?vue&type=template&id=1452ae5a& */ "./packages/resources/js/views/pages/AbstractForm.vue?vue&type=template&id=1452ae5a&");
/* harmony import */ var _AbstractForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AbstractForm.vue?vue&type=script&lang=js& */ "./packages/resources/js/views/pages/AbstractForm.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _AbstractForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _AbstractForm_vue_vue_type_template_id_1452ae5a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _AbstractForm_vue_vue_type_template_id_1452ae5a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "packages/resources/js/views/pages/AbstractForm.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractForm.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractForm.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractForm.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractForm.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractForm.vue?vue&type=template&id=1452ae5a&":
/*!*******************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractForm.vue?vue&type=template&id=1452ae5a& ***!
  \*******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractForm_vue_vue_type_template_id_1452ae5a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractForm.vue?vue&type=template&id=1452ae5a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractForm.vue?vue&type=template&id=1452ae5a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractForm_vue_vue_type_template_id_1452ae5a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractForm_vue_vue_type_template_id_1452ae5a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);