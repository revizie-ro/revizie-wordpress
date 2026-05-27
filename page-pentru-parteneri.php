<?php
/**
 * Template Name: Pentru Parteneri
 *
 * Coming Soon — partner program nu este inca deschis. Userii care ajung
 * aici (de la Google sau link extern) primesc o pagina informativa cu
 * formular de waitlist in loc de 404 sau marketing fake.
 */
get_header();
?>

  <section class="pt-32 pb-24 relative overflow-hidden hero-gradient">
    <div class="absolute top-20 right-10 w-96 h-96 bg-accent/15 rounded-full blur-[120px]"></div>

    <div class="relative max-w-4xl mx-auto px-6 text-center">
      <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 text-foreground-muted hover:text-foreground mb-10 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Inapoi la pagina principala
      </a>

      <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-card border border-border rounded-full text-foreground-muted text-sm font-medium mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        Program in pregatire
      </div>

      <div class="w-20 h-20 mx-auto rounded-3xl bg-accent/15 text-accent flex items-center justify-center mb-6">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
        </svg>
      </div>

      <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-4 leading-tight">
        Programul de parteneri se deschide curand
      </h1>
      <p class="text-xl text-foreground-muted mb-10 leading-relaxed max-w-2xl mx-auto">
        Cautam service-uri auto, magazine de piese, furnizori de anvelope si firme de tractari pentru retea verificata. Daca esti interesat, scrie-ne direct si te contactam cand pornim onboarding-ul.
      </p>

      <a href="mailto:office@revizie.ro?subject=Parteneriat%20revizie.ro" class="inline-flex items-center gap-2 px-8 py-4 bg-accent hover:bg-accent-hover text-white rounded-2xl font-semibold shadow-lg hover:shadow-2xl hover:shadow-accent/30 transition-all">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        Scrie-ne la office@revizie.ro
      </a>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-foreground text-center mb-12">Cui i se va adresa programul</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-surface-muted rounded-2xl p-5 border border-border-subtle">
          <div class="w-11 h-11 rounded-xl bg-accent/15 text-accent flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Service-uri auto</h3>
          <p class="text-xs text-foreground-muted">Primesti programari online direct in dashboard-ul tau.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-5 border border-border-subtle">
          <div class="w-11 h-11 rounded-xl bg-warning/15 text-warning flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Firme tractari</h3>
          <p class="text-xs text-foreground-muted">Cereri preluate automat din locatia GPS a userilor.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-5 border border-border-subtle">
          <div class="w-11 h-11 rounded-xl bg-info/15 text-info flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Magazine piese</h3>
          <p class="text-xs text-foreground-muted">Catalog integrat cu VIN matching pe masinile clientilor.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-5 border border-border-subtle">
          <div class="w-11 h-11 rounded-xl bg-success/15 text-success flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Furnizori anvelope</h3>
          <p class="text-xs text-foreground-muted">Listari cu compatibilitate AI catre masinile potrivite.</p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
