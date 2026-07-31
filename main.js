/* ==========================================================================
   Aquatic Weed Harvesting LLC — interactions
   Vanilla JS, no dependencies. Everything degrades if JS is off.
   ========================================================================== */
(() => {
  'use strict';

  const $  = (s, c = document) => c.querySelector(s);
  const $$ = (s, c = document) => [...c.querySelectorAll(s)];
  const reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ------------------------------------------------------ nav + mobile bar */
  const nav = $('#nav');
  const bar = $('.mobilebar');
  const onScroll = () => {
    const y = scrollY;
    nav.classList.toggle('is-stuck', y > 30);
    bar?.classList.toggle('in', y > innerHeight * 0.6);
  };
  addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  const burger = $('#burger');
  const drawer = $('#drawer');
  const setDrawer = (open) => {
    burger.setAttribute('aria-expanded', String(open));
    drawer.hidden = !open;
    document.body.style.overflow = open ? 'hidden' : '';
  };
  burger?.addEventListener('click', () => setDrawer(drawer.hidden));
  $$('#drawer a').forEach(a => a.addEventListener('click', () => setDrawer(false)));
  addEventListener('keydown', e => { if (e.key === 'Escape' && !drawer.hidden) setDrawer(false); });

  /* ------------------------------------------------------- reveal on scroll */
  // Fail open: if the observer isn't available, everything stays visible
  // rather than the whole page below the hero sitting at opacity 0.
  if (!('IntersectionObserver' in window)) {
    $$('.reveal').forEach(el => el.classList.add('in'));
    $$('.stat__num').forEach(el => (el.textContent = el.dataset.count + (el.dataset.suffix || '')));
  } else {

  const io = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (!en.isIntersecting) return;
      en.target.classList.add('in');
      io.unobserve(en.target);
    });
  }, { rootMargin: '0px 0px -12% 0px', threshold: 0.08 });

  $$('.reveal').forEach((el, i) => {
    el.style.transitionDelay = `${Math.min(i % 4, 3) * 70}ms`;
    io.observe(el);
  });

  /* ------------------------------------------------------------- counters */
  const runCount = (el) => {
    const target = parseFloat(el.dataset.count);
    const suffix = el.dataset.suffix || '';
    if (reduced || !target) { el.textContent = target + suffix; return; }
    const dur = 1300;
    let t0;
    const step = (t) => {
      t0 ??= t;
      const p = Math.min((t - t0) / dur, 1);
      el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3))) + suffix;
      if (p < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  };
  const cio = new IntersectionObserver((es) => {
    es.forEach(e => { if (e.isIntersecting) { runCount(e.target); cio.unobserve(e.target); } });
  }, { threshold: 0.6 });
  $$('.stat__num').forEach(el => cio.observe(el));
  } // end IntersectionObserver branch

  /* ------------------------------------------------------- before / after */
  const frame  = $('.ba__frame');
  const before = $('#baBefore');
  const handle = $('#baHandle');
  if (frame) {
    let dragging = false;
    const set = (pct) => {
      const p = Math.max(0, Math.min(100, pct));
      before.style.clipPath = `inset(0 ${100 - p}% 0 0)`;
      handle.style.left = `${p}%`;
      frame.setAttribute('aria-valuenow', Math.round(p));
    };
    const fromEvent = (e) => {
      const r = frame.getBoundingClientRect();
      const x = (e.touches ? e.touches[0].clientX : e.clientX) - r.left;
      set((x / r.width) * 100);
    };
    const start = (e) => { dragging = true; fromEvent(e); };
    const move  = (e) => { if (dragging) { fromEvent(e); if (e.cancelable) e.preventDefault(); } };
    const end   = () => { dragging = false; };

    frame.addEventListener('mousedown', start);
    frame.addEventListener('touchstart', start, { passive: true });
    addEventListener('mousemove', move);
    addEventListener('touchmove', move, { passive: false });
    addEventListener('mouseup', end);
    addEventListener('touchend', end);
    frame.addEventListener('keydown', (e) => {
      const now = parseFloat(frame.getAttribute('aria-valuenow'));
      if (e.key === 'ArrowLeft')  { set(now - 4); e.preventDefault(); }
      if (e.key === 'ArrowRight') { set(now + 4); e.preventDefault(); }
    });

    // gentle nudge the first time it scrolls into view, so people notice it drags
    if (!reduced) {
      const nio = new IntersectionObserver((es) => {
        es.forEach(e => {
          if (!e.isIntersecting) return;
          nio.disconnect();
          let t0;
          const wiggle = (t) => {
            t0 ??= t;
            const p = (t - t0) / 1500;
            if (p >= 1) { set(50); return; }
            set(50 + Math.sin(p * Math.PI * 2) * 13);
            requestAnimationFrame(wiggle);
          };
          requestAnimationFrame(wiggle);
        });
      }, { threshold: 0.5 });
      nio.observe(frame);
    }
  }

  /* --------------------------------------------------------------- gallery */
  const lb = $('#lightbox');
  const lbCap = $('#lbCap');
  const lbImg = $('#lbImg');
  const closeLb = () => { lb.hidden = true; document.body.style.overflow = ''; };
  $$('.gal__item').forEach(item => {
    item.addEventListener('click', () => {
      const thumb = $('img', item);
      // full-size file if one is named, otherwise just enlarge the thumbnail
      lbImg.src = item.dataset.full || thumb?.src || '';
      lbImg.alt = thumb?.alt || '';
      lbCap.textContent = item.dataset.cap || '';
      lb.hidden = false;
      document.body.style.overflow = 'hidden';
    });
  });
  lb?.addEventListener('click', e => { if (e.target === lb || e.target.closest('.lightbox__close')) closeLb(); });
  addEventListener('keydown', e => { if (e.key === 'Escape' && lb && !lb.hidden) closeLb(); });

  /* ------------------------------------------------------------------ form */
  const form = $('#quoteForm');
  form?.addEventListener('submit', (e) => {
    e.preventDefault();
    let ok = true;
    $$('input[required], textarea[required]', form).forEach(input => {
      const field = input.closest('.field');
      const err = $('.field__err', field);
      let msg = '';
      if (!input.value.trim()) msg = 'Required';
      else if (input.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(input.value)) msg = 'Check that email address';
      else if (input.type === 'tel' && input.value.replace(/\D/g, '').length < 10) msg = 'Needs 10 digits';
      field.classList.toggle('is-bad', !!msg);
      if (err) err.textContent = msg;
      if (msg) ok = false;
    });
    if (!ok) { $('.field.is-bad .field__input', form)?.focus(); return; }

    // TODO: wire to the client's form handler / inbox before launch.
    const btn = $('button[type="submit"]', form);
    btn.disabled = true;
    btn.textContent = 'Sending…';
    setTimeout(() => {
      form.reset();
      btn.disabled = false;
      btn.textContent = 'Send my request';
      $('#formOk').hidden = false;
      $$('.chip input:checked', form).forEach(c => (c.checked = false));
    }, 700);
  });
  $$('.field__input', form || document).forEach(i => {
    i.addEventListener('input', () => {
      const f = i.closest('.field');
      f.classList.remove('is-bad');
      const err = $('.field__err', f);
      if (err) err.textContent = '';
    });
  });

  /* ------------------------------------------------------------ hero water */
  // Skipped on phones on purpose — a per-frame canvas is what makes small
  // devices judder while scrolling. The CSS hides it at the same breakpoint.
  const cv = $('#ripple');
  if (cv && !reduced && innerWidth > 820) {
    const ctx = cv.getContext('2d');
    let w, h, dpr;
    const resize = () => {
      dpr = Math.min(devicePixelRatio || 1, 2);
      w = cv.width = cv.offsetWidth * dpr;
      h = cv.height = cv.offsetHeight * dpr;
    };
    resize();
    addEventListener('resize', resize);

    // drifting caustic light bands, like sun on the surface of a lake
    const bands = Array.from({ length: 7 }, (_, i) => ({
      y: 0.12 + i * 0.13,
      amp: 12 + i * 5,
      len: 260 + i * 90,
      spd: 0.00016 + i * 0.00007,
      off: i * 1.7,
      a: 0.05 + (i % 3) * 0.022
    }));

    const pointer = { x: -1, y: -1 };
    cv.parentElement.addEventListener('pointermove', (e) => {
      const r = cv.getBoundingClientRect();
      pointer.x = (e.clientX - r.left) * dpr;
      pointer.y = (e.clientY - r.top) * dpr;
    });
    cv.parentElement.addEventListener('pointerleave', () => { pointer.x = -1; });

    const draw = (t) => {
      ctx.clearRect(0, 0, w, h);
      ctx.lineWidth = 1.4 * dpr;

      bands.forEach(b => {
        ctx.beginPath();
        for (let x = 0; x <= w; x += 14 * dpr) {
          const phase = x / (b.len * dpr) + t * b.spd + b.off;
          let y = b.y * h + Math.sin(phase) * b.amp * dpr + Math.sin(phase * 2.3) * b.amp * 0.4 * dpr;
          // the cursor pushes the water a little
          if (pointer.x > 0) {
            const d = Math.hypot(x - pointer.x, y - pointer.y);
            if (d < 200 * dpr) y += (1 - d / (200 * dpr)) * 22 * dpr * Math.sin(d / (18 * dpr) - t * 0.004);
          }
          x === 0 ? ctx.moveTo(x, y) : ctx.lineTo(x, y);
        }
        const g = ctx.createLinearGradient(0, 0, w, 0);
        // lake blue fading into the boat orange — the logo's two accents
        g.addColorStop(0, `rgba(122,201,234,0)`);
        g.addColorStop(0.5, `rgba(122,201,234,${b.a})`);
        g.addColorStop(1, `rgba(248,152,26,0)`);
        ctx.strokeStyle = g;
        ctx.stroke();
      });

      requestAnimationFrame(draw);
    };
    requestAnimationFrame(draw);
  }

  /* --------------------------------------------------------------- footer */
  const yr = $('#year');
  if (yr) yr.textContent = new Date().getFullYear();
})();
