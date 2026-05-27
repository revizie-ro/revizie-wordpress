<?php
/**
 * Template Name: Functie - Anvelope
 *
 * Coming Soon — tire marketplace nu este inca live in app.revizie.ro
 * (FEATURES.partsMarketplace = false in src/lib/features.ts).
 */
get_header();
?>

  <section class="pt-32 pb-24 relative overflow-hidden hero-gradient">
    <div class="absolute top-20 right-10 w-96 h-96 bg-success/15 rounded-full blur-[120px]"></div>

    <div class="relative max-w-4xl mx-auto px-6 text-center">
      <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 text-foreground-muted hover:text-foreground mb-10 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Inapoi la pagina principala
      </a>

      <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-card border border-border rounded-full text-foreground-muted text-sm font-medium mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        In dezvoltare
      </div>

      <div class="w-20 h-20 mx-auto rounded-3xl bg-success/15 text-success flex items-center justify-center mb-6">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" stroke-width="2"/>
          <circle cx="12" cy="12" r="3" stroke-width="2"/>
        </svg>
      </div>

      <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-4 leading-tight">
        Marketplace de anvelope cu AI
      </h1>
      <p class="text-xl text-foreground-muted mb-10 leading-relaxed max-w-2xl mx-auto">
        Recomandari personalizate de anvelope, calculate automat in functie de masina ta din garaj, stilul de condus si bugetul disponibil. Compari preturi din mai multe magazine si comanzi cu plata securizata online.
      </p>

      <h2 class="text-lg font-semibold text-foreground mb-3">Solicita notificare la lansare</h2>
      <?php revizie_render_waitlist_form('anvelope', 'Marketplace Anvelope'); ?>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-foreground text-center mb-12">Ce vei putea face</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-success/15 text-success flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Recomandari AI</h3>
          <p class="text-sm text-foreground-muted">Algoritmul analizeaza masina ta plus modul in care o folosesti si propune top 3 modele de anvelope potrivite pentru tine.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-success/15 text-success flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Compatibilitate garantata</h3>
          <p class="text-sm text-foreground-muted">Verificare automata fata de dimensiunile din certificatul de inmatriculare. Zero risc de comanda gresita.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-success/15 text-success flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Comparator preturi</h3>
          <p class="text-sm text-foreground-muted">Vezi pretul aceleiasi anvelope in mai multe magazine partenere si alegi cea mai buna oferta disponibila.</p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
