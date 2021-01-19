export function generateRoutes() {
    let routers = [];
    let data = window.menus;
    if (data) {
        data.map(rote => {
           routers.push(
                {
                    name: rote.children.edit.name,
                    path: rote.children.edit.path,
                    component: () =>
                        import(
                            /* webpackChunkName: "edit" */ `@views/pages/${rote.children.edit.component}`
                        ),
                    meta: rote.children.edit.meta
                },
                {
                    name: rote.children.show.name,
                    path: rote.children.show.path,
                    component: () =>
                        import(
                            /* webpackChunkName: "show" */ `@views/pages/${rote.children.show.component}`
                        ),
                    meta: rote.children.show.meta
                },
                {
                    name: rote.children.destroy.name,
                    path: rote.children.destroy.path,
                    component: () =>
                        import(
                            /* webpackChunkName: "destroy" */ `@views/pages/${rote.children.destroy.component}`
                        ),
                    meta: rote.children.destroy.meta
                },
                {
                    name: rote.children.create.name,
                    path: rote.children.create.path,
                    component: () =>
                        import(
                            /* webpackChunkName: "create" */ `@views/pages/${rote.children.create.component}`
                        ),
                    meta: rote.children.create.meta
                },
                {
                    name: rote.children.list.name,
                    path: rote.children.list.path,
                    component: () =>
                        import(
                            /* webpackChunkName: "list" */ `@views/pages/${rote.children.list.component}`
                        ),
                    meta: rote.children.list.meta
                },
                {
                    name: rote.name,
                    path: rote.path,
                    component: () =>
                        import(
                            /* webpackChunkName: "list" */ `@views/pages/${rote.component}`
                        ),
                    meta: rote.meta
                }
            );
        });
    }
    return routers;
}
