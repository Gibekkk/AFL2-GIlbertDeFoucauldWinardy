import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/assets/css/styles.css'
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'dist/', // Ini output build-nya ke folder public biar langsung di-serve
    },
});
