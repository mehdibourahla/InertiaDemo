<template>
    <div>
        <h1>Hi {{ username }}!</h1>
        <Head title="Page" />
        <Nav></Nav>
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
