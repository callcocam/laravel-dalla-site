import menuService from "@/utilities/menus";

export default {
  install(Vue) {
    Vue.prototype.$menus = menuService;
  }
};
