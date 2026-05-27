<?php
/**
 * Template Name: Functie - Remindere
 */
get_header();
?>

  <section class="pt-32 pb-20 relative overflow-hidden hero-gradient">
    <div class="absolute top-20 right-10 w-96 h-96 bg-accent/15 rounded-full blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-6">
      <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 text-foreground-muted hover:text-foreground mb-8 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Inapoi la pagina principala
      </a>

      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent-soft border border-accent/20 mb-6">
            <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
            <span class="text-sm text-accent-strong font-medium">Reminder-e automate</span>
          </div>

          <h1 class="text-5xl md:text-6xl font-bold text-foreground mb-6 leading-[1.1]">
            Nu mai uita niciodata
            <span class="block bg-gradient-to-r from-accent via-accent-hover to-warning bg-clip-text text-transparent leading-[1.15] pb-2">ITP, RCA sau revizia</span>
          </h1>

          <p class="text-xl text-foreground-muted mb-8 leading-relaxed">
            Adaugi data expirarii o data, restul e treaba noastra. Primesti notificari pe email cu cateva saptamani inainte sa ramai cu o amenda neasteptata sau o asigurare expirata.
          </p>

          <div class="flex flex-col sm:flex-row gap-4">
            <a href="https://app.revizie.ro/register" class="px-8 py-4 bg-accent hover:bg-accent-hover text-white rounded-2xl font-semibold shadow-lg hover:shadow-2xl hover:shadow-accent/30 transition-all text-center inline-flex items-center justify-center gap-2">
              Incepe gratuit
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </div>

        <div class="bg-gradient-to-br from-accent to-accent-strong rounded-3xl p-8 shadow-2xl shadow-accent/20">
          <div class="bg-card rounded-2xl p-6 space-y-3">
            <div class="flex items-center gap-2 pb-3 border-b border-border-subtle">
              <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
              <span class="text-sm font-semibold text-foreground">Inbox notificari</span>
            </div>

            <div class="flex items-start gap-3 p-3 rounded-lg bg-danger/5 border border-danger/20">
              <div class="w-2 h-2 rounded-full bg-danger mt-2"></div>
              <div class="flex-1">
                <div class="text-sm font-semibold text-foreground">RCA expira in 7 zile</div>
                <div class="text-xs text-foreground-muted mt-0.5">Volkswagen Passat &middot; B 123 ABC</div>
                <div class="text-xs text-danger mt-1 font-medium">Calculeaza pretul nou →</div>
              </div>
            </div>

            <div class="flex items-start gap-3 p-3 rounded-lg bg-warning/5 border border-warning/20">
              <div class="w-2 h-2 rounded-full bg-warning mt-2"></div>
              <div class="flex-1">
                <div class="text-sm font-semibold text-foreground">ITP expira in 28 zile</div>
                <div class="text-xs text-foreground-muted mt-0.5">Volkswagen Passat &middot; B 123 ABC</div>
              </div>
            </div>

            <div class="flex items-start gap-3 p-3 rounded-lg bg-surface-muted">
              <div class="w-2 h-2 rounded-full bg-foreground-subtle mt-2"></div>
              <div class="flex-1">
                <div class="text-sm font-semibold text-foreground">Revizie programata in 2 luni</div>
                <div class="text-xs text-foreground-muted mt-0.5">Volkswagen Passat &middot; bazata pe km estimati</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-14">
        <h2 class="text-4xl font-bold text-foreground mb-3">Ce iti urmarim automat</h2>
        <p class="text-lg text-foreground-muted">Adaugi datele o data si primesti reminder cu suficient timp inainte de expirare.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-surface-muted rounded-2xl p-5 border border-border-subtle">
          <div class="w-11 h-11 rounded-xl bg-danger/15 text-danger flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">RCA</h3>
          <p class="text-xs text-foreground-muted">Reminder cu 30 si 7 zile inainte. Buton direct la calculul ofertei noi.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-5 border border-border-subtle">
          <div class="w-11 h-11 rounded-xl bg-warning/15 text-warning flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">ITP</h3>
          <p class="text-xs text-foreground-muted">Reminder cu 30 zile inainte. Recomandare ITP-uri partenere apropiate.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-5 border border-border-subtle">
          <div class="w-11 h-11 rounded-xl bg-success/15 text-success flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Revizie</h3>
          <p class="text-xs text-foreground-muted">Estimare bazata pe km parcursi. Te anuntam cand se apropie scadenta.</p>
        </div>
        <div class="bg-surface-muted rounded-2xl p-5 border border-border-subtle">
          <div class="w-11 h-11 rounded-xl bg-info/15 text-info flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Vinieta</h3>
          <p class="text-xs text-foreground-muted">Pentru cei care merg in alte tari — reminder cu 7 zile inainte sa expire vinieta.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-gradient-to-br from-accent via-accent-hover to-accent-strong">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Setezi o data, primesti reminder mereu</h2>
      <p class="text-xl text-white/90 mb-10">Free, fara card. Toate notificarile pe emailul tau.</p>
      <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-10 py-5 bg-white text-accent-strong rounded-2xl font-bold text-lg shadow-2xl hover:scale-105 transition-all">
        Creeaza cont gratuit
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </section>

<?php get_footer(); ?>
