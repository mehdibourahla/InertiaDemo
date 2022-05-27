<template>
    <div>
        <Head>
            <title>Users</title>
        </Head>
        <h2>Plenty of users</h2>

        <input type="text" placeholder="Search..." v-model="search" />
        <Link href="/users/create">New User</Link>

        <ul>
            <li v-for="user in users.data" :key="user.id">
                {{ user.name }}
            </li>
        </ul>
        <Pagination :pages="users.links" />
    </div>
</template>

<script>
import Layout from "../../Shared/Layout.vue";
import Pagination from "../../Shared/Pagination.vue";
import { Inertia } from "@inertiajs/inertia";
import { debounce } from "lodash";

export default {
    components: { Pagination },

    layout: Layout,

    props: {
        users: {
            type: Object,
            default: null,
        },
        filters: {
            type: Object,
            default: null,
        },
    },

    data() {
        return {
            search: this.filters.search,
        };
    },

    methods: {
        searchUsers(keyword) {
            Inertia.get(
                "/users",
                {
                    search: keyword,
                },
                {
                    preserveState: true,
                    replace: true,
                }
            );
        },
    },

    watch: {
        search: {
            handler: debounce(function (keyword) {
                this.searchUsers(keyword);
            }, 500),
        },
    },
};
</script>

<style></style>
