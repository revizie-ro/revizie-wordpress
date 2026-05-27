<?php
/**
 * Template Name: Functie - Tractari
 *
 * Coming Soon — towing feature nu e inca live in app.revizie.ro
 * (FEATURES.towing = false in src/lib/features.ts). Astept parteneriate
 * cu firme de tractari pentru acoperire 24/7 in oraşele mari.
 */
get_header();
?>

  <section class="pt-32 pb-24 relative overflow-hidden hero-gradient">
    <div class="absolute top-20 right-10 w-96 h-96 bg-warning/15 rounded-full blur-[120px]"></div>

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

      <div class="w-20 h-20 mx-auto rounded-3xl bg-warning/15 text-warning flex items-center justify-center mb-6">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
        </svg>
      </div>

      <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-4 leading-tight">
        Tractari si asistenta rutiera 24/7
      </h1>
      <p class="text-xl text-foreground-muted mb-10 leading-relaxed max-w-2xl mx-auto">
        Cerere de tractare direct din aplicatie, cu pretul afisat inainte sa accepti si firma confirmata in cateva minute. Lucram acum la acoperirea oraselor mari din Romania.
      </p>

      <h2 class="text-lg font-semibold text-foreground mb-3">Anunta-ma cand lansam</h2>
      <?php revizie_render_waitlist_form('tractari', 'Tractari 24/7'); ?>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-foreground text-center mb-12">Cum va functiona</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-surface-muted rounded-2xl p-6">
          <div class="w-12 h-12 rounded-xl bg-warning/15 text-warning flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Locatie automata</h3>
          <p class="text-sm text-foreground-muted">App-ul citeste locatia ta GPS si gaseste cea mai apropiata firma disponibila.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6">
          <div class="w-12 h-12 rounded-xl bg-warning/15 text-warning flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Pret transparent</h3>
          <p class="text-sm text-foreground-muted">Vezi pretul exact inainte sa accepti. Fara surprize la fata locului.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6">
          <div class="w-12 h-12 rounded-xl bg-warning/15 text-warning flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Tracking in timp real</h3>
          <p class="text-sm text-foreground-muted">Urmaresti masina de tractare in timp real, ca la Uber.</p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
