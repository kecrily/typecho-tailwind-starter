const mix = require('laravel-mix');
require('laravel-mix-tailwind');

mix
  .setPublicPath('./assets')
  .css('sources/css/style.css', 'css')
  .tailwind('tailwind.config.js')
  .browserSync({
    proxy: '127.0.0.1',
    injectChanges: true,
    open: false,
    files: [
      'assets/**/*.{css,js}',
      'includes/**/*.php'
    ]
  });