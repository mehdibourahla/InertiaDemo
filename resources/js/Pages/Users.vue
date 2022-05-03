<template>
    <div>
        Plenty of users
        <Nav></Nav>

        <div style="margin-top: 400px">
            <Link preserveScroll as="button"> Refresh</Link>
            {{ time }}
        </div>
    </div>
</template>

<script>
import Nav from "../Shared/Nav.vue";
import { Link } from "@inertiajs/inertia-vue";

export default {
    props: {
        time: {
            type: String,
            default: "",
        },
    },
    components: { Nav, Link },
};
</script>

<style></style>
