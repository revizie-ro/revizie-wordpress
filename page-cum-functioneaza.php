<?php
/**
 * Template Name: Cum Functioneaza
 */
get_header();
?>

  <section class="pt-32 pb-16 relative overflow-hidden hero-gradient">
    <div class="absolute top-20 right-10 w-96 h-96 bg-accent/15 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-10 left-10 w-72 h-72 bg-warning/10 rounded-full blur-[100px]"></div>

    <div class="relative max-w-4xl mx-auto px-6 text-center">
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent-soft border border-accent/20 mb-6">
        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
        </svg>
        <span class="text-sm text-accent-strong font-medium">Cum functioneaza</span>
      </div>

      <h1 class="text-5xl md:text-6xl font-bold text-foreground mb-6 leading-[1.1]">
        Trei pasi si esti
        <span class="bg-gradient-to-r from-accent via-accent-hover to-warning bg-clip-text text-transparent leading-[1.15] pb-2">in control</span>
      </h1>

      <p class="text-xl text-foreground-muted leading-relaxed max-w-2xl mx-auto">
        Cont gratuit, masina adaugata in 30 de secunde cu numarul de inmatriculare, apoi totul intr-un singur ecran: documente, asigurari, anunturi, istoric.
      </p>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-6xl mx-auto px-6">
      <div class="space-y-20">

        <!-- Step 1 -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-br from-accent to-accent-strong text-white text-xl font-bold mb-6 shadow-md">1</div>
            <h2 class="text-3xl font-bold text-foreground mb-4">Creezi cont gratuit</h2>
            <p class="text-lg text-foreground-muted mb-6">Te inregistrezi cu email-ul tau in mai putin de 30 de secunde. Fara card bancar, fara perioada de proba — planul gratuit ramane pe veci.</p>
            <ul class="space-y-3">
              <li class="flex items-center gap-3 text-foreground">
                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-success/15 text-success flex items-center justify-center">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                </span>
                <span class="text-sm">Confirmare prin email — adresa verificata</span>
              </li>
              <li class="flex items-center gap-3 text-foreground">
                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-success/15 text-success flex items-center justify-center">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                </span>
                <span class="text-sm">Plan Free permanent, fara restrictii artificiale</span>
              </li>
              <li class="flex items-center gap-3 text-foreground">
                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-success/15 text-success flex items-center justify-center">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                </span>
                <span class="text-sm">Date stocate in UE (Frankfurt) — GDPR-compliant</span>
              </li>
            </ul>
          </div>
          <div class="bg-gradient-to-br from-accent-soft to-card rounded-3xl p-8 border border-accent/15 shadow-sm">
            <div class="bg-card rounded-2xl p-6 shadow-inner">
              <div class="flex items-center gap-3 mb-5 pb-4 border-b border-border-subtle">
                <div class="w-10 h-10 rounded-full bg-accent/15 flex items-center justify-center">
                  <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
                <div>
                  <div class="text-sm font-semibold text-foreground">Cont nou</div>
                  <div class="text-xs text-foreground-muted">30 secunde</div>
                </div>
              </div>
              <div class="space-y-3">
                <div class="h-10 rounded-lg bg-surface-muted border border-border-subtle px-3 flex items-center text-sm text-foreground-subtle">email@exemplu.ro</div>
                <div class="h-10 rounded-lg bg-surface-muted border border-border-subtle px-3 flex items-center text-sm text-foreground-subtle">••••••••</div>
                <div class="h-11 rounded-lg bg-accent text-white flex items-center justify-center text-sm font-semibold">Creeaza cont</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div class="order-2 lg:order-1 bg-gradient-to-br from-warning/10 to-card rounded-3xl p-8 border border-warning/20 shadow-sm">
            <div class="bg-card rounded-2xl p-6 shadow-inner">
              <div class="flex items-center gap-3 mb-5 pb-4 border-b border-border-subtle">
                <div class="w-10 h-10 rounded-full bg-warning/15 flex items-center justify-center">
                  <svg class="w-5 h-5 text-warning" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
                </div>
                <div>
                  <div class="text-sm font-semibold text-foreground">Adauga masina</div>
                  <div class="text-xs text-foreground-muted">Numar sau VIN</div>
                </div>
              </div>
              <div class="space-y-3">
                <div class="h-10 rounded-lg bg-accent-soft border border-accent/30 px-3 flex items-center justify-between text-sm">
                  <span class="font-mono font-semibold text-foreground">B 123 ABC</span>
                  <span class="text-xs text-accent-strong font-medium">DRPCIV ✓</span>
                </div>
                <div class="grid grid-cols-2 gap-2 text-xs">
                  <div class="bg-surface-muted rounded p-2"><div class="text-foreground-muted">Marca</div><div class="font-semibold text-foreground">Volkswagen</div></div>
                  <div class="bg-surface-muted rounded p-2"><div class="text-foreground-muted">Model</div><div class="font-semibold text-foreground">Passat</div></div>
                  <div class="bg-surface-muted rounded p-2"><div class="text-foreground-muted">An</div><div class="font-semibold text-foreground">2019</div></div>
                  <div class="bg-surface-muted rounded p-2"><div class="text-foreground-muted">Combustibil</div><div class="font-semibold text-foreground">Diesel</div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="order-1 lg:order-2">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-br from-warning to-accent text-white text-xl font-bold mb-6 shadow-md">2</div>
            <h2 class="text-3xl font-bold text-foreground mb-4">Adaugi masina cu numarul de inmatriculare</h2>
            <p class="text-lg text-foreground-muted mb-6">Introduci numarul sau VIN-ul si VIN decoder-ul nostru aduce automat marca, modelul, anul, capacitatea cilindrica, combustibilul si toate datele oficiale din DRPCIV. Nu mai introduci nimic manual.</p>
            <ul class="space-y-3">
              <li class="flex items-center gap-3 text-foreground">
                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-success/15 text-success flex items-center justify-center">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                </span>
                <span class="text-sm">24+ campuri completate automat din DRPCIV</span>
              </li>
              <li class="flex items-center gap-3 text-foreground">
                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-success/15 text-success flex items-center justify-center">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                </span>
                <span class="text-sm">Pana la 50 de masini in cont (pentru flote)</span>
              </li>
              <li class="flex items-center gap-3 text-foreground">
                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-success/15 text-success flex items-center justify-center">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                </span>
                <span class="text-sm">Adaugi scadentele ITP, RCA, revizie — primesti reminder-e</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-gradient-to-br from-success to-success/70 text-white text-xl font-bold mb-6 shadow-md">3</div>
            <h2 class="text-3xl font-bold text-foreground mb-4">Folosesti platforma</h2>
            <p class="text-lg text-foreground-muted mb-6">Toate functionalitatile pornesc de la masina ta din garaj. Cu un click obtii oferte RCA &amp; CASCO, postezi un anunt de vanzare, verifici istoricul VIN sau primesti notificari pentru scadente.</p>
            <div class="grid grid-cols-2 gap-3">
              <a href="https://revizie.ro/rca" class="group bg-card border border-success/20 rounded-xl p-3 hover:border-success/50 transition-colors">
                <div class="flex items-center gap-2 mb-1">
                  <svg class="w-4 h-4 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                  <span class="text-sm font-semibold text-foreground">RCA &amp; CASCO</span>
                </div>
                <p class="text-xs text-foreground-muted">Calculezi oferte online</p>
              </a>
              <a href="https://revizie.ro/anunturi" class="group bg-card border border-warning/20 rounded-xl p-3 hover:border-warning/50 transition-colors">
                <div class="flex items-center gap-2 mb-1">
                  <svg class="w-4 h-4 text-warning" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                  <span class="text-sm font-semibold text-foreground">Anunturi</span>
                </div>
                <p class="text-xs text-foreground-muted">Cumperi sau vinzi masini</p>
              </a>
              <a href="https://app.revizie.ro" class="group bg-card border border-info/20 rounded-xl p-3 hover:border-info/50 transition-colors">
                <div class="flex items-center gap-2 mb-1">
                  <svg class="w-4 h-4 text-info" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                  <span class="text-sm font-semibold text-foreground">Istoric VIN</span>
                </div>
                <p class="text-xs text-foreground-muted">Verifici masina prin carVertical</p>
              </a>
              <a href="<?php echo home_url('/functii/remindere/'); ?>" class="group bg-card border border-accent/20 rounded-xl p-3 hover:border-accent/50 transition-colors">
                <div class="flex items-center gap-2 mb-1">
                  <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5"/></svg>
                  <span class="text-sm font-semibold text-foreground">Reminder-e</span>
                </div>
                <p class="text-xs text-foreground-muted">Scadente ITP / RCA / revizie</p>
              </a>
            </div>
          </div>
          <div class="bg-gradient-to-br from-success/10 to-card rounded-3xl p-8 border border-success/20 shadow-sm">
            <div class="bg-card rounded-2xl p-6 shadow-inner">
              <div class="flex items-center justify-between mb-4 pb-3 border-b border-border-subtle">
                <div class="text-sm font-semibold text-foreground">Asigurari RCA</div>
                <span class="text-xs px-2 py-0.5 rounded-full bg-success/15 text-success font-medium">3 oferte</span>
              </div>
              <div class="space-y-2">
                <div class="flex items-center justify-between bg-surface-muted rounded-lg p-3">
                  <div>
                    <div class="text-xs text-foreground-muted">Asigurator A</div>
                    <div class="text-sm font-semibold text-foreground">RCA 12 luni</div>
                  </div>
                  <div class="text-lg font-bold text-success">684 RON</div>
                </div>
                <div class="flex items-center justify-between bg-card border border-success/30 rounded-lg p-3">
                  <div>
                    <div class="text-xs text-success font-medium">Cea mai ieftina</div>
                    <div class="text-sm font-semibold text-foreground">Asigurator B</div>
                  </div>
                  <div class="text-lg font-bold text-success">621 RON</div>
                </div>
                <div class="flex items-center justify-between bg-surface-muted rounded-lg p-3">
                  <div>
                    <div class="text-xs text-foreground-muted">Asigurator C</div>
                    <div class="text-sm font-semibold text-foreground">RCA 12 luni</div>
                  </div>
                  <div class="text-lg font-bold text-foreground">752 RON</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Final CTA -->
  <section class="py-24 bg-gradient-to-br from-accent via-accent-hover to-accent-strong">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Gata sa incepi?</h2>
      <p class="text-xl text-white/90 mb-10">Cont gratuit, fara card. Setezi prima masina in cateva secunde.</p>
      <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-10 py-5 bg-white text-accent-strong rounded-2xl font-bold text-lg shadow-2xl hover:scale-105 transition-all">
        Creeaza cont gratuit
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>
  </section>

<?php get_footer(); ?>
