/* =====================================================================
   LS COMPUTER REPAIR — site-wide JS
   No jQuery. Vanilla ES2020+, defer-loaded.
   Depends on: SweetAlert2 (window.Swal), FontAwesome 7 (CSS).
   ===================================================================== */
(() => {
    'use strict';

    /* ---- Sticky header shadow on scroll ---- */
    const header = document.querySelector('.site-header');
    if (header) {
        const onScroll = () => {
            header.classList.toggle('scrolled', window.scrollY > 12);
        };
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ---- Mobile nav drawer ---- */
    const toggle = document.querySelector('.nav-toggle');
    const drawer = document.querySelector('.mobile-menu');
    if (toggle && drawer) {
        const close = () => {
            drawer.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.querySelector('i')?.classList.replace('fa-xmark', 'fa-bars');
            document.body.style.overflow = '';
        };
        const open = () => {
            drawer.classList.add('open');
            toggle.setAttribute('aria-expanded', 'true');
            toggle.querySelector('i')?.classList.replace('fa-bars', 'fa-xmark');
            document.body.style.overflow = 'hidden';
        };
        toggle.addEventListener('click', () => {
            drawer.classList.contains('open') ? close() : open();
        });
        drawer.querySelectorAll('a').forEach((a) => a.addEventListener('click', close));
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && drawer.classList.contains('open')) close();
        });
    }

    /* ---- Reveal-on-scroll ---- */
    const targets = document.querySelectorAll('.reveal');
    if (targets.length && 'IntersectionObserver' in window) {
        const io = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in');
                        io.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
        );
        targets.forEach((el, i) => {
            el.style.setProperty('--i', i % 6);
            io.observe(el);
        });
    } else {
        targets.forEach((el) => el.classList.add('in'));
    }

    /* ---- Update copyright year ---- */
    const yr = document.querySelector('[data-year]');
    if (yr) yr.textContent = String(new Date().getFullYear());

    /* ---- SweetAlert2 helpers ---- */
    const ensureSwal = () =>
        typeof window.Swal !== 'undefined'
            ? window.Swal
            : (console.warn('[lspcr] SweetAlert2 not loaded'), null);

    const baseStyle = {
        background: '#121829',
        color: '#e6ecff',
        confirmButtonColor: '#00d4ff',
        cancelButtonColor: '#1a2238',
        showClass: { popup: 'swal2-show' },
        hideClass: { popup: 'swal2-hide' },
        buttonsStyling: false,
        customClass: {
            confirmButton: 'swal2-styled swal2-confirm',
            cancelButton: 'swal2-styled swal2-cancel',
            denyButton: 'swal2-styled swal2-deny',
        },
    };

    window.lspcr = window.lspcr || {};

    window.lspcr.alert = (opts = {}) => {
        const Swal = ensureSwal();
        if (!Swal) return Promise.resolve();
        return Swal.fire({ ...baseStyle, ...opts });
    };

    window.lspcr.toast = (text, icon = 'success') => {
        const Swal = ensureSwal();
        if (!Swal) return;
        Swal.fire({
            ...baseStyle,
            toast: true,
            position: 'top-end',
            icon,
            title: text,
            showConfirmButton: false,
            timer: 3200,
            timerProgressBar: true,
        });
    };

    window.lspcr.confirm = (title, text, confirmText = 'Continue') => {
        const Swal = ensureSwal();
        if (!Swal) return Promise.resolve({ isConfirmed: false });
        return Swal.fire({
            ...baseStyle,
            icon: 'question',
            title,
            text,
            showCancelButton: true,
            confirmButtonText: confirmText,
            cancelButtonText: 'Cancel',
            reverseButtons: true,
        });
    };

    /* ---- Wire up [data-confirm] / [data-alert] hooks ---- */
    document.addEventListener('click', (e) => {
        const target = e.target.closest('[data-alert]');
        if (target) {
            e.preventDefault();
            const icon = target.dataset.alertIcon || 'info';
            const title = target.dataset.alertTitle || 'Notice';
            const text = target.dataset.alert;
            window.lspcr.alert({ icon, title, text });
            return;
        }

        const conf = e.target.closest('[data-confirm]');
        if (conf) {
            e.preventDefault();
            const href = conf.getAttribute('href');
            const title = conf.dataset.confirmTitle || 'Are you sure?';
            const text = conf.dataset.confirm;
            const cta = conf.dataset.confirmCta || 'Continue';
            window.lspcr.confirm(title, text, cta).then((r) => {
                if (r.isConfirmed && href) window.location.href = href;
            });
        }
    });

    /* ---- Smooth-scroll internal anchors (CSS handles 99%, this picks up fallbacks) ---- */
    document.addEventListener('click', (e) => {
        const a = e.target.closest('a[href^="#"]:not([href="#"])');
        if (!a) return;
        const id = a.getAttribute('href').slice(1);
        const el = document.getElementById(id);
        if (!el) return;
        e.preventDefault();
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });

    /* ---- Mark current page in nav ---- */
    const path = location.pathname.split('/').pop() || 'index.html';
    document.querySelectorAll('[data-nav]').forEach((link) => {
        const target = link.dataset.nav;
        if (
            target === path ||
            (target === 'index.html' && (path === '' || path === '/' || path === 'index.html'))
        ) {
            link.classList.add('active');
        }
    });
})();
