<?php
/**
 * Template Name: Despre Noi
 */
get_header();
?>

  <section class="pt-32 pb-16 relative overflow-hidden hero-gradient">
    <div class="absolute top-20 right-10 w-96 h-96 bg-accent/15 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-10 left-10 w-72 h-72 bg-warning/10 rounded-full blur-[100px]"></div>

    <div class="relative max-w-4xl mx-auto px-6">
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent-soft border border-accent/20 mb-6">
        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        <span class="text-sm text-accent-strong font-medium">Despre Noi</span>
      </div>

      <h1 class="text-5xl md:text-6xl font-bold text-foreground mb-6 leading-[1.1]">
        Cream platforma pe care ne-am
        <span class="block bg-gradient-to-r from-accent via-accent-hover to-warning bg-clip-text text-transparent leading-[1.15] pb-2">dorit-o si noi</span>
      </h1>

      <p class="text-xl text-foreground-muted leading-relaxed max-w-3xl">
        revizie.ro e o platforma romaneasca pentru posesori de masini. Tot ce face un sofer in jurul masinii lui — sa-si gestioneze documentele, sa cumpere RCA &amp; CASCO, sa vinda masina, sa verifice istoricul VIN — intr-un singur cont. Construita curat, fara abonamente ascunse.
      </p>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-6xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <h2 class="text-4xl font-bold text-foreground mb-6">De ce am pornit asta</h2>
          <p class="text-lg text-foreground-muted mb-5 leading-relaxed">
            In Romania, ca sofer, jonglezi cu 5-6 site-uri si aplicatii: una pentru asigurari, alta pentru anunturi auto, alta pentru istoric, alta pentru reminder-e. Niciuna nu vorbeste cu cealalta.
          </p>
          <p class="text-lg text-foreground-muted leading-relaxed">
            revizie.ro inlocuieste toate astea cu un singur cont, in care masina ta e centrul tuturor lucrurilor. Iti adaugi numarul de inmatriculare o data, restul se completeaza automat din DRPCIV. Apoi ai accesul la toate functionalitatile fara sa re-introduci aceleasi date.
          </p>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div class="bg-gradient-to-br from-accent-soft to-card rounded-2xl p-5 border border-accent/15">
            <div class="text-3xl font-bold text-accent mb-1">2026</div>
            <div class="text-sm text-foreground-muted">Anul lansarii</div>
          </div>
          <div class="bg-gradient-to-br from-success/10 to-card rounded-2xl p-5 border border-success/15">
            <div class="text-3xl font-bold text-success mb-1">100%</div>
            <div class="text-sm text-foreground-muted">Plan gratuit pentru oricine</div>
          </div>
          <div class="bg-gradient-to-br from-warning/10 to-card rounded-2xl p-5 border border-warning/15">
            <div class="text-3xl font-bold text-warning mb-1">UE</div>
            <div class="text-sm text-foreground-muted">Date stocate in Frankfurt</div>
          </div>
          <div class="bg-gradient-to-br from-info/10 to-card rounded-2xl p-5 border border-info/15">
            <div class="text-3xl font-bold text-info mb-1">Cod deschis</div>
            <div class="text-sm text-foreground-muted">Repo public pe GitHub</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-surface-muted">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-14">
        <h2 class="text-4xl font-bold text-foreground mb-3">Cum gandim platforma</h2>
        <p class="text-lg text-foreground-muted">Trei principii care ne ghideaza in tot ce livram.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-card rounded-2xl p-7 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-accent to-accent-strong flex items-center justify-center mb-5 shadow-md">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-foreground mb-2">Transparenta totala</h3>
          <p class="text-foreground-muted">Vezi exact ce face platforma cu datele tale (politica GDPR detaliata) si cat plateste fiecare functionalitate. Fara taxe ascunse, fara dark patterns.</p>
        </div>

        <div class="bg-card rounded-2xl p-7 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-warning to-accent flex items-center justify-center mb-5 shadow-md">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-foreground mb-2">Automatizare unde conteaza</h3>
          <p class="text-foreground-muted">VIN decoder care iti completeaza 24+ campuri din DRPCIV automat. Reminder-e care iti scriu cand expira ITP-ul. Lucruri care iti scot timp, nu munca in plus.</p>
        </div>

        <div class="bg-card rounded-2xl p-7 border border-border-subtle">
          <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-success to-success/70 flex items-center justify-center mb-5 shadow-md">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-foreground mb-2">Construim deschis</h3>
          <p class="text-foreground-muted">Repo-ul aplicatiei e public. Vezi exact ce schimbam, cum o gestionam, ce features urmeaza. Feedback-ul tau intra direct in roadmap.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-5xl mx-auto px-6">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-foreground mb-3">Contact</h2>
        <p class="text-lg text-foreground-muted">Suntem aici pentru tine.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-4 max-w-3xl mx-auto">
        <a href="mailto:office@revizie.ro" class="group bg-surface-muted rounded-2xl p-5 hover:bg-card hover:border-accent/30 border border-transparent transition-all text-center">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mx-auto mb-3">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Email</h3>
          <span class="text-sm text-foreground-muted group-hover:text-accent transition-colors">office@revizie.ro</span>
        </a>

        <a href="tel:0758500700" class="group bg-surface-muted rounded-2xl p-5 hover:bg-card hover:border-accent/30 border border-transparent transition-all text-center">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mx-auto mb-3">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Telefon</h3>
          <span class="text-sm text-foreground-muted group-hover:text-accent transition-colors">0758 500 700</span>
        </a>

        <div class="bg-surface-muted rounded-2xl p-5 text-center">
          <div class="w-12 h-12 rounded-xl bg-accent/15 text-accent flex items-center justify-center mx-auto mb-3">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Program suport</h3>
          <p class="text-sm text-foreground-muted">Luni - Vineri<br/>09:00 - 17:00</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-gradient-to-br from-accent via-accent-hover to-accent-strong">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Hai sa-ti simplificam relatia cu masina</h2>
      <p class="text-xl text-white/90 mb-10">Cont gratuit, fara card. Adaugi prima masina in 30 de secunde.</p>
      <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-10 py-5 bg-white text-accent-strong rounded-2xl font-bold text-lg shadow-2xl hover:scale-105 transition-all">
        Creeaza cont gratuit
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </section>

<?php get_footer(); ?>
