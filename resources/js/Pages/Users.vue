<template>
    <div>
        <Head>
            <title>Users</title>
        </Head>
        Plenty of users

        <ul>
            <li v-for="user in users" :key="user.id">
                {{ user.name }}
            </li>
        </ul>
    </div>
</template>

<script>
import Layout from "../Shared/Layout.vue";

export default {
    layout: Layout,
    props: {
        users: {
            type: Array,
            default: () => [],
        },
    },
};
</script>

<style></style>
