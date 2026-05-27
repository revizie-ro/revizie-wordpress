<?php
/**
 * Template Name: Functie - Servicii Auto
 *
 * Coming Soon — service bookings nu sunt inca live in app.revizie.ro
 * (FEATURES.serviceBookings = false in src/lib/features.ts).
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
        In dezvoltare
      </div>

      <div class="w-20 h-20 mx-auto rounded-3xl bg-accent/15 text-accent flex items-center justify-center mb-6">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
      </div>

      <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-4 leading-tight">
        Programari online la service
      </h1>
      <p class="text-xl text-foreground-muted mb-10 leading-relaxed max-w-2xl mx-auto">
        Sistem complet de programari online, cu comparare de preturi intre service-urile disponibile in zona ta. Alegi service-ul potrivit pe baza pretului, distantei sau a recenziilor, fara apeluri telefonice si fara ipoteze.
      </p>

      <h2 class="text-lg font-semibold text-foreground mb-3">Solicita notificare la lansare</h2>
      <?php revizie_render_waitlist_form('servicii-auto', 'Programari Service'); ?>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-foreground text-center mb-12">Ce vei putea face</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Compari preturi intre service-uri</h3>
          <p class="text-sm text-foreground-muted">Vezi simultan estimarile mai multor service-uri pentru aceeasi interventie. Alegi pe baza pretului, distantei sau a ratingului.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Programare in mai putin de doua minute</h3>
          <p class="text-sm text-foreground-muted">Selectezi service-ul, alegi ziua si ora, descrii pe scurt interventia necesara. Confirmarea soseste in cateva minute.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Parteneri verificati</h3>
          <p class="text-sm text-foreground-muted">Fiecare service este validat inainte de listare. Recenziile provin exclusiv de la utilizatori care au folosit efectiv serviciul.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Notificari automate</h3>
          <p class="text-sm text-foreground-muted">Reminder inainte de programare, confirmare la finalizarea interventiei si sugestii pentru urmatoarea revizie pe baza kilometrajului.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Istoric interventii in cont</h3>
          <p class="text-sm text-foreground-muted">Programari, facturi si interventii pastrate in pagina masinii. Transferi automat istoricul cand vinzi vehiculul.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-lg font-semibold text-foreground mb-2">Estimare cost transparenta</h3>
          <p class="text-sm text-foreground-muted">Preturile afisate sunt orientative, generate din lista de tarife a fiecarui service. Pretul final se confirma dupa diagnoza.</p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
