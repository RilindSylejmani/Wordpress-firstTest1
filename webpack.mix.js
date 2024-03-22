let mix = require('laravel-mix');

mix.js('index.js', 'dist').setPublicPath('dist');

mix.sass('scss/index.scss', 'dist').options({
    processCssUrls: false,
});

if (mix.inProduction()) {
    mix.version();
} else {
    mix.sourceMaps();
}

mix.disableNotifications();
