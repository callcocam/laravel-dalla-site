(window.webpackJsonp=window.webpackJsonp||[]).push([[15,1],{5:function(t,e,n){"use strict";var r=n(6),a=n.n(r),u=n(11);function s(t,e,n,r,a,u,s){try{var o=t[u](s),i=o.value}catch(t){return void n(t)}o.done?e(i):Promise.resolve(i).then(r,a)}function o(t){return function(){var e=this,n=arguments;return new Promise((function(r,a){var u=t.apply(e,n);function o(t){s(u,r,a,o,i,"next",t)}function i(t){s(u,r,a,o,i,"throw",t)}o(void 0)}))}}var i={all:function(t,e){return o(a.a.mark((function n(){var r,s,o;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return t.dispatch("clear_data"),r=e.url,s=e.params,n.next=4,u.a.get(r,{params:s});case 4:return o=n.sent,n.abrupt("return",t.dispatch("set_data",o.data));case 6:case"end":return n.stop()}}),n)})))()},find:function(t,e){return o(a.a.mark((function n(){var r,s,o;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return t.dispatch("clear_data"),r=e.url,s=e.params,n.next=4,u.a.get(r,{params:s});case 4:return o=n.sent,t.dispatch("set_data",o.data),n.abrupt("return",o);case 7:case"end":return n.stop()}}),n)})))()},show:function(t,e){return o(a.a.mark((function n(){var r,s,o;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return t.dispatch("clear_data"),r=e.url,s=e.params,n.next=4,u.a.get(r,{params:s});case 4:return o=n.sent,t.dispatch("set_data",o.data),n.abrupt("return",o);case 7:case"end":return n.stop()}}),n)})))()},removeRecord:function(t,e){return o(a.a.mark((function n(){var r,s,o,i;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return t.commit,r=e.url,s=e.params,o=e.id,n.next=4,u.a.delete(r.replace("_id_",o),{params:s});case 4:return i=n.sent,n.abrupt("return",i);case 6:case"end":return n.stop()}}),n)})))()},fetchUser:function(t,e){return o(a.a.mark((function n(){var r,s,o,i,c;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return(r=t.commit)("SET_USER",null),s=e.url,o=e.params,n.next=5,u.a.get(s,{params:o});case 5:return i=n.sent,c=i.data,r("SET_USER",c.data),n.abrupt("return",c);case 9:case"end":return n.stop()}}),n)})))()},fetchCompany:function(t,e){return o(a.a.mark((function n(){var r,s,o,i,c;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return(r=t.commit)("SET_COMPANY",null),r("SET_TENANT",null),s=e.url,o=e.params,n.next=6,u.a.get(s,{params:o});case 6:i=n.sent,c=i.data,r("SET_COMPANY",c.data.companies.value),r("SET_TENANT",c.data),r("SET_ACTIONS",c.data);case 11:case"end":return n.stop()}}),n)})))()},fetchAccessToken:function(t){return o(a.a.mark((function e(){var n,r;return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.commit,e.next=3,u.a.post("/api/v1/refresh");case 3:return n=e.sent,r=n.data,e.abrupt("return",r);case 6:case"end":return e.stop()}}),e)})))()},clear_data:function(t){var e=t.commit;e("SET_ROWS",null),e("SET_QUERY",null),e("SET_ACTIONS",null),e("SET_META",[]),e("SET_OPTIONS",null),e("SET_HEADERS",null),e("SET_NAVIGATIONS",null)},set_data:function(t,e){var n=t.commit,r=e.actions,a=e.options,u=e.navigations,s=e.data,o=e.filters,i=e.meta,c=e.headers;return n("SET_ROWS",s),n("SET_META",i),n("SET_ACTIONS",r),n("SET_HEADERS",c),n("SET_NAVIGATIONS",u),n("SET_FILTERS",o),n("SET_OPTIONS",a),i}};var c,l,f,p=(f=function(t){return t.actions},(l="getActions")in(c={getErrors:function(t){return t.errors},getAll:function(t){return t.rows},getFind:function(t){return t.rows},getMeta:function(t){return t.meta},getHeaders:function(t){return t.headers},getNavigations:function(t){return t.navigations},getActions:function(t){return t.actions},getFilters:function(t){return t.filters},getOptions:function(t){return t.options},getCards:function(t){return t.rows.cards},getQuery:function(t){return t.rows.query},getResults:function(t){return t.results},getCompany:function(t){return t.company},getTenant:function(t){return t.tenant},getUser:function(t){return t.user}})?Object.defineProperty(c,l,{value:f,enumerable:!0,configurable:!0,writable:!0}):c[l]=f,c);e.a={isRegistered:!1,namespaced:!0,state:{errors:null,company:null,tenant:null,user:null,meta:null,rows:null,headers:null,results:null,filters:null,navigations:null,query:null,actions:null,options:null},mutations:{SET_ROWS:function(t,e){t.rows=e},SET_FIND:function(t,e){t.rows=e},SET_QUERY:function(t,e){t.query=e},SET_HEADERS:function(t,e){t.headers=e},SET_FILTERS:function(t,e){t.filters=e},SET_OPTIONS:function(t,e){t.options=e},SET_RESULTS:function(t,e){t.results=e},SET_META:function(t,e){t.meta=e},SET_NAVIGATIONS:function(t,e){t.navigations=e},SET_ERROR:function(t,e){t.errors=e},SET_COMPANY:function(t,e){t.company=e},SET_TENANT:function(t,e){t.tenant=e},SET_USER:function(t,e){t.user=e},SET_ACTIONS:function(t,e){t.actions=e}},actions:i,getters:p}},7:function(t,e,n){"use strict";n.r(e);var r=n(5),a={data:function(){return{user_not_found:!1,url:null,selected:[],params:{}}},methods:{handleChangePage:function(t){console.log("The user changed the page to:".concat(this.meta.current_page," ").concat(t)),this.meta.current_page!=t&&t&&this.updateQueryString({page:t})},updateQueryString:function(t){this.$router.replace({query:t})},currentTabComponent:function(t){return t}},created:function(){r.a.isRegistered||(this.$store.registerModule("userManagement",r.a),r.a.isRegistered=!0)}},u=n(0),s=Object(u.a)(a,void 0,void 0,!1,null,null,null);e.default=s.exports},87:function(t,e,n){"use strict";n.r(e);var r=n(3),a=n(5);function u(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function s(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?u(Object(n),!0).forEach((function(e){o(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):u(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function o(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var i={extends:n(7).default,data:function(){return{user_not_found:!1,url:null,page:1,lastPage:1,params:{}}},computed:s({},Object(r.c)({userTemplate:"userManagement/getTemplate",rows:"userManagement/getAll",meta:"userManagement/getMeta"})),methods:s(s({},Object(r.b)({all:"userManagement/all"})),{},{urlWithApi:function(){if(this.$route.meta.api)return this.$route.meta.api},fetch_user_data:function(t){var e=this,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:this.$route.query;if(t){var r=n;dd("parameters",n),this.$vs.loading(),this.all({url:t,params:r}).then((function(t){e.$vs.loading.close(),e.user_not_found=!1})).catch((function(t){e.$vs.loading.close(),e.user_not_found=!0,e.$store.commit("userManagement/SET_ERROR",t)}))}},updateQueryString:function(t){this.$router.replace({query:t})}}),created:function(){dd("created AbstractList",this.$route),a.a.isRegistered||(this.$store.registerModule("userManagement",a.a),a.a.isRegistered=!0),this.fetch_user_data(this.urlWithApi())}},c=n(0),l=Object(c.a)(i,void 0,void 0,!1,null,null,null);e.default=l.exports}}]);