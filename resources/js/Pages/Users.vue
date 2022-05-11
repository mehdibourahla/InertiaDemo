<template>
    <div>
        <Head>
            <title>Users</title>
        </Head>
        Plenty of users

        <ul>
            <li v-for="user in users.data" :key="user.id">
                {{ user.name }}
            </li>
        </ul>
        <Pagination :pages="users.links" />
    </div>
</template>

<script>
import Layout from "../Shared/Layout.vue";
import Pagination from "../Shared/Pagination.vue";

export default {
    components: { Pagination },
    layout: Layout,
    props: {
        users: {
            type: Object,
            default: null,
        },
    },
};
</script>

<style></style>
