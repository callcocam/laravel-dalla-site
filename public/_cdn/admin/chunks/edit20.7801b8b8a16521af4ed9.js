(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["edit20"],{

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

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _store_modules_data_lang_moduleDataLangManagement__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/store/modules/data-lang/moduleDataLangManagement */ "./packages/resources/js/store/modules/data-lang/moduleDataLangManagement.js");
/* harmony import */ var _views_pages_AbstractPage__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @/views/pages/AbstractPage */ "./packages/resources/js/views/pages/AbstractPage.vue");
/* harmony import */ var _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @/store/modules/user-management/moduleUserManagement */ "./packages/resources/js/store/modules/user-management/moduleUserManagement.js");
/* harmony import */ var _views_pages_includes_DataTranslationViewSidebar_vue__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @/views/pages/includes/DataTranslationViewSidebar.vue */ "./packages/resources/js/views/pages/includes/DataTranslationViewSidebar.vue");
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  "extends": _views_pages_AbstractPage__WEBPACK_IMPORTED_MODULE_2__["default"],
  components: {
    'data-translation-view-sidebar': _views_pages_includes_DataTranslationViewSidebar_vue__WEBPACK_IMPORTED_MODULE_4__["default"]
  },
  data: function data() {
    return {
      addNewDataSidebar: false,
      sidebarData: {},
      selected: [],
      // languages: [],
      itemsPerPage: 4,
      isMounted: false
    };
  },
  computed: _objectSpread(_objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])({
    languages: "moduleDataLangManagement/getLanguages"
  })), {}, {
    currentPage: function currentPage() {
      if (this.isMounted) {
        return this.$refs.table.currentx;
      }

      return 0;
    },
    queriedItems: function queriedItems() {
      return this.$refs.table ? this.$refs.table.queriedResults.length : this.languages.length;
    }
  }),
  methods: _objectSpread(_objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapActions"])({
    all: "userManagement/all"
  })), {}, {
    handleSort: function handleSort(key, active) {
      if (!active) return;
      if (!key) return;
      this.updateQueryString({
        order: active,
        collumn: key
      });
    },
    addNewData: function addNewData() {
      this.sidebarData = {};
      this.toggleDataSidebar(true);
    },
    deleteData: function deleteData(id) {
      this.$store.dispatch("dataList/removeItem", id)["catch"](function (err) {
        console.error(err);
      });
    },
    editData: function editData(data) {
      // this.sidebarData = JSON.parse(JSON.stringify(this.blankData))
      this.sidebarData = data;
      this.toggleDataSidebar(true);
    },
    urlWithApi: function urlWithApi() {
      if (!this.$route.meta.api) return;
      return this.$route.meta.api;
    },
    fetch_languages: function fetch_languages(url) {
      var _this = this;

      var parameters = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.$route.query;
      if (!url) return;
      var params = parameters;
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
    toggleDataSidebar: function toggleDataSidebar() {
      var val = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
      this.addNewDataSidebar = val;
    }
  }),
  created: function created() {
    // Register Module UserManagement Module
    if (!_store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_3__["default"].isRegistered) {
      this.$store.registerModule("userManagement", _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_3__["default"]);
      _store_modules_user_management_moduleUserManagement__WEBPACK_IMPORTED_MODULE_3__["default"].isRegistered = true;
    } // Register Module UserManagement Module


    if (!_store_modules_data_lang_moduleDataLangManagement__WEBPACK_IMPORTED_MODULE_1__["default"].isRegistered) {
      this.$store.registerModule("moduleDataLangManagement", _store_modules_data_lang_moduleDataLangManagement__WEBPACK_IMPORTED_MODULE_1__["default"]);
      _store_modules_data_lang_moduleDataLangManagement__WEBPACK_IMPORTED_MODULE_1__["default"].isRegistered = true;
    }

    this.fetch_languages(this.urlWithApi());
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=style&index=0&lang=scss&":
/*!******************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--10-2!./node_modules/sass-loader/dist/cjs.js??ref--10-3!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=style&index=0&lang=scss& ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "#data-list-list-view .vs-con-table {\n  /*\n    Below media-queries is fix for responsiveness of action buttons\n    Note: If you change action buttons or layout of this page, Please remove below style\n  */\n}\n@media (max-width: 689px) {\n#data-list-list-view .vs-con-table .vs-table--search {\n    max-width: unset;\n    width: 100%;\n}\n[dir=ltr] #data-list-list-view .vs-con-table .vs-table--search {\n    margin-left: 0;\n}\n[dir=rtl] #data-list-list-view .vs-con-table .vs-table--search {\n    margin-right: 0;\n}\n#data-list-list-view .vs-con-table .vs-table--search .vs-table--search-input {\n    width: 100%;\n}\n}\n@media (max-width: 461px) {\n#data-list-list-view .vs-con-table .items-per-page-handler {\n    display: none;\n}\n}\n@media (max-width: 341px) {\n#data-list-list-view .vs-con-table .data-list-btn-container {\n    width: 100%;\n}\n#data-list-list-view .vs-con-table .data-list-btn-container .dd-actions,\n#data-list-list-view .vs-con-table .data-list-btn-container .btn-add-new {\n    width: 100%;\n}\n[dir=ltr] #data-list-list-view .vs-con-table .data-list-btn-container .dd-actions, [dir=ltr] #data-list-list-view .vs-con-table .data-list-btn-container .btn-add-new {\n    margin-right: 0 !important;\n}\n[dir=rtl] #data-list-list-view .vs-con-table .data-list-btn-container .dd-actions, [dir=rtl] #data-list-list-view .vs-con-table .data-list-btn-container .btn-add-new {\n    margin-left: 0 !important;\n}\n}\n#data-list-list-view .vs-con-table .product-name {\n  max-width: 23rem;\n}\n#data-list-list-view .vs-con-table .vs-table--header {\n  display: flex;\n  flex-wrap: wrap;\n}\n[dir=ltr] #data-list-list-view .vs-con-table .vs-table--header {\n  margin-left: 1.5rem;\n  margin-right: 1.5rem;\n}\n[dir=rtl] #data-list-list-view .vs-con-table .vs-table--header {\n  margin-right: 1.5rem;\n  margin-left: 1.5rem;\n}\n#data-list-list-view .vs-con-table .vs-table--header > span {\n  display: flex;\n  flex-grow: 1;\n}\n[dir] #data-list-list-view .vs-con-table .vs-table--header .vs-table--search {\n  padding-top: 0;\n}\n#data-list-list-view .vs-con-table .vs-table--header .vs-table--search .vs-table--search-input {\n  font-size: 1rem;\n}\n[dir] #data-list-list-view .vs-con-table .vs-table--header .vs-table--search .vs-table--search-input {\n  padding: 0.9rem 2.5rem;\n}\n[dir=ltr] #data-list-list-view .vs-con-table .vs-table--header .vs-table--search .vs-table--search-input + i {\n  left: 1rem;\n}\n[dir=rtl] #data-list-list-view .vs-con-table .vs-table--header .vs-table--search .vs-table--search-input + i {\n  right: 1rem;\n}\n[dir=ltr] #data-list-list-view .vs-con-table .vs-table--header .vs-table--search .vs-table--search-input:focus + i {\n  left: 1rem;\n}\n[dir=rtl] #data-list-list-view .vs-con-table .vs-table--header .vs-table--search .vs-table--search-input:focus + i {\n  right: 1rem;\n}\n#data-list-list-view .vs-con-table .vs-table {\n  border-collapse: separate;\n  border-spacing: 0 1.3rem;\n}\n[dir] #data-list-list-view .vs-con-table .vs-table {\n  padding: 0 1rem;\n}\n[dir] #data-list-list-view .vs-con-table .vs-table tr {\n  box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.05);\n}\n[dir] #data-list-list-view .vs-con-table .vs-table tr td {\n  padding: 20px;\n}\n[dir=ltr] #data-list-list-view .vs-con-table .vs-table tr td:first-child {\n  border-top-left-radius: 0.5rem;\n  border-bottom-left-radius: 0.5rem;\n}\n[dir=rtl] #data-list-list-view .vs-con-table .vs-table tr td:first-child {\n  border-top-right-radius: 0.5rem;\n  border-bottom-right-radius: 0.5rem;\n}\n[dir=ltr] #data-list-list-view .vs-con-table .vs-table tr td:last-child {\n  border-top-right-radius: 0.5rem;\n  border-bottom-right-radius: 0.5rem;\n}\n[dir=rtl] #data-list-list-view .vs-con-table .vs-table tr td:last-child {\n  border-top-left-radius: 0.5rem;\n  border-bottom-left-radius: 0.5rem;\n}\n[dir] #data-list-list-view .vs-con-table .vs-table tr td.td-check {\n  padding: 20px !important;\n}\n[dir] #data-list-list-view .vs-con-table .vs-table--thead th {\n  padding-top: 0;\n  padding-bottom: 0;\n}\n#data-list-list-view .vs-con-table .vs-table--thead th .vs-table-text {\n  text-transform: uppercase;\n  font-weight: 600;\n}\n[dir] #data-list-list-view .vs-con-table .vs-table--thead th.td-check {\n  padding: 0 15px !important;\n}\n[dir] #data-list-list-view .vs-con-table .vs-table--thead tr {\n  background: none;\n  box-shadow: none;\n}\n#data-list-list-view .vs-con-table .vs-table--pagination {\n  justify-content: center;\n}", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=style&index=0&lang=scss&":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--10-2!./node_modules/sass-loader/dist/cjs.js??ref--10-3!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=style&index=0&lang=scss& ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../../node_modules/css-loader!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--10-2!../../../../../node_modules/sass-loader/dist/cjs.js??ref--10-3!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractTranslations.vue?vue&type=style&index=0&lang=scss& */ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=style&index=0&lang=scss&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=template&id=7c9f2f10&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=template&id=7c9f2f10& ***!
  \*********************************************************************************************************************************************************************************************************************************/
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
    {
      staticClass: "data-list-container",
      attrs: { id: "data-list-list-view" }
    },
    [
      _c("data-translation-view-sidebar", {
        attrs: {
          isSidebarActive: _vm.addNewDataSidebar,
          collumn: _vm.sidebarData
        },
        on: { closeSidebar: _vm.toggleDataSidebar }
      }),
      _vm._v(" "),
      _c("div", { staticClass: "content" }, [
        _c("div", { staticClass: "container-fluid" }, [
          _c("div", { staticClass: "row" }, [
            _c(
              "div",
              { staticClass: "col-lg-12" },
              [
                _vm.user_not_found
                  ? [_c("user-not-founf")]
                  : [
                      _vm._v(
                        "\n                        " +
                          _vm._s(_vm.languages) +
                          "\n                        "
                      ),
                      _c(
                        "vs-table",
                        {
                          ref: "table",
                          attrs: {
                            multiple: "",
                            pagination: "",
                            "max-items": _vm.itemsPerPage,
                            search: "",
                            data: _vm.languages
                          },
                          scopedSlots: _vm._u([
                            {
                              key: "default",
                              fn: function(ref) {
                                var data = ref.data
                                return [
                                  _c(
                                    "tbody",
                                    _vm._l(data, function(tr, indextr) {
                                      return _c(
                                        "vs-tr",
                                        { key: indextr, attrs: { data: tr } },
                                        [
                                          _c("vs-td", [
                                            _c(
                                              "p",
                                              {
                                                staticClass:
                                                  "product-name font-medium truncate"
                                              },
                                              [_vm._v(_vm._s(tr.name))]
                                            )
                                          ]),
                                          _vm._v(" "),
                                          _c("vs-td", [
                                            _c(
                                              "p",
                                              {
                                                staticClass: "product-category"
                                              },
                                              [_vm._v(_vm._s(tr.description))]
                                            )
                                          ]),
                                          _vm._v(" "),
                                          _c("vs-td", [
                                            _c(
                                              "p",
                                              { staticClass: "product-price" },
                                              [_vm._v(_vm._s(tr.language))]
                                            )
                                          ]),
                                          _vm._v(" "),
                                          _c(
                                            "vs-td",
                                            {
                                              staticClass: "whitespace-no-wrap"
                                            },
                                            [
                                              _c("feather-icon", {
                                                attrs: {
                                                  icon: "EditIcon",
                                                  svgClasses:
                                                    "w-5 h-5 hover:text-primary stroke-current"
                                                },
                                                on: {
                                                  click: function($event) {
                                                    $event.stopPropagation()
                                                    return _vm.editData(tr)
                                                  }
                                                }
                                              }),
                                              _vm._v(" "),
                                              _c("feather-icon", {
                                                staticClass: "ml-2",
                                                attrs: {
                                                  icon: "TrashIcon",
                                                  svgClasses:
                                                    "w-5 h-5 hover:text-danger stroke-current"
                                                },
                                                on: {
                                                  click: function($event) {
                                                    $event.stopPropagation()
                                                    return _vm.deleteData(tr.id)
                                                  }
                                                }
                                              })
                                            ],
                                            1
                                          )
                                        ],
                                        1
                                      )
                                    }),
                                    1
                                  )
                                ]
                              }
                            }
                          ]),
                          model: {
                            value: _vm.selected,
                            callback: function($$v) {
                              _vm.selected = $$v
                            },
                            expression: "selected"
                          }
                        },
                        [
                          _c(
                            "div",
                            {
                              staticClass:
                                "flex flex-wrap-reverse items-center flex-grow justify-between",
                              attrs: { slot: "header" },
                              slot: "header"
                            },
                            [
                              _c(
                                "div",
                                {
                                  staticClass:
                                    "flex flex-wrap-reverse items-center data-list-btn-container"
                                },
                                [
                                  _c(
                                    "div",
                                    {
                                      staticClass:
                                        "btn-add-new p-3 mb-4 mr-4 rounded-lg cursor-pointer flex items-center justify-center text-lg font-medium text-base text-primary border border-solid border-primary",
                                      on: { click: _vm.addNewData }
                                    },
                                    [
                                      _c("feather-icon", {
                                        attrs: {
                                          icon: "PlusIcon",
                                          svgClasses: "h-4 w-4"
                                        }
                                      }),
                                      _vm._v(" "),
                                      _c(
                                        "span",
                                        {
                                          staticClass:
                                            "ml-2 text-base text-primary"
                                        },
                                        [_vm._v("Add New")]
                                      )
                                    ],
                                    1
                                  )
                                ]
                              ),
                              _vm._v(" "),
                              _c(
                                "vs-dropdown",
                                {
                                  staticClass:
                                    "cursor-pointer mb-4 mr-4 items-per-page-handler",
                                  attrs: { "vs-trigger-click": "" }
                                },
                                [
                                  _c(
                                    "div",
                                    {
                                      staticClass:
                                        "p-4 border border-solid d-theme-border-grey-light rounded-full d-theme-dark-bg cursor-pointer flex items-center justify-between font-medium"
                                    },
                                    [
                                      _c("span", { staticClass: "mr-2" }, [
                                        _vm._v(
                                          _vm._s(
                                            _vm.currentPage * _vm.itemsPerPage -
                                              (_vm.itemsPerPage - 1)
                                          ) +
                                            " - " +
                                            _vm._s(
                                              _vm.languages.length -
                                                _vm.currentPage *
                                                  _vm.itemsPerPage >
                                                0
                                                ? _vm.currentPage *
                                                    _vm.itemsPerPage
                                                : _vm.languages.length
                                            ) +
                                            " of " +
                                            _vm._s(_vm.queriedItems)
                                        )
                                      ]),
                                      _vm._v(" "),
                                      _c("feather-icon", {
                                        attrs: {
                                          icon: "ChevronDownIcon",
                                          svgClasses: "h-4 w-4"
                                        }
                                      })
                                    ],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "vs-dropdown-menu",
                                    [
                                      _c(
                                        "vs-dropdown-item",
                                        {
                                          on: {
                                            click: function($event) {
                                              _vm.itemsPerPage = 4
                                            }
                                          }
                                        },
                                        [_c("span", [_vm._v("4")])]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "vs-dropdown-item",
                                        {
                                          on: {
                                            click: function($event) {
                                              _vm.itemsPerPage = 10
                                            }
                                          }
                                        },
                                        [_c("span", [_vm._v("10")])]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "vs-dropdown-item",
                                        {
                                          on: {
                                            click: function($event) {
                                              _vm.itemsPerPage = 15
                                            }
                                          }
                                        },
                                        [_c("span", [_vm._v("15")])]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "vs-dropdown-item",
                                        {
                                          on: {
                                            click: function($event) {
                                              _vm.itemsPerPage = 20
                                            }
                                          }
                                        },
                                        [_c("span", [_vm._v("20")])]
                                      )
                                    ],
                                    1
                                  )
                                ],
                                1
                              )
                            ],
                            1
                          ),
                          _vm._v(" "),
                          _c(
                            "template",
                            { slot: "thead" },
                            [
                              _c("vs-th", { attrs: { "sort-key": "name" } }, [
                                _vm._v(_vm._s(_vm.$t("Name")))
                              ]),
                              _vm._v(" "),
                              _c(
                                "vs-th",
                                { attrs: { "sort-key": "description" } },
                                [_vm._v(_vm._s(_vm.$t("Translation")))]
                              ),
                              _vm._v(" "),
                              _c("vs-th", [_vm._v(_vm._s(_vm.$t("Language")))]),
                              _vm._v(" "),
                              _c("vs-th", [_vm._v("Action")])
                            ],
                            1
                          )
                        ],
                        2
                      )
                    ]
              ],
              2
            )
          ])
        ])
      ])
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./packages/resources/js/store/modules/data-lang/moduleDataLangActionsManagement.js":
/*!******************************************************************************************!*\
  !*** ./packages/resources/js/store/modules/data-lang/moduleDataLangActionsManagement.js ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _utilities_axios__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/utilities/axios */ "./packages/resources/js/utilities/axios/index.js");


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

/*=========================================================================================
  File Name: moduleCalendarActions.js
  Description: Calendar Module Actions
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

/* harmony default export */ __webpack_exports__["default"] = ({
  addItem: function addItem(_ref, payload) {
    var commit = _ref.commit;
    var language = payload.language,
        languages = payload.languages;
    commit('ADD_LANGUAGE', Object.assign(language, {
      id: languages.id
    }));
  },
  fetchDataLangItems: function fetchDataLangItems(_ref2, payload) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
      var commit, url, _yield$axios$get, data;

      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              commit = _ref2.commit;
              url = payload.url;
              _context.next = 4;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"].get(url);

            case 4:
              _yield$axios$get = _context.sent;
              data = _yield$axios$get.data;
              commit('moduleDataLangManagement/SET_LANGUAGES', data);

            case 7:
            case "end":
              return _context.stop();
          }
        }
      }, _callee);
    }))();
  },
  updateItem: function updateItem(_ref3, payload) {
    var commit = _ref3.commit;
    commit('UPDATE_LANGUAGE', payload);
  },
  removeItem: function removeItem(_ref4, payload) {
    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2() {
      var commit, url, params, id, response;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
        while (1) {
          switch (_context2.prev = _context2.next) {
            case 0:
              commit = _ref4.commit;
              url = payload.url, params = payload.params, id = payload.id;
              _context2.next = 4;
              return _utilities_axios__WEBPACK_IMPORTED_MODULE_1__["default"]["delete"](url.replace("_id_", id), {
                params: params
              });

            case 4:
              response = _context2.sent;
              commit('REMOVE_LANGUAGE', id);
              return _context2.abrupt("return", response);

            case 7:
            case "end":
              return _context2.stop();
          }
        }
      }, _callee2);
    }))();
  }
});

/***/ }),

/***/ "./packages/resources/js/store/modules/data-lang/moduleDataLangGettersManagement.js":
/*!******************************************************************************************!*\
  !*** ./packages/resources/js/store/modules/data-lang/moduleDataLangGettersManagement.js ***!
  \******************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/*=========================================================================================
  File Name: moduleCalendarGetters.js
  Description: Calendar Module Getters
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
/* harmony default export */ __webpack_exports__["default"] = ({
  // getItem: state => (productId) => state.products.find((product) => product.id == productId),
  getLanguages: function getLanguages(state) {
    return state.languages;
  }
});

/***/ }),

/***/ "./packages/resources/js/store/modules/data-lang/moduleDataLangManagement.js":
/*!***********************************************************************************!*\
  !*** ./packages/resources/js/store/modules/data-lang/moduleDataLangManagement.js ***!
  \***********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _moduleDataLangStateManagement_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./moduleDataLangStateManagement.js */ "./packages/resources/js/store/modules/data-lang/moduleDataLangStateManagement.js");
/* harmony import */ var _moduleDataLangMutationsManagement_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./moduleDataLangMutationsManagement.js */ "./packages/resources/js/store/modules/data-lang/moduleDataLangMutationsManagement.js");
/* harmony import */ var _moduleDataLangActionsManagement_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./moduleDataLangActionsManagement.js */ "./packages/resources/js/store/modules/data-lang/moduleDataLangActionsManagement.js");
/* harmony import */ var _moduleDataLangGettersManagement_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./moduleDataLangGettersManagement.js */ "./packages/resources/js/store/modules/data-lang/moduleDataLangGettersManagement.js");
/*=========================================================================================
  File Name: moduleDataList.js
  Description: Calendar Module
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/




/* harmony default export */ __webpack_exports__["default"] = ({
  isRegistered: false,
  namespaced: true,
  state: _moduleDataLangStateManagement_js__WEBPACK_IMPORTED_MODULE_0__["default"],
  mutations: _moduleDataLangMutationsManagement_js__WEBPACK_IMPORTED_MODULE_1__["default"],
  actions: _moduleDataLangActionsManagement_js__WEBPACK_IMPORTED_MODULE_2__["default"],
  getters: _moduleDataLangGettersManagement_js__WEBPACK_IMPORTED_MODULE_3__["default"]
});

/***/ }),

/***/ "./packages/resources/js/store/modules/data-lang/moduleDataLangMutationsManagement.js":
/*!********************************************************************************************!*\
  !*** ./packages/resources/js/store/modules/data-lang/moduleDataLangMutationsManagement.js ***!
  \********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/*=========================================================================================
  File Name: moduleCalendarMutations.js
  Description: Calendar Module Mutations
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
/* harmony default export */ __webpack_exports__["default"] = ({
  ADD_LANGUAGE: function ADD_LANGUAGE(state, payload) {
    state.languages.unshift(payload);
  },
  SET_LANGUAGES: function SET_LANGUAGES(state, payload) {
    state.languages = payload;
  },
  UPDATE_LANGUAGE: function UPDATE_LANGUAGE(state, language) {
    var languageIndex = state.languages.findIndex(function (p) {
      return p.id == product.id;
    });
    Object.assign(state.languages[languageIndex], language);
  },
  REMOVE_LANGUAGE: function REMOVE_LANGUAGE(state, itemId) {
    var ItemIndex = state.languages.findIndex(function (p) {
      return p.id == itemId;
    });
    state.languages.splice(ItemIndex, 1);
  }
});

/***/ }),

/***/ "./packages/resources/js/store/modules/data-lang/moduleDataLangStateManagement.js":
/*!****************************************************************************************!*\
  !*** ./packages/resources/js/store/modules/data-lang/moduleDataLangStateManagement.js ***!
  \****************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/*=========================================================================================
  File Name: moduleCalendarState.js
  Description: Calendar Module State
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
/* harmony default export */ __webpack_exports__["default"] = ({
  languages: []
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

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractTranslations.vue":
/*!********************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractTranslations.vue ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _AbstractTranslations_vue_vue_type_template_id_7c9f2f10___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AbstractTranslations.vue?vue&type=template&id=7c9f2f10& */ "./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=template&id=7c9f2f10&");
/* harmony import */ var _AbstractTranslations_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AbstractTranslations.vue?vue&type=script&lang=js& */ "./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _AbstractTranslations_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./AbstractTranslations.vue?vue&type=style&index=0&lang=scss& */ "./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=style&index=0&lang=scss&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _AbstractTranslations_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _AbstractTranslations_vue_vue_type_template_id_7c9f2f10___WEBPACK_IMPORTED_MODULE_0__["render"],
  _AbstractTranslations_vue_vue_type_template_id_7c9f2f10___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "packages/resources/js/views/pages/AbstractTranslations.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractTranslations.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=style&index=0&lang=scss&":
/*!******************************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=style&index=0&lang=scss& ***!
  \******************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/style-loader!../../../../../node_modules/css-loader!../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../node_modules/postcss-loader/src??ref--10-2!../../../../../node_modules/sass-loader/dist/cjs.js??ref--10-3!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractTranslations.vue?vue&type=style&index=0&lang=scss& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=style&index=0&lang=scss&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_10_2_node_modules_sass_loader_dist_cjs_js_ref_10_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=template&id=7c9f2f10&":
/*!***************************************************************************************************!*\
  !*** ./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=template&id=7c9f2f10& ***!
  \***************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_template_id_7c9f2f10___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbstractTranslations.vue?vue&type=template&id=7c9f2f10& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./packages/resources/js/views/pages/AbstractTranslations.vue?vue&type=template&id=7c9f2f10&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_template_id_7c9f2f10___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbstractTranslations_vue_vue_type_template_id_7c9f2f10___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);