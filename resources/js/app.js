import Vue from "vue";
import { createInertiaApp, Head, Link } from "@inertiajs/inertia-vue";
import Layout from "./Shared/Layout";

createInertiaApp({
    resolve: async (name) => {
        let page = require(`./Pages/${name}`).default;

        if (page === undefined) {
            page = Layout;
        }

        return page;
    },
    title: (title) => "My app | " + title,
    setup({ el, App, props, plugin }) {
        Vue.use(plugin);
        Vue.component("Link", Link);
        Vue.component("Head", Head);

        new Vue({
            render: (h) => h(App, props),
        }).$mount(el);
    },
});
