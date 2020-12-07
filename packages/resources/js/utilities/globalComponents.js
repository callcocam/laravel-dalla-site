/*=========================================================================================
  File Name: globalComponents.js
  Description: Here you can register components globally
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/


import Vue from 'vue'

import { HasError, AlertError } from 'vform'

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VxTooltip from '@/layouts/components/vx-tooltip/VxTooltip.vue'
import VxCard  from '@/components/vx-card/VxCard.vue'
import VxAutoSuggest  from '@/components/vx-auto-suggest/VxAutoSuggest.vue'
//import VxList  from '@/components/vx-list/VxList.vue'
import VxBreadcrumb  from '@/layouts/components/VxBreadcrumb.vue'
import FeatherIcon  from '@/components/FeatherIcon.vue'
import VxInputGroup  from '@/components/vx-input-group/VxInputGroup.vue'
import PaginationComponent  from '@/components/PaginationComponent.vue'
import FiltersComponent  from '@/components/FiltersComponent.vue'


import CKEditor from '@ckeditor/ckeditor5-vue';

Vue.use( CKEditor );

Vue.component(FiltersComponent.name, FiltersComponent)
Vue.component(PaginationComponent.name, PaginationComponent)
Vue.component(VxAutoSuggest.name, VxAutoSuggest)
Vue.component(VxTooltip.name, VxTooltip)
Vue.component(VxCard.name, VxCard)
//Vue.component(VxList.name, VxList)
Vue.component(VxBreadcrumb.name, VxBreadcrumb)
Vue.component(FeatherIcon.name, FeatherIcon)
Vue.component(VxInputGroup.name, VxInputGroup)

// v-select component
import vSelect from 'vue-select'

// Set the components prop default to return our fresh components
vSelect.props.components.default = () => ({
  Deselect: {
    render: createElement => createElement('feather-icon', {
      props: {
        icon: 'XIcon',
        svgClasses: 'w-4 h-4 mt-1'
      }
    }),
  },
  OpenIndicator: {
    render: createElement => createElement('feather-icon', {
      props: {
        icon: 'ChevronDownIcon',
        svgClasses: 'w-5 h-5'
      }
    }),
  },
});

Vue.component('v-select',vSelect)

const files = require.context('@/components/auto-loads/', true, /\.vue$/i)
files.keys().map(key => {
    //console.log(key)
   Vue.component(key.split('/').pop().split('.')[0], files(key).default)
})
