<template>
    <div>
        <Head>
            <title>Create a new User</title>
        </Head>

        <h2>Create a new User</h2>
        <form @submit.prevent="submit">
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    v-model="form.name"
                    name="name"
                    id="name"
                    class="form-control"
                />
            </div>
            <div v-if="form.errors.name" v-text="form.errors.name"></div>
            <div class="form-group">
                <label for="email">Email</label>
                <input
                    v-model="form.email"
                    type="text"
                    name="email"
                    id="email"
                    class="form-control"
                />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input
                    v-model="form.password"
                    type="password"
                    name="password"
                    id="password"
                    class="form-control"
                />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
import Layout from "../../Shared/Layout.vue";
export default {
    layout: Layout,

    data() {
        return {
            form: this.$inertia.form({
                email: null,
                password: null,
                name: null,
            }),
        };
    },

    methods: {
        submit() {
            this.form.post("/users");
        },
    },
};
</script>

<style></style>
