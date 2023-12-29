const mix = require('laravel-mix');
const { VitePlugin } = require('laravel-mix-vite');

mix.extend('vite', new VitePlugin());

mix.vite('resources/js/app.js');
