<template>
    <div>
        <h1>Login</h1>
        <form @submit.prevent="submit">
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
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    layout: null,

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
            this.form.post("/login");
        },
    },
};
</script>

<style></style>
