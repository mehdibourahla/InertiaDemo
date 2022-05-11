<template>
    <div>
        <Head>
            <title>Users</title>
        </Head>
        Plenty of users

        <div style="margin-top: 400px">
            <Link preserveScroll as="button"> Refresh</Link>
            {{ time }}
        </div>
    </div>
</template>

<script>
import Layout from "../Shared/Layout.vue";

export default {
    layout: Layout,
    props: {
        time: {
            type: String,
            default: "",
        },
    },
};
</script>

<style></style>
