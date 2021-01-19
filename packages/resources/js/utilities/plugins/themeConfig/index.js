import themeConfig from "@/themeConfig";

export default {
    install(Vue) {
        Vue.prototype.$themeConfig = themeConfig;
    }
};

