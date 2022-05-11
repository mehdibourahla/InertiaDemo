import Vue from "vue";
import { createInertiaApp, Head, Link } from "@inertiajs/inertia-vue";

createInertiaApp({
    resolve: async (name) => (await import(`./Pages/${name}`)).default,
    setup({ el, App, props, plugin }) {
        Vue.use(plugin);
        Vue.component("Link", Link);
        Vue.component("Head", Head);

        new Vue({
            render: (h) => h(App, props),
        }).$mount(el);
    },
});
