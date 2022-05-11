<template>
    <div>
        <Head title="Page" />
        <Nav></Nav>
        Hi {{ username }}
        <slot />
    </div>
</template>

<script>
import Nav from "./Nav.vue";
export default {
    components: { Nav },
    computed: {
        username() {
            return this.$page.props.auth.user.username;
        },
    },
};
</script>

<style></style>
