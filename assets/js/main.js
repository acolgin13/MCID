/**
 * MyCourseID Theme - Main JavaScript
 */
(function () {
    'use strict';

    /* ---- Sticky Header ---- */
    var header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 40) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }, { passive: true });
    }

    /* ---- Mobile Menu Toggle ---- */
    var menuToggle = document.getElementById('menu-toggle');
    var mainNav = document.getElementById('main-nav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function () {
            menuToggle.classList.toggle('active');
            mainNav.classList.toggle('active');
            document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
        });

        mainNav.querySelectorAll('a:not(.btn)').forEach(function (link) {
            link.addEventListener('click', function () {
                menuToggle.classList.remove('active');
                mainNav.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    /* ---- Hero Text Cycling Animation ---- */
    function initHeroTyped() {
        var el = document.getElementById('hero-typed');
        if (!el) return;

        var words = ['Customizable!', 'Perfected!', 'Simplified!'];
        var wordIndex = 0;
        var charIndex = 0;
        var isDeleting = false;
        var pauseEnd = false;

        function typeStep() {
            var current = words[wordIndex];

            if (isDeleting) {
                charIndex--;
                el.textContent = current.substring(0, charIndex);

                if (charIndex === 0) {
                    isDeleting = false;
                    wordIndex++;

                    // If we've shown all words, loop back
                    if (wordIndex >= words.length) {
                        wordIndex = 0;
                    }

                    setTimeout(typeStep, 300);
                    return;
                }
                setTimeout(typeStep, 40);
            } else {
                charIndex++;
                el.textContent = current.substring(0, charIndex);

                if (charIndex === current.length) {
                    // If this is "Simplified!" (last word) on its final cycle, stop
                    if (wordIndex === words.length - 1 && pauseEnd) {
                        // Stop cycling — keep "Simplified!" displayed
                        el.classList.add('typed-done');
                        return;
                    }

                    // If this is the last word finishing its first pass, mark for final stop on next full cycle
                    if (wordIndex === words.length - 1) {
                        pauseEnd = true;
                    }

                    // Pause then delete
                    setTimeout(function () {
                        isDeleting = true;
                        typeStep();
                    }, 2000);
                    return;
                }
                setTimeout(typeStep, 80);
            }
        }

        // Start after a brief delay
        setTimeout(function () {
            el.textContent = '';
            typeStep();
        }, 800);
    }

    /* ---- Scroll Reveal ---- */
    function initReveal() {
        var reveals = document.querySelectorAll('.reveal');
        if (!reveals.length) return;

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        reveals.forEach(function (el) {
            observer.observe(el);
        });
    }

    /* ---- Smooth scroll for anchor links ---- */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if (targetId === '#') return;
            var target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                var headerOffset = 80;
                var elementPosition = target.getBoundingClientRect().top;
                var offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    /* ---- Init ---- */
    function init() {
        initReveal();
        initHeroTyped();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
