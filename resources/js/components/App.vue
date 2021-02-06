<template>
    <div class="flex flex-column flex-1 h-screen overflow-y-hidden">
        <Nav />
        <router-view></router-view>
    </div>
</template>

<script>
    import Nav from './Nav';

    export default {
        name: "App",

        components: {
            Nav
        }
    }
</script>
