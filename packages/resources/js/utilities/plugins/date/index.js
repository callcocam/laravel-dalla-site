
import DateUtil from "@/utilities/date";

export default {
  install(Vue) {
    Vue.prototype.$DateUtil = DateUtil;
  }
};
