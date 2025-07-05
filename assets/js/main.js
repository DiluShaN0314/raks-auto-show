// Simple countdown (update date as needed)
document.addEventListener("DOMContentLoaded", function () {
     const loader = document.getElementById('loader-wrapper');
    loader.style.opacity = '0';
    setTimeout(() => {
      loader.style.display = 'none';
    }, 2500);

    function showLoaderBeforeRedirect(e) {
        e.preventDefault();
        document.getElementById('loader-wrapper').style.display = 'flex';
        setTimeout(() => {
        window.location.href = e.target.href;
        }, 2500); // short delay
        return false;
    }

    const eventDate = new Date("2025-07-25T10:00:00"); // update to your event date

    function updateCountdown() {
        const now = new Date();
        const diff = eventDate - now;

        if (diff <= 0) return;

        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((diff / (1000 * 60)) % 60);
        const seconds = Math.floor((diff / 1000) % 60);

        document.getElementById("days") && (document.getElementById("days").textContent = String(days).padStart(2, '0'));
        document.getElementById("hours") && (document.getElementById("hours").textContent = String(hours).padStart(2, '0'));
        document.getElementById("minutes") && (document.getElementById("minutes").textContent = String(minutes).padStart(2, '0'));
        document.getElementById("seconds") && (document.getElementById("seconds").textContent = String(seconds).padStart(2, '0'));
    }

    setInterval(updateCountdown, 1000);
    updateCountdown();

    const swiper = new Swiper('.swiper', {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const toggleBtn = document.getElementById("toggle-dark-mode");
    toggleBtn?.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
        localStorage.setItem("theme", document.body.classList.contains("dark-mode") ? "dark" : "light");
    });

    // Apply saved theme
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-mode");
    }

    const hamburger = document.getElementById('hamburger');
    const navbar = document.querySelector('.navbar');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navbar.classList.toggle('show');
    });
});
