import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/Home.vue";
import SignIn from "../views/auth/SignIn.vue";
import Account from "../views/account/Index.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "home",
        component: Home
    },
    {
        path: "/auth/signin",
        name: "signin",
        component: SignIn
    },
    {
        path: "/account",
        name: "account",
        component: Account
    }
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;
