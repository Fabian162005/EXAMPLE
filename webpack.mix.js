const mix = require('laravel-mix');

// Compilar JavaScript y Bootstrap
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css') // Compila Bootstrap desde SASS
   .postCss('resources/css/styles.css', 'public/css');

// Habilitar recarga automática (opcional)
mix.browserSync('127.0.0.1:8000');

// Desactivar notificaciones de compilación (opcional)
mix.disableNotifications();

