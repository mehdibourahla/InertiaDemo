<template>
    <div>
        <nav>
            <ul>
                <li><Link href="/">Welcome</Link></li>
                <li><Link href="/users">Users</Link></li>
                <li>
                    <Link method="post" href="/logout">Logout</Link>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    data() {
        return {
            fakeData: ["one", "two", "three"],
        };
    },
};
</script>

<style></style>
