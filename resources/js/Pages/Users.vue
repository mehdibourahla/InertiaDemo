<template>
    <Layout>
        Plenty of users

        <div style="margin-top: 400px">
            <Link preserveScroll as="button"> Refresh</Link>
            {{ time }}
        </div>
    </Layout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";
import Layout from "../Shared/Layout.vue";

export default {
    props: {
        time: {
            type: String,
            default: "",
        },
    },
    components: { Link, Layout },
};
</script>

<style></style>
