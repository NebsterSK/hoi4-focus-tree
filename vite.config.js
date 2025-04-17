import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import sass from 'vite-plugin-sass';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.sass',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        sass({
            sassOptions: {
                indentedSyntax: true
            }
        })
    ],
});
