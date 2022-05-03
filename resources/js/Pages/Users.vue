<template>
    <div>
        Plenty of users

        <div style="margin-top: 400px">
            <Link preserveScroll as="button"> Refresh</Link>
            {{ time }}
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import Layout from "../Shared/Layout.vue";

export default {
    layout: Layout,
    components: { Link },
    props: {
        time: {
            type: String,
            default: "",
        },
    },
};
</script>

<style></style>
