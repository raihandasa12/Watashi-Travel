document.addEventListener('DOMContentLoaded', () => {
    console.log("Home.js connected!");
    // Tambahkan logika kamu di sini
});

document.addEventListener('DOMContentLoaded', () => {
    const langOptions = document.querySelectorAll('.lang-option');
    langOptions.forEach(option => {
        option.addEventListener('click', function (e) {
            e.preventDefault(); // Mencegah link reload
            langOptions.forEach(o => o.classList.remove('active'));
            this.classList.add('active');
        });
    });
});

// =======================
// Destination Slider
// =======================
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelectorAll('.prev-btn');
    const nextBtn = document.querySelectorAll('.next-btn');
    const slidesPerPage = 3;
    let currentIndex = 0;

    function updateSlider() {
        const slideWidth = slides[0].offsetWidth + 20;
        const offset = -currentIndex * slideWidth;
        slider.style.transform = `translateX(${offset}px)`;

        prevBtn.forEach(btn => btn.disabled = currentIndex === 0);
        nextBtn.forEach(btn => btn.disabled = currentIndex >= slides.length - slidesPerPage);
    }

    prevBtn.forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });
    });

    nextBtn.forEach(btn => {
        btn.addEventListener('click', () => {
            if (currentIndex < slides.length - slidesPerPage) {
                currentIndex++;
                updateSlider();
            }
        });
    });

    window.addEventListener('load', updateSlider);
    window.addEventListener('resize', updateSlider);
});

// =======================
// Learn More Button
// =======================
document.addEventListener('DOMContentLoaded', () => {
    const learnMoreBtn = document.querySelector('.learn-more-btn');
    if (learnMoreBtn) {
        learnMoreBtn.addEventListener('click', function (e) {
            e.preventDefault();
            alert('Learn more about our travel packages!');
            // window.location.href = '/packages';
        });
    }
});

// =======================
// Testimonials Navigation
// =======================
document.addEventListener('DOMContentLoaded', () => {
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    const dots = document.querySelectorAll('.slider-dots .dot');

    if (prevButton && nextButton) {
        prevButton.addEventListener('click', () => {
            console.log('Prev button clicked');
        });
        nextButton.addEventListener('click', () => {
            console.log('Next button clicked');
        });
    }

    if (dots.length > 0) {
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                console.log(`Dot ${index + 1} clicked`);
            });
        });
    }
});

// =======================
// Footer Quick Links & Social Media
// =======================
document.addEventListener('DOMContentLoaded', () => {
    const quickLinks = document.querySelectorAll('.wt-middle a');
    quickLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const page = link.getAttribute('data-link');
            alert(`Navigating to ${page} page!`);
        });
    });

    const socialLinks = document.querySelectorAll('.wt-right a');
    socialLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const social = link.getAttribute('data-social');
            const socialUrls = {
                facebook: 'https://www.facebook.com/watashioutdoor',
                instagram: 'https://www.instagram.com/watashitravel?igsh=cG9rMXk0dDl1dWd3',
                youtube: 'https://youtube.com',
                whatsapp: 'https://wa.me/6282224222080'
            };
            if (social && socialUrls[social]) {
                window.open(socialUrls[social], '_blank');
            }
        });
    });
});

// =======================
// Footer Policy Links
// =======================
document.addEventListener('DOMContentLoaded', () => {
    const policyLinks = document.querySelectorAll('.wt-links a');
    policyLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const policy = link.getAttribute('data-policy');
            alert(`Opening ${policy} page!`);
        });
    });
});


