<template>
    <div>
        <nav>
            <ul>
                <li><Link href="/">Welcome</Link></li>
                <li><Link href="/users">Users</Link></li>
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
};
</script>

<style></style>
