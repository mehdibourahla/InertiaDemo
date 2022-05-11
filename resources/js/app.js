import Vue from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue";

createInertiaApp({
    resolve: async (name) => (await import(`./Pages/${name}`)).default,
    setup({ el, App, props, plugin }) {
        Vue.use(plugin);

        new Vue({
            render: (h) => h(App, props),
        }).$mount(el);
    },
});
