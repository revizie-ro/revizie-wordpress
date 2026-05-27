<?php
/**
 * Template Name: Functie - Garaj Digital
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
            <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            <span class="text-sm text-accent-strong font-medium">Garaj Digital</span>
          </div>

          <h1 class="text-5xl md:text-6xl font-bold text-foreground mb-6 leading-[1.1]">
            Toate masinile tale,
            <span class="block bg-gradient-to-r from-accent via-accent-hover to-warning bg-clip-text text-transparent leading-[1.15] pb-2">intr-un singur loc</span>
          </h1>

          <p class="text-xl text-foreground-muted mb-8 leading-relaxed">
            Garajul Digital e centrul de comanda al masinilor tale. Adaugi numarul de inmatriculare, VIN decoder-ul aduce automat datele oficiale din DRPCIV, iar tu pornesti de aici cu RCA, anunturi, istoric si reminder-e.
          </p>

          <div class="flex flex-col sm:flex-row gap-4">
            <a href="https://app.revizie.ro/register" class="px-8 py-4 bg-accent hover:bg-accent-hover text-white rounded-2xl font-semibold shadow-lg hover:shadow-2xl hover:shadow-accent/30 transition-all text-center inline-flex items-center justify-center gap-2">
              Incepe gratuit
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </div>

        <div class="bg-gradient-to-br from-accent to-accent-strong rounded-3xl p-8 shadow-2xl shadow-accent/20">
          <div class="bg-card rounded-2xl p-6 space-y-4">
            <div class="flex items-center gap-4">
              <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-foreground to-foreground-muted flex items-center justify-center">
                <span class="text-white text-xl font-bold">VW</span>
              </div>
              <div>
                <h3 class="font-bold text-foreground">Volkswagen Passat</h3>
                <p class="text-sm text-foreground-muted">2.0 TDI 150 CP &middot; 2019</p>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-2 pt-3 border-t border-border-subtle">
              <div class="bg-success/10 rounded-lg p-3 text-center">
                <div class="text-xs text-foreground-muted mb-1">ITP</div>
                <div class="text-xs font-semibold text-success">Valid 11 luni</div>
              </div>
              <div class="bg-warning/10 rounded-lg p-3 text-center">
                <div class="text-xs text-foreground-muted mb-1">RCA</div>
                <div class="text-xs font-semibold text-warning">Expira in 14 zile</div>
              </div>
              <div class="bg-accent/10 rounded-lg p-3 text-center">
                <div class="text-xs text-foreground-muted mb-1">Revizie</div>
                <div class="text-xs font-semibold text-accent">Valid 6 luni</div>
              </div>
            </div>

            <div class="flex items-center gap-2 text-xs text-foreground-muted pt-3 border-t border-border-subtle">
              <svg class="w-4 h-4 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <span>24+ campuri tehnice completate automat din DRPCIV</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-14">
        <h2 class="text-4xl font-bold text-foreground mb-3">Ce contine garajul</h2>
        <p class="text-lg text-foreground-muted">Fiecare masina are pagina ei dedicata cu tot ce trebuie sa stii.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <h3 class="font-bold text-foreground mb-2">Date tehnice DRPCIV</h3>
          <p class="text-sm text-foreground-muted">Marca, model, an, capacitate cilindrica, combustibil, putere, masa, locuri, prima inmatriculare — toate aduse automat.</p>
        </div>

        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-warning/15 text-warning flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="font-bold text-foreground mb-2">Scadente urmarite</h3>
          <p class="text-sm text-foreground-muted">ITP, RCA, revizie — adaugi data expirarii o data, primesti reminder-e cu cateva saptamani inainte sa nu fie prea tarziu.</p>
        </div>

        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-success/15 text-success flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="font-bold text-foreground mb-2">Cumpara RCA &amp; CASCO</h3>
          <p class="text-sm text-foreground-muted">Cu un click din pagina masinii, ai calculul de RCA. Polita emisa direct in cont, plata securizata, link la polita PDF.</p>
        </div>

        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-info/15 text-info flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
          </div>
          <h3 class="font-bold text-foreground mb-2">Vinde cu un click</h3>
          <p class="text-sm text-foreground-muted">Pui anunt direct din pagina masinii. Toate datele tehnice sunt deja completate. Tu adaugi pretul, fotografiile si descrierea.</p>
        </div>

        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
          </div>
          <h3 class="font-bold text-foreground mb-2">Istoric prin carVertical</h3>
          <p class="text-sm text-foreground-muted">Inainte sa cumperi o masina, verifici istoricul cu VIN-ul: kilometraj, accidente, fosti proprietari. Discount 20% prin parteneriat.</p>
        </div>

        <div class="bg-surface-muted rounded-2xl p-6 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-success/15 text-success flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/></svg>
          </div>
          <h3 class="font-bold text-foreground mb-2">Pana la 50 de masini</h3>
          <p class="text-sm text-foreground-muted">Free pentru o masina. Premium (29.99 RON/luna) pana la 5 masini. Fleet (99.99 RON/luna) pana la 50 — perfect pentru parc auto mic.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-gradient-to-br from-accent via-accent-hover to-accent-strong">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Adauga prima masina in 30 de secunde</h2>
      <p class="text-xl text-white/90 mb-10">Cont gratuit, fara card. Doar un numar de inmatriculare.</p>
      <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-10 py-5 bg-white text-accent-strong rounded-2xl font-bold text-lg shadow-2xl hover:scale-105 transition-all">
        Creeaza cont gratuit
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </section>

<?php get_footer(); ?>
