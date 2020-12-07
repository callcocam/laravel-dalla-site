/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

export  default {

    SET_ROWS( state, payload){

        state.rows = payload

    },

    SET_FIND( state, payload ){

        state.rows = payload

    },

    SET_QUERY( state, payload ){

        state.query = payload

    },

    SET_HEADERS( state, payload ){

        state.headers = payload

    },

    SET_FILTERS( state, payload ){

        state.filters = payload

    },

    SET_OPTIONS( state, payload ){

        state.options = payload

    },

    SET_RESULTS( state, payload ){

        state.results = payload

    },

    SET_TEMPLATE( state, payload ){

        state.template = payload

    },

    SET_META( state, payload ){

        state.meta = payload

    },

    SET_NAVIGATIONS( state, payload ){

        state.navigations = payload

    },

    SET_ERROR(state, payload) {

        state.errors = payload;

    },

    SET_COMPANY(state, payload) {

        state.company = payload;

    },

    SET_TENANT(state, payload) {

        state.tenant = payload;

    },

    SET_USER(state, payload) {

        state.user = payload;

    },

    SET_ACTIONS(state, payload) {

        state.actions = payload;

    }
}
