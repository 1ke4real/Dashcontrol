<template>

    <div class="bg-gray-50 dark:bg-gray-900">
        <ThemeToggleButton />
        <router-view />
    </div>
</template>

<script>
import ThemeToggleButton from './components/ThemeToogleButton.vue'

export default {
    name: 'App',
    components: {ThemeToggleButton},
    data() {
        return {

        }
    },
    watch: {

    },
    mounted() {
        this.$router.push({ name: 'Home' });
    },

}
</script>

<style>
</style>