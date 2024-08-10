var animation = lottie.loadAnimation({
    container: document.getElementById('lottie-animation'), // The container element
    renderer: 'html', // Use 'svg', 'canvas', or 'html' as the renderer
    loop: true, // Set to 'true' if you want the animation to loop
    autoplay: true, // Set to 'true' if you want the animation to start automatically
    path: 'resources/Animation - 1723227175139.json' // Path to your JSON animation file
});

animation.setSpeed(0.5); // Set the playback speed
animation.setDirection(1); // 1 for forward, -1 for reverse

