/*=========================================================================================
  File Name: sidebarItems.js
  Description: Sidebar Items list. Add / Remove menu items from here.
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Pixinvent
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
import axios from "@/utilities/axios";

import EventEmitter from "events";
// 'loggedIn' is used in other parts of application. So, Don't forget to change there also
class MenuService extends EventEmitter {
    _get(url = "/api/v1/load-menus") {
        return axios.get(url);
    }
}

export default new MenuService();
