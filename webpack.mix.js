const mix = require('laravel-mix');

mix.sass('public/assets/css/app.scss', 'public/css')
   .js('public/assets/js/app.js', 'public/js')
   .copyDirectory('public/assets/fonts', 'public/fonts')
   .copyDirectory('public/assets/images', 'public/images')
   .copyDirectory('public/assets/libs', 'public/libs');
