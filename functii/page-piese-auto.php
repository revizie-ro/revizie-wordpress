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
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Inapoi la pagina principala
      </a>

      <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-card border border-border rounded-full text-foreground-muted text-sm font-medium mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        In dezvoltare
      </div>

      <div class="w-20 h-20 mx-auto rounded-3xl bg-info/15 text-info flex items-center justify-center mb-6">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
        </svg>
      </div>

      <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-4 leading-tight">
        Asistent AI pentru piese auto
      </h1>
      <p class="text-xl text-foreground-muted mb-10 leading-relaxed max-w-2xl mx-auto">
        Un chat interactiv cu asistentul nostru AI specializat pe masina ta. Descrii problema sau piesa cautata, primesti pe loc recomandari de piese compatibile, preturi din mai multe magazine partenere si cele mai bune oferte disponibile pentru vehiculul tau.
      </p>

      <h2 class="text-lg font-semibold text-foreground mb-3">Solicita notificare la lansare</h2>
      <?php revizie_render_waitlist_form('piese-auto', 'Marketplace Piese'); ?>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-foreground text-center mb-12">Cum va functiona</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-info/15 text-info flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Conversatie naturala</h3>
          <p class="text-sm text-foreground-muted">Spui in limbaj normal ce piesa cauti sau ce problema are masina. AI-ul intelege contextul si raspunde cu recomandari concrete.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-info/15 text-info flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Compatibilitate prin VIN</h3>
          <p class="text-sm text-foreground-muted">Asistentul cunoaste deja datele exacte ale masinii tale din garaj. Toate piesele recomandate sunt verificate compatibile cu vehiculul.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-info/15 text-info flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Cele mai bune oferte</h3>
          <p class="text-sm text-foreground-muted">Acelasi reper afisat din mai multe magazine partenere, sortat dupa pret. Vezi clar cea mai avantajoasa optiune pentru piesa de care ai nevoie.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-info/15 text-info flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Diagnoza asistata</h3>
          <p class="text-sm text-foreground-muted">Descrii simptomele si AI-ul iti propune piesele care ar putea fi cauza, ordonate dupa probabilitate si cost de inlocuire.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-info/15 text-info flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Comanda direct in chat</h3>
          <p class="text-sm text-foreground-muted">Adaugi piesa in cos cu un click din conversatie. Plata securizata, livrare direct la tine, comanda ramane in cont.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-info/15 text-info flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Furnizori verificati</h3>
          <p class="text-sm text-foreground-muted">Doar magazine validate de echipa noastra, cu termene de livrare clare si politica de retur transparenta.</p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
