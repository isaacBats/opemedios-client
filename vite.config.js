import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/flags.css',
                'resources/css/meanmenu.css',
                'resources/css/boxicons.min.css',
                'resources/css/aos.css',
                'resources/css/slick.css',
                'resources/css/style.css',
                'resources/js/app.js',
                'resources/js/vendor/modernizr.js',
                'resources/js/html5/respond.min.js',
                'resources/js/jquery.js',
                'resources/js/vendor/bootstrap.bundle.js',
                'resources/js/vendor/jquery.meanmenu.js',
                'resources/js/vendor/jquery.flagstrap.min.js',
                'resources/js/vendor/aos.js',
                'resources/js/vendor/slick.min.js',
                'resources/js/vendor/easing.js',
                'resources/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
