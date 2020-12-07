/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

export default {
    getErrors: state => {
        return state.errors;
    },
    getAll: state => {
        return state.rows;
    },

    getFind: state => {
        return state.rows;
    },

    getMeta: state => {
        return state.meta;
    },

    getHeaders: state => {
        return state.headers;
    },

    getNavigations: state => {
        return state.navigations;
    },

    getActions: state => {
        return state.actions;
    },

    getFilters: state => {
        return state.filters;
    },

    getOptions: state => {
        return state.options;
    },

    getCards: state => {
        return state.rows.cards;
    },

    getQuery: state => {
        return state.rows.query;
    },

    getResults: state => {
        return state.results;
    },

    getTemplate: state => {
        return state.template;
    },

    getCompany: state => {
        return state.company;
    },

    getTenant: state => {
        return state.tenant;
    },

    getUser: state => {
        return state.user;
    },

    getActions: state => {
        return state.actions;
    }
};
