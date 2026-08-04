<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Google tag (gtag.js) — GA4, same stream as app.revizie.ro -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    // Consent Mode v2. Queued before the loader and before `config`, so the tag
    // never observes a state where it may write cookies. The consent banner
    // below flips these with a `consent: update`.
    gtag('consent', 'default', {
      ad_storage: 'denied',
      ad_user_data: 'denied',
      ad_personalization: 'denied',
      analytics_storage: 'denied',
      wait_for_update: 500
    });
  </script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZZC6YWQC5L"></script>
  <script>
    gtag('js', new Date());
    gtag('config', 'G-ZZC6YWQC5L');
  </script>

  <!-- Microsoft Clarity — session recordings + heatmaps, same project as app.revizie.ro -->
  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "xtzjuj1ir7");
  </script>

  <!--
    Cookie consent banner. KEEP IN SYNC with content-site/src/layouts/ContentLayout.astro
    (identical block) and with src/lib/consent.ts in revizie-app, which is the
    React implementation of the same cookie.

    Why it matters: Clarity enforces consent for EEA visitors, and without a
    signal it mints a NEW user id per page view — the dashboard read 35 sessions
    / 35 users / 1.0 pages per session before this landed. The cookie is scoped
    to `.revizie.ro` so the decision carries across to app.revizie.ro; a
    host-scoped cookie would ask twice and still split the journey at the hop.
  -->
  <script type="text/javascript">
  (function () {
    var NAME = 'revizie_consent', APEX = 'revizie.ro', MAX_AGE = 60 * 60 * 24 * 180;

    function read() {
      var parts = document.cookie.split(';');
      for (var i = 0; i < parts.length; i++) {
        var kv = parts[i].split('=');
        if (kv[0].trim() !== NAME) continue;
        var v = kv.slice(1).join('=').trim();
        return (v === 'granted' || v === 'denied') ? v : null;
      }
      return null;
    }

    function write(v) {
      var h = location.hostname;
      var shared = (h === APEX || h.slice(-(APEX.length + 1)) === '.' + APEX);
      document.cookie = NAME + '=' + v + '; path=/; max-age=' + MAX_AGE + '; SameSite=Lax'
        + (shared ? '; domain=.' + APEX : '')
        + (location.protocol === 'https:' ? '; Secure' : '');
    }

    function signal(v) {
      if (window.clarity) window.clarity('consentv2', { ad_Storage: v, analytics_Storage: v });
      if (window.gtag) window.gtag('consent', 'update', {
        ad_storage: v, ad_user_data: v, ad_personalization: v, analytics_storage: v
      });
    }

    var stored = read();
    if (stored) { signal(stored); return; }

    function build() {
      var btn = 'display:inline-block;cursor:pointer;border-radius:8px;padding:10px 18px;'
              + 'font:600 14px/1 system-ui,-apple-system,Segoe UI,Roboto,sans-serif;';
      var box = document.createElement('div');
      box.setAttribute('role', 'region');
      box.setAttribute('aria-label', 'Cookie-uri');
      box.style.cssText = 'position:fixed;left:0;right:0;bottom:0;z-index:2147483000;padding:12px;';
      box.innerHTML =
        '<div style="max-width:900px;margin:0 auto;background:#fff;border:1px solid #e7e7ec;'
      + 'border-radius:12px;box-shadow:0 6px 24px rgba(0,0,0,.14);padding:16px 18px;display:flex;'
      + 'gap:16px;align-items:center;flex-wrap:wrap;'
      + 'font:400 14px/1.5 system-ui,-apple-system,Segoe UI,Roboto,sans-serif;color:#18181b;">'
      +   '<div style="flex:1 1 320px;min-width:260px;">'
      +     '<strong style="display:block;margin-bottom:2px;">Cookie-uri</strong>'
      +     'Folosim cookie-uri ca sa intelegem cum e folosit site-ul si sa il imbunatatim. '
      +     'Poti refuza fara sa pierzi nicio functionalitate. '
      +     '<a href="https://revizie.ro/politica-cookies" style="color:#f26a1b;">Politica de cookie-uri</a>'
      +   '</div>'
      +   '<div style="display:flex;gap:8px;flex:0 0 auto;">'
      +     '<button type="button" data-consent="denied" style="' + btn
      +       'background:#fff;color:#18181b;border:1px solid #d4d4d8;">Refuz</button>'
      +     '<button type="button" data-consent="granted" style="' + btn
      +       'background:#f26a1b;color:#fff;border:1px solid #f26a1b;">Accept</button>'
      +   '</div>'
      + '</div>';

      box.addEventListener('click', function (e) {
        var el = e.target;
        while (el && el !== box && !el.getAttribute('data-consent')) el = el.parentNode;
        if (!el || el === box) return;
        var v = el.getAttribute('data-consent');
        write(v);
        signal(v);
        if (box.parentNode) box.parentNode.removeChild(box);
      });

      document.body.appendChild(box);
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', build);
    } else {
      build();
    }
  })();
  </script>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-xl border-b border-border-subtle">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">
      <div class="flex items-center gap-10">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
          <?php // Transparent wordmark (dark text) — big, blends on the white header.
                // Inlined (base64) so it renders even though the host doesn't serve the binary file. ?>
          <img src="<?php echo REVIZIE_LOGO_DARK_DATAURI; ?>" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto object-contain">
        </a>

        <?php revizie_display_main_menu(); ?>
      </div>

      <div class="flex items-center gap-3">
        <a href="https://app.revizie.ro/login" class="hidden md:inline-block px-4 py-2 text-foreground-muted hover:text-foreground transition-colors text-sm font-medium">Login</a>
        <a href="https://app.revizie.ro/register" class="hidden md:inline-flex px-5 py-2.5 bg-accent hover:bg-accent-hover text-white rounded-full text-sm font-semibold shadow-md hover:shadow-lg hover:shadow-accent/30 transition-all duration-300">Inregistreaza-te</a>

        <!-- Mobile hamburger toggle (vizibil doar < md) -->
        <button
          id="revizie-mobile-toggle"
          type="button"
          class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg text-foreground hover:bg-surface-muted transition-colors"
          aria-label="Deschide meniul"
          aria-expanded="false"
          aria-controls="revizie-mobile-menu"
        >
          <svg class="revizie-icon-menu w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg class="revizie-icon-close w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile dropdown — solid white (no transparency on overlays) -->
    <div
      id="revizie-mobile-menu"
      class="md:hidden hidden border-t border-border-subtle bg-white shadow-lg"
    >
      <nav class="max-w-7xl mx-auto px-4 sm:px-6 py-4 space-y-1">
        <p class="text-xs font-semibold uppercase tracking-wider text-foreground-subtle px-3 mb-1">Functii</p>
        <a href="<?php echo home_url('/functii/garaj-digital/'); ?>" class="block px-3 py-2.5 rounded-lg text-foreground hover:bg-accent-soft hover:text-accent-strong transition-colors text-base font-medium">Garaj Digital</a>
        <a href="https://revizie.ro/anunturi" class="block px-3 py-2.5 rounded-lg text-foreground hover:bg-accent-soft hover:text-accent-strong transition-colors text-base font-medium">Anunturi masini</a>
        <a href="https://revizie.ro/rca" class="block px-3 py-2.5 rounded-lg text-foreground hover:bg-accent-soft hover:text-accent-strong transition-colors text-base font-medium">Asigurari RCA &amp; CASCO</a>
        <a href="<?php echo home_url('/functii/remindere/'); ?>" class="block px-3 py-2.5 rounded-lg text-foreground hover:bg-accent-soft hover:text-accent-strong transition-colors text-base font-medium">Remindere</a>

        <div class="h-px bg-border-subtle my-3"></div>

        <p class="text-xs font-semibold uppercase tracking-wider text-foreground-subtle px-3 mb-1">Companie</p>
        <a href="<?php echo home_url('/despre-noi/'); ?>" class="block px-3 py-2.5 rounded-lg text-foreground hover:bg-accent-soft hover:text-accent-strong transition-colors text-base font-medium">Despre Noi</a>
        <a href="<?php echo home_url('/cum-functioneaza/'); ?>" class="block px-3 py-2.5 rounded-lg text-foreground hover:bg-accent-soft hover:text-accent-strong transition-colors text-base font-medium">Cum Functioneaza</a>

        <div class="pt-4 mt-4 border-t border-border-subtle flex flex-col gap-2">
          <a href="https://app.revizie.ro/login" class="block w-full text-center px-4 py-3 rounded-xl border border-border text-foreground hover:bg-surface-muted font-semibold transition-colors">Login</a>
          <a href="https://app.revizie.ro/register" class="block w-full text-center px-4 py-3 rounded-xl bg-accent hover:bg-accent-hover text-white font-semibold shadow-md hover:shadow-lg hover:shadow-accent/30 transition-all">Inregistreaza-te</a>
        </div>
      </nav>
    </div>
  </header>

  <script>
  (function () {
    var btn = document.getElementById('revizie-mobile-toggle');
    var menu = document.getElementById('revizie-mobile-menu');
    if (!btn || !menu) return;
    var iconMenu = btn.querySelector('.revizie-icon-menu');
    var iconClose = btn.querySelector('.revizie-icon-close');

    function setOpen(open) {
      if (open) {
        menu.classList.remove('hidden');
        iconMenu.classList.add('hidden');
        iconClose.classList.remove('hidden');
        btn.setAttribute('aria-expanded', 'true');
        btn.setAttribute('aria-label', 'Inchide meniul');
      } else {
        menu.classList.add('hidden');
        iconMenu.classList.remove('hidden');
        iconClose.classList.add('hidden');
        btn.setAttribute('aria-expanded', 'false');
        btn.setAttribute('aria-label', 'Deschide meniul');
      }
    }

    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      setOpen(menu.classList.contains('hidden'));
    });

    // Close when clicking a link inside the panel (so navigation feels snappy)
    menu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () { setOpen(false); });
    });

    // Close on outside click
    document.addEventListener('click', function (e) {
      if (!menu.classList.contains('hidden') && !btn.contains(e.target) && !menu.contains(e.target)) {
        setOpen(false);
      }
    });

    // Close on Escape
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
        setOpen(false);
        btn.focus();
      }
    });

    // Close when resizing up to desktop
    window.addEventListener('resize', function () {
      if (window.innerWidth >= 768 && !menu.classList.contains('hidden')) {
        setOpen(false);
      }
    });
  })();
  </script>
