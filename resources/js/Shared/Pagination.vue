<template>
    <div>
        <Link
            v-for="page in pages"
            :key="page.url"
            :href="page.url"
            v-html="page.label"
        >
        </Link>
    </div>
</template>

<script>
export default {
    props: {
        pages: {
            type: Array,
            default: () => [],
        },
    },
};
</script>

<style></style>
