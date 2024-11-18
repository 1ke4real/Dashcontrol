import { defineConfig } from "vite";
import symfonyPlugin from "vite-plugin-symfony";
import vue from '@vitejs/plugin-vue'
export default defineConfig({
    plugins: [
        vue(),
        symfonyPlugin(),
    ],
    build: {
        outDir: "public/build",
        rollupOptions: {
            input: {
                app: "./assets/js/app.js"
            },
        }
    },
});
