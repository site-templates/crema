/*
    Crema — the site's small behavior layer.

    - .js on <html> gates the reveal system (no JS, nothing is ever hidden)
    - IntersectionObserver flips .is-visible on [data-reveal]
    - the header takes its surface once the page scrolls off the top
    - the mobile menu toggles .menu-open on <html>
*/
(function () {
    document.documentElement.classList.add('js');

    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Reveal on scroll
    var revealed = document.querySelectorAll('[data-reveal]');
    if (reduceMotion || !('IntersectionObserver' in window)) {
        revealed.forEach(function (el) { el.classList.add('is-visible'); });
    } else {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });
        revealed.forEach(function (el) { observer.observe(el); });
    }

    // The header takes its surface once the page leaves the top
    var header = document.getElementById('header');
    if (header) {
        var onScroll = function () {
            if (window.scrollY > 8) {
                header.setAttribute('data-scrolled', '');
            } else {
                header.removeAttribute('data-scrolled');
            }
        };
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    // Mobile menu
    var menuButton = document.querySelector('[data-menu-button]');
    if (menuButton) {
        menuButton.addEventListener('click', function () {
            var open = document.documentElement.classList.toggle('menu-open');
            menuButton.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        document.querySelectorAll('[data-mobile-panel] a').forEach(function (link) {
            link.addEventListener('click', function () {
                document.documentElement.classList.remove('menu-open');
                menuButton.setAttribute('aria-expanded', 'false');
            });
        });
    }
})();
