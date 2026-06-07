<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
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
          <?php // Transparent wordmark (dark text) — big, blends on the white header. ?>
          <img src="<?php echo esc_url(REVIZIE_THEME_URI . '/assets/img/logo-dark.png'); ?>" alt="<?php bloginfo('name'); ?>" class="h-12 w-auto object-contain">
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
        <a href="https://app.revizie.ro/anunturi" class="block px-3 py-2.5 rounded-lg text-foreground hover:bg-accent-soft hover:text-accent-strong transition-colors text-base font-medium">Anunturi masini</a>
        <a href="https://app.revizie.ro/asigurari/rca" class="block px-3 py-2.5 rounded-lg text-foreground hover:bg-accent-soft hover:text-accent-strong transition-colors text-base font-medium">Asigurari RCA &amp; CASCO</a>
        <a href="<?php echo home_url('/functii/remindere/'); ?>" class="block px-3 py-2.5 rounded-lg text-foreground hover:bg-accent-soft hover:text-accent-strong transition-colors text-base font-medium">Reminder-e</a>

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
