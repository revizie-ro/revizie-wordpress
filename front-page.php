<?php
/**
 * Template Name: Home Page
 * Template for the front page / home
 */
get_header();
?>

  <section class="min-h-screen hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 opacity-40">
      <div class="absolute top-20 left-10 w-96 h-96 bg-accent/15 rounded-full blur-[120px]"></div>
      <div class="absolute bottom-20 right-10 w-80 h-80 bg-warning/15 rounded-full blur-[100px]"></div>
    </div>

    <div class="relative pt-32 pb-20">
      <div class="max-w-7xl mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent-soft border border-accent/20 mb-8">
            <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg>
            <span class="text-sm text-accent-strong font-medium">Platforma inteligenta pentru intretinerea auto</span>
          </div>

          <h1 class="text-5xl md:text-7xl font-bold text-foreground mb-6 leading-[1.1]">
            Totul pentru masina ta,
            <span class="block bg-gradient-to-r from-accent via-accent-hover to-warning bg-clip-text text-transparent leading-[1.15] pb-2">intr-un singur loc</span>
          </h1>

          <p class="text-xl text-foreground-muted mb-10 leading-relaxed max-w-2xl mx-auto">
            Garaj digital, marketplace de masini second-hand, asigurari RCA &amp; CASCO online si verificare istoric prin VIN. Toate intr-o singura aplicatie.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
            <a href="https://app.revizie.ro/register" class="group px-8 py-4 bg-accent hover:bg-accent-hover text-white rounded-2xl font-semibold shadow-lg hover:shadow-2xl hover:shadow-accent/30 transition-all duration-300 inline-flex items-center justify-center gap-2">
              Incepe gratuit
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
            <a href="<?php echo home_url('/cum-functioneaza/'); ?>" class="px-8 py-4 bg-card border border-border text-foreground rounded-2xl font-semibold hover:border-accent hover:text-accent transition-all inline-flex items-center justify-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              Cum functioneaza
            </a>
          </div>

          <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-3xl mx-auto">
            <div class="text-center">
              <div class="text-2xl md:text-3xl font-bold text-foreground mb-1">RCA &amp; CASCO</div>
              <div class="text-sm text-foreground-subtle">Polite online</div>
            </div>
            <div class="text-center">
              <div class="text-2xl md:text-3xl font-bold text-foreground mb-1">Multi-vehicul</div>
              <div class="text-sm text-foreground-subtle">Pana la 50 masini</div>
            </div>
            <div class="text-center">
              <div class="text-2xl md:text-3xl font-bold text-foreground mb-1">VIN decoder</div>
              <div class="text-sm text-foreground-subtle">Date oficiale DRPCIV</div>
            </div>
            <div class="text-center">
              <div class="text-2xl md:text-3xl font-bold text-foreground mb-1">GDPR</div>
              <div class="text-sm text-foreground-subtle">Date in UE</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Live features -->
  <section class="py-24 bg-card relative">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-accent-soft rounded-full text-accent-strong text-sm font-medium mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          Functionalitati disponibile
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-foreground mb-4">Tot ce ai nevoie pentru masina ta</h2>
        <p class="text-xl text-foreground-muted max-w-2xl mx-auto">5 instrumente esentiale pentru orice posesor de masina, accesibile din cont.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Garaj Digital -->
        <a href="<?php echo home_url('/functii/garaj-digital/'); ?>" class="group bg-gradient-to-br from-accent-soft to-card rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-accent/15">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-accent to-accent-strong flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-md">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-foreground mb-3">Garaj Digital</h3>
          <p class="text-foreground-muted mb-4">Toate masinile tale intr-un singur loc: documente digitale, istoric intretineri si scadente ITP / RCA / revizie monitorizate automat.</p>
          <span class="inline-flex items-center gap-2 text-accent-strong font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </span>
        </a>

        <!-- Anunturi masini -->
        <a href="https://app.revizie.ro/anunturi" class="group bg-gradient-to-br from-warning/10 to-card rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-warning/15">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-warning to-accent flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-md">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-foreground mb-3">Anunturi masini</h3>
          <p class="text-foreground-muted mb-4">Marketplace pentru masini second-hand. Vinde-ti masina cu un click din garaj sau cauta urmatoarea ta masina cu filtre detaliate.</p>
          <span class="inline-flex items-center gap-2 text-warning font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </span>
        </a>

        <!-- Asigurari RCA & CASCO -->
        <a href="https://app.revizie.ro/asigurari/rca" class="group bg-gradient-to-br from-success/10 to-card rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-success/15">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-success to-success/70 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-md">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-foreground mb-3">Asigurari RCA &amp; CASCO</h3>
          <p class="text-foreground-muted mb-4">Calculezi pretul si comparti oferte de la mai multi asiguratori in 2 minute. Polita emisa direct in cont, plata securizata.</p>
          <span class="inline-flex items-center gap-2 text-success font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </span>
        </a>

        <!-- Istoric VIN -->
        <a href="https://app.revizie.ro" class="group bg-gradient-to-br from-info/10 to-card rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-info/15">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-info to-info/70 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-md">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-foreground mb-3">Istoric masina prin VIN</h3>
          <p class="text-foreground-muted mb-4">Inainte sa cumperi o masina, verifici istoricul cu carVertical: kilometraj, accidente, fosti proprietari. Discount 20% pentru utilizatorii revizie.ro.</p>
          <span class="inline-flex items-center gap-2 text-info font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </span>
        </a>

        <!-- Reminders -->
        <a href="<?php echo home_url('/functii/remindere/'); ?>" class="group bg-gradient-to-br from-accent-soft to-card rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-accent/15">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-accent to-accent-strong flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-md">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-foreground mb-3">Reminder-e automate</h3>
          <p class="text-foreground-muted mb-4">Nu mai uita niciodata ITP-ul, RCA-ul sau revizia. Notificari pe email cu cateva saptamani inainte de expirare.</p>
          <span class="inline-flex items-center gap-2 text-accent-strong font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </span>
        </a>
      </div>
    </div>
  </section>

  <!-- Coming soon + single email capture -->
  <section class="py-20 bg-surface-muted relative">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-card border border-border rounded-full text-foreground-muted text-sm font-medium mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
          In dezvoltare
        </div>
        <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-3">Functionalitati care vin curand</h2>
        <p class="text-lg text-foreground-muted max-w-2xl mx-auto">Le pregatim acum si le anuntam imediat ce intra live. Lasa-ti emailul si te tinem la curent.</p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-10">
        <div class="bg-card border border-border-subtle rounded-2xl p-5">
          <div class="w-11 h-11 rounded-xl bg-accent/15 text-accent flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Programari service</h3>
          <p class="text-xs text-foreground-muted">Programare online la service-uri partenere verificate.</p>
        </div>
        <div class="bg-card border border-border-subtle rounded-2xl p-5">
          <div class="w-11 h-11 rounded-xl bg-warning/15 text-warning flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Tractari 24/7</h3>
          <p class="text-xs text-foreground-muted">Asistenta rutiera oriunde in Romania.</p>
        </div>
        <div class="bg-card border border-border-subtle rounded-2xl p-5">
          <div class="w-11 h-11 rounded-xl bg-info/15 text-info flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Marketplace piese</h3>
          <p class="text-xs text-foreground-muted">Piese auto de la furnizori verificati, compatibilitate AI.</p>
        </div>
        <div class="bg-card border border-border-subtle rounded-2xl p-5">
          <div class="w-11 h-11 rounded-xl bg-success/15 text-success flex items-center justify-center mb-3">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/></svg>
          </div>
          <h3 class="font-semibold text-foreground mb-1">Anvelope</h3>
          <p class="text-xs text-foreground-muted">Cauta anvelopele potrivite cu recomandari AI.</p>
        </div>
      </div>

      <!-- Single email capture -->
      <div class="max-w-2xl mx-auto bg-card rounded-2xl border border-border-subtle p-6 sm:p-8 text-center shadow-sm">
        <h3 class="text-lg font-semibold text-foreground mb-2">Vrei sa stii cand lansam aceste functionalitati?</h3>
        <p class="text-sm text-foreground-muted mb-5">Lasa-ti emailul si iti dam un singur mesaj scurt pentru fiecare lansare. Fara spam.</p>
        <?php revizie_render_waitlist_form('general', 'urmatoarele functii'); ?>
      </div>
    </div>
  </section>

  <!-- Social -->
  <section class="py-16 bg-card border-t border-border-subtle">
    <div class="max-w-3xl mx-auto px-6 text-center">
      <h2 class="text-2xl font-bold text-foreground mb-2">Urmareste-ne pe social</h2>
      <p class="text-foreground-muted mb-6">Tips, noutati despre lansari si feedback rapid.</p>
      <div class="flex items-center justify-center gap-4">
        <?php revizie_render_social_links('card'); ?>
      </div>
    </div>
  </section>

  <!-- Final CTA -->
  <section class="py-24 bg-gradient-to-br from-accent via-accent-hover to-accent-strong">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Incepe sa-ti gestionezi masina mai usor</h2>
      <p class="text-xl text-white/90 mb-10">Creeaza cont gratuit si descopera toate functionalitatile platformei.</p>
      <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-10 py-5 bg-white text-accent-strong rounded-2xl font-bold text-lg shadow-2xl hover:shadow-3xl hover:scale-105 transition-all">
        Creeaza cont gratuit
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>
  </section>

<?php get_footer(); ?>
