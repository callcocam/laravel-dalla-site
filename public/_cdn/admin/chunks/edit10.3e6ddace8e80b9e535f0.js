(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{E2vP:function(t,n,e){"use strict";var r=e("o0o1"),a=e.n(r),u=e("zlgp");function s(t,n,e,r,a,u,s){try{var c=t[u](s),o=c.value}catch(t){return void e(t)}c.done?n(o):Promise.resolve(o).then(r,a)}function c(t){return function(){var n=this,e=arguments;return new Promise((function(r,a){var u=t.apply(n,e);function c(t){s(u,r,a,c,o,"next",t)}function o(t){s(u,r,a,c,o,"throw",t)}c(void 0)}))}}var o={all:function(t,n){return c(a.a.mark((function e(){var r,s,c;return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.dispatch("clear_data"),r=n.url,s=n.params,e.next=4,u.a.get(r,{params:s});case 4:return c=e.sent,e.abrupt("return",t.dispatch("set_data",c.data));case 6:case"end":return e.stop()}}),e)})))()},find:function(t,n){return c(a.a.mark((function e(){var r,s,c;return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.dispatch("clear_data"),r=n.url,s=n.params,e.next=4,u.a.get(r,{params:s});case 4:return c=e.sent,t.dispatch("set_data",c.data),e.abrupt("return",c);case 7:case"end":return e.stop()}}),e)})))()},show:function(t,n){return c(a.a.mark((function e(){var r,s,c;return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.dispatch("clear_data"),r=n.url,s=n.params,e.next=4,u.a.get(r,{params:s});case 4:return c=e.sent,t.dispatch("set_data",c.data),e.abrupt("return",c);case 7:case"end":return e.stop()}}),e)})))()},removeRecord:function(t,n){return c(a.a.mark((function e(){var r,s,c,o;return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.commit,r=n.url,s=n.params,c=n.id,e.next=4,u.a.delete(r.replace("_id_",c),{params:s});case 4:return o=e.sent,e.abrupt("return",o);case 6:case"end":return e.stop()}}),e)})))()},fetchUser:function(t,n){return c(a.a.mark((function e(){var r,s,c,o,i;return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return(r=t.commit)("SET_USER",null),s=n.url,c=n.params,e.next=5,u.a.get(s,{params:c});case 5:return o=e.sent,i=o.data,r("SET_USER",i.data),e.abrupt("return",i);case 9:case"end":return e.stop()}}),e)})))()},fetchCompany:function(t,n){return c(a.a.mark((function e(){var r,s,c,o,i;return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return(r=t.commit)("SET_COMPANY",null),r("SET_TENANT",null),s=n.url,c=n.params,e.next=6,u.a.get(s,{params:c});case 6:o=e.sent,i=o.data,r("SET_COMPANY",i.data.companies.value),r("SET_TENANT",i.data),r("SET_ACTIONS",i.data);case 11:case"end":return e.stop()}}),e)})))()},fetchTranslations:function(t,n){return c(a.a.mark((function e(){var r,s,c,o;return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.commit,s=n.url,c=n.params,e.next=4,u.a.get(s,{params:c});case 4:return o=e.sent,r("SET_ROWS",o),e.abrupt("return",o);case 7:case"end":return e.stop()}}),e)})))()},fetchSearch:function(t){return c(a.a.mark((function n(){var e,r,s;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return e=t.commit,n.next=3,u.a.get("/api/v1/search-route");case 3:return r=n.sent,s=r.data,e("SET_NAVBAR_SEARCH_AND_PINLIST",s),n.abrupt("return",s);case 7:case"end":return n.stop()}}),n)})))()},fetchAccessToken:function(t){return c(a.a.mark((function n(){var e,r;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return t.commit,n.next=3,u.a.post("/api/v1/refresh");case 3:return e=n.sent,r=e.data,n.abrupt("return",r);case 6:case"end":return n.stop()}}),n)})))()},clear_data:function(t){var n=t.commit;n("SET_ROWS",null),n("SET_QUERY",null),n("SET_ACTIONS",null),n("SET_META",[]),n("SET_OPTIONS",null),n("SET_HEADERS",null),n("SET_NAVIGATIONS",null)},set_data:function(t,n){var e=t.commit,r=n.actions,a=n.options,u=n.navigations,s=n.data,c=n.filters,o=n.meta,i=n.headers;return e("SET_ROWS",s),e("SET_META",o),e("SET_ACTIONS",r),e("SET_HEADERS",i),e("SET_NAVIGATIONS",u),e("SET_FILTERS",c),e("SET_OPTIONS",a),o}};var i,f,l,p=(l=function(t){return t.actions},(f="getActions")in(i={getErrors:function(t){return t.errors},getAll:function(t){return t.rows},getFind:function(t){return t.rows},getMeta:function(t){return t.meta},getHeaders:function(t){return t.headers},getNavigations:function(t){return t.navigations},getActions:function(t){return t.actions},getFilters:function(t){return t.filters},getOptions:function(t){return t.options},getCards:function(t){return t.rows.cards},getQuery:function(t){return t.rows.query},getResults:function(t){return t.results},getCompany:function(t){return t.company},getTenant:function(t){return t.tenant},getUser:function(t){return t.user}})?Object.defineProperty(i,f,{value:l,enumerable:!0,configurable:!0,writable:!0}):i[f]=l,i);n.a={isRegistered:!1,namespaced:!0,state:{errors:null,company:null,tenant:null,user:null,meta:null,rows:null,headers:null,results:null,filters:null,navigations:null,query:null,actions:null,options:null},mutations:{SET_ROWS:function(t,n){t.rows=n},SET_FIND:function(t,n){t.rows=n},SET_QUERY:function(t,n){t.query=n},SET_HEADERS:function(t,n){t.headers=n},SET_FILTERS:function(t,n){t.filters=n},SET_OPTIONS:function(t,n){t.options=n},SET_RESULTS:function(t,n){t.results=n},SET_META:function(t,n){t.meta=n},SET_NAVIGATIONS:function(t,n){t.navigations=n},SET_ERROR:function(t,n){t.errors=n},SET_COMPANY:function(t,n){t.company=n},SET_TENANT:function(t,n){t.tenant=n},SET_USER:function(t,n){t.user=n},SET_ACTIONS:function(t,n){t.actions=n}},actions:o,getters:p}},"mK5+":function(t,n,e){"use strict";e.r(n);var r=e("E2vP"),a={data:function(){return{user_not_found:!1,url:null,selected:[],params:{}}},methods:{handleChangePage:function(t){console.log("The user changed the page to:".concat(this.meta.current_page," ").concat(t)),this.meta.current_page!=t&&t&&this.updateQueryString({page:t})},updateQueryString:function(t){this.$router.replace({query:t})},currentTabComponent:function(t){return t}},created:function(){r.a.isRegistered||(this.$store.registerModule("userManagement",r.a),r.a.isRegistered=!0)}},u=e("KHd+"),s=Object(u.a)(a,void 0,void 0,!1,null,null,null);n.default=s.exports}}]);