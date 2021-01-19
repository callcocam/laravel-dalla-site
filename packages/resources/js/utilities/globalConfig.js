import auth from "@/utilities/auth"

window.auth = auth;

import axios from "@/utilities/plugins/axios"

window.axios = axios;

import * as moment from 'moment';

import 'moment/locale/pt-br';

moment.locale('pt-BR');

window.dd=(log,text="DD")=>{
    console.log(text, log)
}
