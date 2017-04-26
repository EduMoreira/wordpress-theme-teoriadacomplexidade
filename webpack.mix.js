/*
 * Copyright (c) 2017 Publicity Midias. All rights reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 *
 * Todos os direitos reservados à Publicity Midias.
 * É estritamente proibido qualquer cópia não autorizada deste arquivo por qualquer meio.
 * Conteúdo proprietário e confidencial.
 */

const { mix } = require('laravel-mix');

mix.options({ processCssUrls: false });
mix.autoload({});
mix.browserSync({
     proxy: 'dev.teoriadacomplexidade.com.br'
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.less('resources/assets/less/style.less', 'style.css');
mix.scripts([
    'resources/assets/js/vendor/jquery.mobile.touch.js',
    'resources/assets/js/carousel.js',
    'resources/assets/js/menu.js',
    'resources/assets/js/bootstrap.js', 
],  'js/website.min.js');