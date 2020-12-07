import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

import { createRouterLayout } from "vue-router-layout";

const RouterLayout = createRouterLayout(layout => {
    return import("@/layouts/" + layout + ".vue");
});

import { generateRoutes } from "@/utilities/plugins/vue-router-generator";

const routes = [
    {
        name: "admin",
        path: "/admin",
        component: RouterLayout,
        redirect: { name: "admin.dashboard" },
        children: [
            {
                path: "dashboard",
                name: "admin.dashboard",
                component: () => import("@/views/DashBoard.vue")
            },
            ...generateRoutes(),
            {
                name: "admin.companies.info",
                path: "companies",
                component: () =>
                    import(
                        /* webpackChunkName: "admin.companies.info" */ `@views/pages/companies/info`
                    ),
                meta: {
                    authRequired: true
                }
            },
            {
                name: "admin.auth.profile",
                path: "profile",
                component: () =>
                    import(
                        /* webpackChunkName: "admin.auth.profile" */ `@views/pages/auth/profile`
                    ),
                meta: {
                    authRequired: true
                }
            }
        ]
    },
    {
        path: "*",
        component: () => import(/* webpackChunkName: "404" */ "@views/Error404")
    }
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    scrollBehavior() {
        return { x: 0, y: 0 };
    },
    routes
});

router.afterEach(() => {
    // Remove initial loading
    const appLoading = document.getElementById("loading-bg");
    if (appLoading) {
        appLoading.style.display = "none";
    }
});

router.beforeEach((to, from, next) => {
    // if (to.meta.authRequired) {
    //     if (!auth.isAuthenticated()) {
    //         router.push({ name: "admin.auth.login", query: { to: to.path } });
    //     }
    // }
    return next();
});
export default router;
