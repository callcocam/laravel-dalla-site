(window.webpackJsonp=window.webpackJsonp||[]).push([[10],{"6LHI":function(t,a,e){"use strict";var i=e("sMm7");e.n(i).a},OJA7:function(t,a,e){(t.exports=e("I1BE")(!1)).push([t.i,".add-new-data-sidebar[data-v-7399c118]  .vs-sidebar--background {\n  z-index: 52010;\n}\n.add-new-data-sidebar[data-v-7399c118]  .vs-sidebar {\n  z-index: 52010;\n  width: 400px;\n  max-width: 90vw;\n}\n[dir] .add-new-data-sidebar[data-v-7399c118]  .vs-sidebar .img-upload {\n  margin-top: 2rem;\n}\n[dir] .add-new-data-sidebar[data-v-7399c118]  .vs-sidebar .img-upload .con-img-upload {\n  padding: 0;\n}\n.add-new-data-sidebar[data-v-7399c118]  .vs-sidebar .img-upload .con-input-upload {\n  width: 100%;\n}\n[dir] .add-new-data-sidebar[data-v-7399c118]  .vs-sidebar .img-upload .con-input-upload {\n  margin: 0;\n}\n.scroll-area--data-list-add-new[data-v-7399c118] {\n  height: calc(var(--vh, 1vh) * 100 - 16px - 45px - 82px);\n}",""])},orr9:function(t,a,e){"use strict";e.r(a);var i=e("nWMH"),n=e.n(i),s=e("4HBT"),r={name:"DataTranslationViewSidebar",props:{isSidebarActive:{type:Boolean,required:!0},collumn:{type:Object,default:function(){}}},watch:{isSidebarActive:function(t){t&&(Object.entries(this.collumn).length,this.initValues())}},data:function(){return{form:null,settings:{maxScrollbarLength:60,wheelSpeed:.6}}},computed:{isSidebarActiveLocal:{get:function(){return this.isSidebarActive},set:function(t){t||this.$emit("closeSidebar")}},isFormValid:function(){return!this.form.errors}},methods:{initValues:function(){if(this.collumn){var t=[];Object.values(this.collumn.value).map((function(a){a.type&&(t[a.name]=a.value)})),this.form=new s.Form(t)}else this.form=new s.Form({id:"",name:"",slug:"",description:""})},urlWithApiStoreUpdate:function(){if(this.$route.meta.update||this.$route.meta.store)return this.$route.params.id?this.form.put(this.$route.meta.update.replace("_id_",this.$route.params.id)):this.form.post(this.$route.meta.store)},submitData:function(){var t=this;this.form.errors.clear(),this.$vs.loading(),this.urlWithApiStoreUpdate().then((function(a){t.notify(a.data),t.$vs.loading.close()})).catch((function(){t.isLoading=!1,t.$vs.loading.close()}))},currentTabComponent:function(t){return t}},components:{VuePerfectScrollbar:n.a}},o=(e("6LHI"),e("KHd+")),c=Object(o.a)(r,(function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("vs-sidebar",{staticClass:"add-new-data-sidebar items-no-padding",attrs:{"click-not-close":"","position-right":"",parent:"body","default-index":"1",color:"primary",spacer:""},model:{value:t.isSidebarActiveLocal,callback:function(a){t.isSidebarActiveLocal=a},expression:"isSidebarActiveLocal"}},[e("div",{staticClass:"mt-6 flex items-center justify-between px-6"},[e("h4",[t._v(t._s(0===Object.entries(this.collumn).length?"ADD NEW":"UPDATE")+" ITEM")]),t._v(" "),e("feather-icon",{staticClass:"cursor-pointer",attrs:{icon:"XIcon"},on:{click:function(a){a.stopPropagation(),t.isSidebarActiveLocal=!1}}})],1),t._v(" "),e("vs-divider",{staticClass:"mb-0"}),t._v(" "),e("VuePerfectScrollbar",{key:t.$vs.rtl,staticClass:"scroll-area--data-list-add-new",attrs:{settings:t.settings}},[t.form?e("div",{staticClass:"p-6"},[e("form",{on:{submit:function(t){t.preventDefault()}}},[t._l(t.collumn.value,(function(a,i){return[a.hidden_edit?t._e():[e(t.currentTabComponent(a.component),{key:i,tag:"component",attrs:{collumn:a,form:t.dialogForm}})]]}))],2)]):t._e()]),t._v(" "),e("div",{staticClass:"flex flex-wrap items-center p-6",attrs:{slot:"footer"},slot:"footer"},[e("vs-button",{staticClass:"mr-6",on:{click:t.submitData}},[t._v(t._s(t.$t("Submit")))]),t._v(" "),e("vs-button",{attrs:{type:"border",color:"danger"},on:{click:function(a){t.isSidebarActiveLocal=!1}}},[t._v(t._s(t.$t("Cancel")))])],1)],1)}),[],!1,null,"7399c118",null);a.default=c.exports},sMm7:function(t,a,e){var i=e("OJA7");"string"==typeof i&&(i=[[t.i,i,""]]);var n={hmr:!0,transform:void 0,insertInto:void 0};e("aET+")(i,n);i.locals&&(t.exports=i.locals)}}]);