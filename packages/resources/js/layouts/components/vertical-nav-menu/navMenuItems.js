/*=========================================================================================
  File Name: sidebarItems.js
  Description: Sidebar Items list. Add / Remove menu items from here.
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

export default [
    {
        url: "/admin",
        name: "Dashboard",
        slug: "dashboard",
        icon: "MonitorIcon",
        i18n: "Home"
    },
    {
        url: null, // You can omit this
        name: "Settigns",
        slug: "settigns",
        icon: "SettingsIcon",
        i18n: "Settigns",
        submenu: [
            {
                url: "/admin/users",
                name: "Users",
                slug: "settigns-users",
                i18n: "Users"
            },
            {
                url: "/admin/roles",
                name: "Roles",
                slug: "settigns-roles",
                i18n: "Roles"
            },
            {
                url: "/admin/permissions",
                name: "Permissions",
                slug: "settigns-permissions",
                i18n: "Permissions"
            },
            {
                url: "/admin/courses",
                name: "Courses",
                slug: "settigns-courses",
                i18n: "Courses"
            }
        ]
    },
    {
        url: "/",
        name: "Home",
        slug: "home",
        target: "_blank",
        icon: "GlobeIcon",
        i18n: "Home"
    }
];
