const mix = require('laravel-mix');

// Compilar CSS
mix.css('resources/css/styles.css', 'public/css');

// Compilar JavaScript
mix.js('resources/js/app.js', 'public/js');

// Habilitar recarga automática (opcional)
mix.browserSync('127.0.0.1:8000');

// Activar notificaciones (opcional)
mix.disableNotifications();
