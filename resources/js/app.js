require('./bootstrap');
// En tu app.js o al final del body
document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('video-background');
    
    // Reiniciar el video si se detiene (solución para algunos navegadores móviles)
    video.addEventListener('ended', function() {
        this.currentTime = 0;
        this.play();
    }, false);
    
    // Forzar reproducción en algunos navegadores móviles
    document.body.addEventListener('click', function() {
        video.play();
    });
});