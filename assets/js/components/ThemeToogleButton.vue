<template>
    <div class="fixed top-4 right-4">
        <button
            id="theme-toggle"
            type="button"
            class="flex items-center justify-center w-12 h-6 bg-gray-200 dark:bg-gray-800 rounded-full p-1 transition-colors duration-300"
            @click="toggleTheme"
        >
            <svg
                v-if="!isDarkMode"
                class="w-4 h-4 text-gray-600"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>

            <svg
                v-else
                class="w-4 h-4 text-gray-600"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                ></path>
            </svg>
        </button>
    </div>
</template>
<script>
export default {
    name: "ThemeToggleButton",
    data() {
        return {
            isDarkMode: false,
        };
    },
    methods: {
        toggleTheme() {
            this.isDarkMode = !this.isDarkMode;
            if (this.isDarkMode) {
                document.documentElement.classList.add("dark");
                localStorage.setItem("theme", "dark");
            } else {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("theme", "light");
            }
        },
        initializeTheme() {
            const storedTheme = localStorage.getItem("theme");
            if (
                storedTheme === "dark" ||
                (!storedTheme &&
                    window.matchMedia("(prefers-color-scheme: dark)").matches)
            ) {
                this.isDarkMode = true;
                document.documentElement.classList.add("dark");
            } else {
                this.isDarkMode = false;
                document.documentElement.classList.remove("dark");
            }
        },
    },
    mounted() {
        this.initializeTheme();
    },
};
</script>
<style scoped>
button {
    position: relative;
}
button svg {
    transition: transform 0.3s ease-in-out;
}
</style>