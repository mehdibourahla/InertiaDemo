<template>
    <Layout> Welcome {{ name }} </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";
export default {
    components: { Layout },
    props: {
        name: {
            type: String,
            required: true,
        },
    },
};
</script>

<style></style>
