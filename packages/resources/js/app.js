/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window._ = require("lodash");

import Vue from "vue";

import VueObserveVisibility from "vue-observe-visibility";

Vue.use(VueObserveVisibility);

// Vuesax Component Framework
import Vuesax from "vuesax";
import "material-icons/iconfont/material-icons.css"; //Material Icons
import "vuesax/dist/vuesax.css"; // Vuesax
Vue.use(Vuesax);

// global Configurations
import "@/utilities/globalConfig.js";

// Theme Configurations
import "@/utilities/themeConfig.js";

// Globally Registered Components
import "@/utilities/globalComponents.js";

// Tailwind
import "@/assets/css/main.css";

import AxiosPlugin from "@/utilities/plugins/axios";

Vue.use(AxiosPlugin);

import DateUtilPlugin from "@/utilities/plugins/date";

Vue.use(DateUtilPlugin);

import AuthPlugin from "@/utilities/plugins/auth";

Vue.use(AuthPlugin);

import menuPlugin from "@/utilities/plugins/menus";

Vue.use(menuPlugin);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//import Form from "@/utilities/plugins/form/Form";

//window.Form = Form;

import router from "@/router";

import store from "@/store";

// Vuejs - Vue wrapper for hammerjs
import { VueHammer } from "vue2-hammer";
Vue.use(VueHammer);

// PrismJS
import "prismjs";
import "prismjs/themes/prism-tomorrow.css";

// Feather font icon
require("@/assets/css/iconfont.css");

// i18n
import i18n from "@/utilities/plugins/i18n/i18n";

import App from "./App.vue";

store.dispatch("me").then(() => {
    new Vue({
        router,
        i18n,
        store,
        render: h => h(App)
    }).$mount("#app");
});
