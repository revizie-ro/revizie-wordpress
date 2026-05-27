<?php
/**
 * Template Name: Functie - Piese Auto
 *
 * Coming Soon — parts marketplace nu este inca live in app.revizie.ro
 * (FEATURES.partsMarketplace = false in src/lib/features.ts).
 */
get_header();
?>

  <section class="pt-32 pb-24 relative overflow-hidden hero-gradient">
    <div class="absolute top-20 right-10 w-96 h-96 bg-info/15 rounded-full blur-[120px]"></div>

    <div class="relative max-w-4xl mx-auto px-6 text-center">
      <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 text-foreground-muted hover:text-foreground mb-10 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Inapoi la pagina principala
      </a>

      <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-card border border-border rounded-full text-foreground-muted text-sm font-medium mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        In dezvoltare
      </div>

      <div class="w-20 h-20 mx-auto rounded-3xl bg-info/15 text-info flex items-center justify-center mb-6">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
        </svg>
      </div>

      <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-4 leading-tight">
        Marketplace de piese auto
      </h1>
      <p class="text-xl text-foreground-muted mb-10 leading-relaxed max-w-2xl mx-auto">
        Catalog cu 1000+ piese de la furnizori B2B verificati (Euroest Car, AD Auto Total, Augsburg International). Lansare imediat ce checkout-ul prin Netopia este aprobat de PSP.
      </p>

      <h2 class="text-lg font-semibold text-foreground mb-3">Anunta-ma cand lansam</h2>
      <?php revizie_render_waitlist_form('piese-auto', 'Marketplace Piese'); ?>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-foreground text-center mb-12">Ce vei putea face cand lansam</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-surface-muted rounded-2xl p-6">
          <div class="w-12 h-12 rounded-xl bg-info/15 text-info flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Cautare pe VIN</h3>
          <p class="text-sm text-foreground-muted">Introduci VIN-ul si vezi doar piesele compatibile garantat cu masina ta.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6">
          <div class="w-12 h-12 rounded-xl bg-info/15 text-info flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 16v-2m6-6h2M4 12h2m13.071-7.071l-1.414 1.414M5.343 18.657l1.414-1.414m12.728 0l-1.414-1.414M5.343 5.343l1.414 1.414"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Furnizori reali B2B</h3>
          <p class="text-sm text-foreground-muted">Acces la 3 furnizori romanesti angro, fara mark-up dezbinant. Mai ieftin decat retail.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6">
          <div class="w-12 h-12 rounded-xl bg-info/15 text-info flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Checkout sigur</h3>
          <p class="text-sm text-foreground-muted">Plata cu cardul prin Netopia (PCI compliant). Comanda apare in cont, livrare direct la tine.</p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
