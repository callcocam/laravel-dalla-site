(window.webpackJsonp=window.webpackJsonp||[]).push([[17],{E2vP:function(t,e,n){"use strict";var r=n("o0o1"),a=n.n(r),u=n("zlgp");function o(t,e,n,r,a,u,o){try{var i=t[u](o),s=i.value}catch(t){return void n(t)}i.done?e(s):Promise.resolve(s).then(r,a)}function i(t){return function(){var e=this,n=arguments;return new Promise((function(r,a){var u=t.apply(e,n);function i(t){o(u,r,a,i,s,"next",t)}function s(t){o(u,r,a,i,s,"throw",t)}i(void 0)}))}}var s={all:function(t,e){return i(a.a.mark((function n(){var r,o,i;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return t.dispatch("clear_data"),r=e.url,o=e.params,n.next=4,u.a.get(r,{params:o});case 4:return i=n.sent,n.abrupt("return",t.dispatch("set_data",i.data));case 6:case"end":return n.stop()}}),n)})))()},find:function(t,e){return i(a.a.mark((function n(){var r,o,i;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return t.dispatch("clear_data"),r=e.url,o=e.params,n.next=4,u.a.get(r,{params:o});case 4:return i=n.sent,t.dispatch("set_data",i.data),n.abrupt("return",i);case 7:case"end":return n.stop()}}),n)})))()},show:function(t,e){return i(a.a.mark((function n(){var r,o,i;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return t.dispatch("clear_data"),r=e.url,o=e.params,n.next=4,u.a.get(r,{params:o});case 4:return i=n.sent,t.dispatch("set_data",i.data),n.abrupt("return",i);case 7:case"end":return n.stop()}}),n)})))()},removeRecord:function(t,e){return i(a.a.mark((function n(){var r,o,i,s;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return t.commit,r=e.url,o=e.params,i=e.id,n.next=4,u.a.delete(r.replace("_id_",i),{params:o});case 4:return s=n.sent,n.abrupt("return",s);case 6:case"end":return n.stop()}}),n)})))()},fetchUser:function(t,e){return i(a.a.mark((function n(){var r,o,i,s,c;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return(r=t.commit)("SET_USER",null),o=e.url,i=e.params,n.next=5,u.a.get(o,{params:i});case 5:return s=n.sent,c=s.data,r("SET_USER",c.data),n.abrupt("return",c);case 9:case"end":return n.stop()}}),n)})))()},fetchCompany:function(t,e){return i(a.a.mark((function n(){var r,o,i,s,c;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return(r=t.commit)("SET_COMPANY",null),r("SET_TENANT",null),o=e.url,i=e.params,n.next=6,u.a.get(o,{params:i});case 6:s=n.sent,c=s.data,r("SET_COMPANY",c.data.companies.value),r("SET_TENANT",c.data),r("SET_ACTIONS",c.data);case 11:case"end":return n.stop()}}),n)})))()},fetchTranslations:function(t,e){return i(a.a.mark((function n(){var r,o,i,s;return a.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return r=t.commit,o=e.url,i=e.params,n.next=4,u.a.get(o,{params:i});case 4:return s=n.sent,r("SET_ROWS",s),n.abrupt("return",s);case 7:case"end":return n.stop()}}),n)})))()},fetchSearch:function(t){return i(a.a.mark((function e(){var n,r,o;return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=t.commit,e.next=3,u.a.get("/api/v1/search-route");case 3:return r=e.sent,o=r.data,n("SET_NAVBAR_SEARCH_AND_PINLIST",o),e.abrupt("return",o);case 7:case"end":return e.stop()}}),e)})))()},fetchAccessToken:function(t){return i(a.a.mark((function e(){var n,r;return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.commit,e.next=3,u.a.post("/api/v1/refresh");case 3:return n=e.sent,r=n.data,e.abrupt("return",r);case 6:case"end":return e.stop()}}),e)})))()},clear_data:function(t){var e=t.commit;e("SET_ROWS",null),e("SET_QUERY",null),e("SET_ACTIONS",null),e("SET_META",[]),e("SET_OPTIONS",null),e("SET_HEADERS",null),e("SET_NAVIGATIONS",null)},set_data:function(t,e){var n=t.commit,r=e.actions,a=e.options,u=e.navigations,o=e.data,i=e.filters,s=e.meta,c=e.headers;return n("SET_ROWS",o),n("SET_META",s),n("SET_ACTIONS",r),n("SET_HEADERS",c),n("SET_NAVIGATIONS",u),n("SET_FILTERS",i),n("SET_OPTIONS",a),s}};var c,l,f,p=(f=function(t){return t.actions},(l="getActions")in(c={getErrors:function(t){return t.errors},getAll:function(t){return t.rows},getFind:function(t){return t.rows},getMeta:function(t){return t.meta},getHeaders:function(t){return t.headers},getNavigations:function(t){return t.navigations},getActions:function(t){return t.actions},getFilters:function(t){return t.filters},getOptions:function(t){return t.options},getCards:function(t){return t.rows.cards},getQuery:function(t){return t.rows.query},getResults:function(t){return t.results},getCompany:function(t){return t.company},getTenant:function(t){return t.tenant},getUser:function(t){return t.user}})?Object.defineProperty(c,l,{value:f,enumerable:!0,configurable:!0,writable:!0}):c[l]=f,c);e.a={isRegistered:!1,namespaced:!0,state:{errors:null,company:null,tenant:null,user:null,meta:null,rows:null,headers:null,results:null,filters:null,navigations:null,query:null,actions:null,options:null},mutations:{SET_ROWS:function(t,e){t.rows=e},SET_FIND:function(t,e){t.rows=e},SET_QUERY:function(t,e){t.query=e},SET_HEADERS:function(t,e){t.headers=e},SET_FILTERS:function(t,e){t.filters=e},SET_OPTIONS:function(t,e){t.options=e},SET_RESULTS:function(t,e){t.results=e},SET_META:function(t,e){t.meta=e},SET_NAVIGATIONS:function(t,e){t.navigations=e},SET_ERROR:function(t,e){t.errors=e},SET_COMPANY:function(t,e){t.company=e},SET_TENANT:function(t,e){t.tenant=e},SET_USER:function(t,e){t.user=e},SET_ACTIONS:function(t,e){t.actions=e}},actions:s,getters:p}},"q/4A":function(t,e,n){"use strict";n.r(e);var r=n("L2JU"),a=n("E2vP"),u=n("4HBT");function o(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function i(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?o(Object(n),!0).forEach((function(e){s(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):o(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function s(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var c={data:function(){return{user_not_found:!1,url:null,eventBus:"updated",activeTab:0,page:1,lastPage:1,params:{},form:null}},computed:i({},Object(r.c)({userTemplate:"userManagement/getTemplate",rows:"userManagement/getFind",meta:"userManagement/getMeta"})),methods:i(i({},Object(r.b)({find:"userManagement/find"})),{},{hiddeCreateOrEdit:function(t){return this.$route.params.id?t.hidden_edit:(this.eventBus="created",t.hidden_create)},urlWithApi:function(){if(this.$route.meta.api)return this.$route.meta.api.replace("_id_",this.$route.params.id)},urlWithIndex:function(){this.$route.meta.parent&&this.$router.push({name:this.$route.meta.parent.replace("list","index")})},urlWithApiStoreUpdate:function(){if(this.$route.meta.update||this.$route.meta.store)return this.$route.params.id?this.form.put(this.$route.meta.update.replace("_id_",this.$route.params.id)):this.form.post(this.$route.meta.store)},submit:function(){var t=this;this.form.errors.clear(),this.$vs.loading(),this.urlWithApiStoreUpdate().then((function(e){t.notify(e.data),e.data.redirect&&t.$router.push(e.data.redirect),e.data.emit&&t.$EventBus.$emit(e.data.emit,e.data),t.$vs.loading.close()})).catch((function(){t.isLoading=!1,t.$vs.loading.close()}))},notify:function(t){var e=t.color,n=t.title,r=t.text,a=t.icon,u=t.position;this.$vs.notify({color:e,title:n,text:r,icon:a,position:u})},fetch_user_data:function(t){var e=this,n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:this.$route.query;if(t){var r=n;this.$vs.loading(),this.find({url:t,params:r}).then((function(t){var n=[];Object.values(t.data.data).map((function(t){t.type&&(n[t.name]=t.value)})),e.form=new u.Form(n),e.$vs.loading.close(),e.user_not_found=!1})).catch((function(t){e.$vs.loading.close(),e.user_not_found=!0,e.$store.commit("userManagement/SET_ERROR",t)}))}},updateQueryString:function(t){this.$router.replace({query:t})},currentTabComponent:function(t){return t}}),created:function(){a.a.isRegistered||(this.$store.registerModule("userManagement",a.a),a.a.isRegistered=!0)},mounted:function(){this.fetch_user_data(this.urlWithApi())}},l=n("KHd+"),f=Object(l.a)(c,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{attrs:{id:"page-user-edit"}},[t.form?n("vx-card",[n("div",{staticClass:"tabs-container px-6 pt-6",attrs:{slot:"no-body"},slot:"no-body"},[n("vs-tabs",{staticClass:"tab-action-btn-fill-conatiner",model:{value:t.activeTab,callback:function(e){t.activeTab=e},expression:"activeTab"}},[n("vs-tab",{attrs:{label:t.$t("Data"),"icon-pack":"feather",icon:"icon-settings"}},[n("div",{staticClass:"tab-text"},[n("form",{on:{submit:function(e){return e.preventDefault(),t.submit(e)}}},[t._l(t.rows,(function(e,r){return[t.hiddeCreateOrEdit(e)?t._e():[n(t.currentTabComponent(e.component),{key:r,tag:"component",attrs:{collumn:e,form:t.form}})]]})),t._v(" "),n("div",{staticClass:"vx-row"},[n("div",{staticClass:"vx-col w-full"},[n("vs-button",{staticClass:"mr-3 mb-2",nativeOn:{click:function(e){return t.submit(e)}}},[t._v(t._s(t.$t("Submit")))]),t._v(" "),n("vs-button",{staticClass:"mb-2",attrs:{color:"warning",type:"border"},on:{click:t.urlWithIndex}},[t._v(t._s(t.$t("Reset")))])],1)])],2)])]),t._v(" "),t.rows.cards?t._l(t.rows.cards,(function(e,r){return n("vs-tab",{key:r,attrs:{label:t.$t(e.label),"icon-pack":"feather",icon:"icon-user"}},[n(t.currentTabComponent(e.component),{key:r,tag:"component",attrs:{rows:e.value}})],1)})):t._e()],2)],1)]):t._e()],1)}),[],!1,null,null,null);e.default=f.exports}}]);