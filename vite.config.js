import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: 'watashitravel.test', // Sesuaikan domain lokal kamu
        https: false
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/home.js' // pastikan file ini memang ada
            ],
            refresh: true,
        }),
    ],
});
