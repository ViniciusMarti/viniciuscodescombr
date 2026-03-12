document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const reveals = document.querySelectorAll('.reveal');

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(252, 252, 249, 0.9)';
            navbar.style.backdropFilter = 'blur(10px)';
            navbar.style.padding = '1.2rem 0';
            navbar.style.borderBottom = '1px solid #eeeeee';
        } else {
            navbar.style.background = 'transparent';
            navbar.style.backdropFilter = 'none';
            navbar.style.padding = '2rem 0';
            navbar.style.borderBottom = 'none';
        }

        // Scroll Reveal
        reveals.forEach(reveal => {
            const windowHeight = window.innerHeight;
            const revealTop = reveal.getBoundingClientRect().top;
            const revealPoint = 100;

            if (revealTop < windowHeight - revealPoint) {
                reveal.classList.add('active');
            }
        });
    });

    // Initial check for reveals
    const checkReveals = () => {
        reveals.forEach(reveal => {
            const windowHeight = window.innerHeight;
            const revealTop = reveal.getBoundingClientRect().top;
            if (revealTop < windowHeight) {
                reveal.classList.add('active');
            }
        });
    };

    // Mobile Menu Toggle
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if (mobileMenu.classList.contains('active')) {
                icon.classList.replace('fa-bars', 'fa-times');
            } else {
                icon.classList.replace('fa-times', 'fa-bars');
            }
        });

        // Close menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                mobileToggle.querySelector('i').classList.replace('fa-times', 'fa-bars');
            });
        });
    }

    checkReveals();
});

