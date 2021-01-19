
import axioService from "@/utilities/axios";

export default {
  install(Vue) {
    Vue.prototype.$auth = axioService;
  }
};
