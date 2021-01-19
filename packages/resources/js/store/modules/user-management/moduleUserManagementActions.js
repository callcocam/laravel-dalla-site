/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
import axios from "@/utilities/axios";

export default {
    async all(context, payload) {
        context.dispatch("clear_data");
        context.commit("SET_TEMPLATE", "DefaultComponent");
        const { url, params } = payload;

        let response = await axios.get(url, {
            params: params
        });

        return context.dispatch("set_data", response.data);
    },

    async find(context, payload) {
        context.dispatch("clear_data");

        const { url, params } = payload;

        let response = await axios.get(url, {
            params: params
        });
        context.dispatch("set_data", response.data);

        return response;
    },

    async show(context, payload) {
        context.dispatch("clear_data");
        context.commit("SET_TEMPLATE", 'LoadComponent');
        const { url, params } = payload;

        let response = await axios.get(url, {
            params: params
        });
        context.dispatch("set_data", response.data);
        dd(response.data.data.template, 'show')
        if (response.data.data.template) {
            context.commit("SET_TEMPLATE", response.data.data.template);
        }

        return response;
    },

    async removeRecord({ commit }, payload) {
        const { url, params, id } = payload;

        dd("delete", payload);
        dd("url", url.replace("_id_", id));
        let response = await axios.delete(url.replace("_id_", id), {
            params: params
        });

        return response;
    },

    async fetchUser({ commit }, payload) {
        commit("SET_USER", []);
        const { url, params } = payload;

        let { data } = await axios.get(url, {
            params: params
        });
        commit("SET_USER", data.data);
        commit("SET_ACTIONS", data.data);

        if (data.data.template) {
            commit("SET_TEMPLATE", data.data.template);
        }

        return data;
    },

    async fetchCompany({ commit }, payload) {
        commit("SET_COMPANY", []);
        commit("SET_TENANT", []);

        const { url, params } = payload;

        let { data } = await axios.get(url, {
            params: params
        });

        if (data.data.template) commit("SET_TEMPLATE", data.data.template);

        commit("SET_COMPANY", data.data.companies.value);
        commit("SET_TENANT", data.data);
        commit("SET_ACTIONS", data.data);
    },

    async fetchAccessToken({ commit }) {
        let { data } = await axios.post("/api/v1/refresh");

        return data;
    },
    clear_data({ commit }) {
        console.log("clear_data");
        commit("SET_ROWS", []);
        commit("SET_QUERY", []);
        commit("SET_ACTIONS", []);
        commit("SET_META", []);
        commit("SET_OPTIONS", []);
        commit("SET_HEADERS", []);
        commit("SET_NAVIGATIONS", []);
        commit("SET_TEMPLATE", "DefaultComponent");
    },
    set_data({ commit }, response) {
        const {
            actions,
            options,
            navigations,
            data,
            filters,
            meta,
            template,
            headers
        } = response;
        dd("set_data", {
            actions,
            options,
            data,
            navigations,
            filters,
            meta,
            template,
            headers
        });
        commit("SET_ROWS", data);
        commit("SET_META", meta);
        commit("SET_ACTIONS", actions);
        commit("SET_HEADERS", headers);
        commit("SET_NAVIGATIONS", navigations);
        commit("SET_FILTERS", filters);
        commit("SET_OPTIONS", options);
        if (template) commit("SET_TEMPLATE", template);

        return meta;
    }
};
