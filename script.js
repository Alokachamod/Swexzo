
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.scroll-animate').forEach(element => {
        observer.observe(element);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.animate-step');
    
    function checkScroll() {
        steps.forEach(step => {
            const stepTop = step.getBoundingClientRect().top;
            const triggerBottom = window.innerHeight * 0.8;
            
            if (stepTop < triggerBottom) {
                step.classList.add('visible');
            }
        });
    }
    
    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Check on initial load
});

window.addEventListener("load", function() {
    const preloader = document.getElementById("preloader");
    const content = document.getElementById("content");

    preloader.style.display = "none"; // Hide the preloader
    content.style.display = "block"; // Show the content
});

