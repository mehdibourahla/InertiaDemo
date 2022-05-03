<template>
    <div>Welcome {{ name }}</div>
</template>

<script>
import Layout from "../Shared/Layout.vue";
export default {
    layout: Layout,
    props: {
        name: {
            type: String,
            required: true,
        },
    },
};
</script>

<style></style>
