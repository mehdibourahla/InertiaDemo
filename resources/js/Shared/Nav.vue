<template>
    <div>
        <nav>
            <ul>
                <li><Link href="/">Welcome</Link></li>
                <li><Link href="/users">Users</Link></li>
                <li>
                    <Link
                        method="post"
                        :data="fakeData"
                        as="button"
                        href="/logout"
                        >Logout</Link
                    >
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue";

export default {
    components: {
        Link,
    },
    data() {
        return {
            fakeData: ["one", "two", "three"],
        };
    },
};
</script>

<style></style>
