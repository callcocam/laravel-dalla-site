(window.webpackJsonp=window.webpackJsonp||[]).push([[36],{"t/oL":function(t,e,s){"use strict";s.r(e);var n=s("nWMH"),o={components:{VuePerfectScrollbar:s.n(n).a},data:function(){return{unreadNotifications:[],settings:{maxScrollbarLength:60,wheelSpeed:.6}}},methods:{elapsedTime:function(t){var e=new Date(t),s=new Date-e;s/=1e3;var n=Math.round(s);s=Math.floor(s/60);var o=Math.round(s%60);s=Math.floor(s/60);var r=Math.round(s%24);s=Math.floor(s/24);var a=Math.round(s%365);s=Math.floor(s/365);return s>0?s+(s>1?" Years ":" Year ")+"ago":a>0?a+(a>1?" Days ":" Day ")+"ago":r>0?r+(r>1?" Hrs ":" Hour ")+"ago":o>0?o+(o>1?" Mins ":" Min ")+"ago":n>0?n+(n>1?" sec ago":"just now"):"Just Now"},randomDate:function(t){var e=t.hr,s=t.min,n=t.sec,o=new Date;return e&&o.setHours(o.getHours()-e),s&&o.setMinutes(o.getMinutes()-s),n&&o.setSeconds(o.getSeconds()-n),o}}},r=s("KHd+"),a=Object(r.a)(o,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("vs-dropdown",{staticClass:"cursor-pointer",attrs:{"vs-custom-content":"","vs-trigger-click":""}},[s("feather-icon",{staticClass:"cursor-pointer mt-1 sm:mr-6 mr-2",attrs:{icon:"BellIcon",badge:t.unreadNotifications.length}}),t._v(" "),s("vs-dropdown-menu",{staticClass:"notification-dropdown dropdown-custom vx-navbar-dropdown"},[s("div",{staticClass:"notification-top text-center p-5 bg-primary text-white"},[s("h3",{staticClass:"text-white"},[t._v(t._s(t.unreadNotifications.length)+" New")]),t._v(" "),s("p",{staticClass:"opacity-75"},[t._v("App Notifications")])]),t._v(" "),s("VuePerfectScrollbar",{key:t.$vs.rtl,ref:"mainSidebarPs",staticClass:"scroll-area--nofications-dropdown p-0 mb-10",attrs:{settings:t.settings}},[s("ul",{staticClass:"bordered-items"},t._l(t.unreadNotifications,(function(e){return s("li",{key:e.index,staticClass:"flex justify-between px-4 py-4 notification cursor-pointer"},[s("div",{staticClass:"flex items-start"},[s("feather-icon",{attrs:{icon:e.icon,svgClasses:["text-"+e.category,"stroke-current mr-1 h-6 w-6"]}}),t._v(" "),s("div",{staticClass:"mx-2"},[s("span",{staticClass:"font-medium block notification-title",class:["text-"+e.category]},[t._v(t._s(e.title))]),t._v(" "),s("small",[t._v(t._s(e.msg))])])],1),t._v(" "),s("small",{staticClass:"mt-1 whitespace-no-wrap"},[t._v(t._s(t.elapsedTime(e.time)))])])})),0)]),t._v(" "),s("div",{staticClass:"\n      checkout-footer\n      fixed\n      bottom-0\n      rounded-b-lg\n      text-primary\n      w-full\n      p-2\n      font-semibold\n      text-center\n      border\n      border-b-0\n      border-l-0\n      border-r-0\n      border-solid\n      d-theme-border-grey-light\n      cursor-pointer"},[s("span",[t._v("View All Notifications")])])],1)],1)}),[],!1,null,null,null);e.default=a.exports}}]);