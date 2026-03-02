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

        var words = ['Customizable', 'Perfected', 'Simplified'];
        var wordIndex = 0;
        var charIndex = 0;
        var isDeleting = false;
        var cycleCount = 0;

        function typeStep() {
            var current = words[wordIndex];

            if (isDeleting) {
                charIndex--;
                el.textContent = current.substring(0, charIndex);

                if (charIndex === 0) {
                    isDeleting = false;
                    wordIndex++;
                    if (wordIndex >= words.length) {
                        wordIndex = 0;
                        cycleCount++;
                    }
                    setTimeout(typeStep, 250);
                    return;
                }
                setTimeout(typeStep, 35);
            } else {
                charIndex++;
                el.textContent = current.substring(0, charIndex);

                if (charIndex === current.length) {
                    // Stop on "Simplified" after one full cycle
                    if (wordIndex === words.length - 1 && cycleCount >= 1) {
                        el.classList.add('typed-done');
                        return;
                    }
                    setTimeout(function () {
                        isDeleting = true;
                        typeStep();
                    }, 1800);
                    return;
                }
                setTimeout(typeStep, 70);
            }
        }

        setTimeout(function () {
            el.textContent = '';
            typeStep();
        }, 600);
    }

    /* ---- Accordion ---- */
    function initAccordion() {
        // Each accordion group works independently
        var accordions = document.querySelectorAll('.accordion');
        accordions.forEach(function (accordion) {
            var items = accordion.querySelectorAll('[data-accordion]');
            items.forEach(function (item) {
                var trigger = item.querySelector('.accordion-trigger');
                if (!trigger) return;

                trigger.addEventListener('click', function () {
                    var isActive = item.classList.contains('active');

                    // Close siblings within same accordion
                    items.forEach(function (other) {
                        other.classList.remove('active');
                        var ot = other.querySelector('.accordion-trigger');
                        if (ot) ot.setAttribute('aria-expanded', 'false');
                    });

                    if (!isActive) {
                        item.classList.add('active');
                        trigger.setAttribute('aria-expanded', 'true');
                    }
                });
            });
        });
    }

    /* ---- FAQ Tabs ---- */
    function initFaqTabs() {
        var tabContainer = document.getElementById('faq-tabs');
        if (!tabContainer) return;

        var buttons = tabContainer.querySelectorAll('.faq-tab-btn');
        var panels = tabContainer.querySelectorAll('.faq-panel');

        buttons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var target = btn.getAttribute('data-tab');

                buttons.forEach(function (b) { b.classList.remove('active'); });
                panels.forEach(function (p) { p.classList.remove('active'); });

                btn.classList.add('active');
                var panel = tabContainer.querySelector('[data-panel="' + target + '"]');
                if (panel) panel.classList.add('active');
            });
        });
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
        initAccordion();
        initFaqTabs();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
