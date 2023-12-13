import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/scss/demo-b.scss',
                'resources/scss/sandbox.scss',
                'resources/js/app.js',
                'resources/js/demo-b.js',
                'resources/js/sandbox.js'
            ],
            refresh: true,
        }),
    ],
});
