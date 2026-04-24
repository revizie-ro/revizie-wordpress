<?php
/**
 * Template Name: Home Page
 * Template for the front page / home
 */
get_header();
?>

  <section class="min-h-screen hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 opacity-30">
      <div class="absolute top-20 left-10 w-96 h-96 bg-orange-500/20 rounded-full blur-[120px]"></div>
      <div class="absolute bottom-20 right-10 w-80 h-80 bg-teal-500/20 rounded-full blur-[100px]"></div>
    </div>

    <div class="relative pt-32 pb-20">
      <div class="max-w-7xl mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-8">
            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg>
            <span class="text-sm text-white/90 font-medium">Platforma #1 pentru intretinerea auto in Romania</span>
          </div>

          <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
            Totul pentru masina ta,
            <span class="block bg-gradient-to-r from-orange-400 via-amber-400 to-teal-400 bg-clip-text text-transparent">alimentat de AI</span>
          </h1>

          <p class="text-xl text-white/70 mb-10 leading-relaxed max-w-2xl mx-auto">
            Gestioneaza masinile, gaseste piese si anvelope cu AI, programeaza la service si primeste alerte pentru ITP, RCA si revizie. Totul intr-o singura aplicatie.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
            <a href="https://app.revizie.ro/register" class="group px-8 py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white rounded-2xl font-semibold hover:shadow-2xl hover:shadow-orange-500/30 transition-all duration-300 inline-flex items-center justify-center gap-2">
              Incepe gratuit
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
            <a href="<?php echo home_url('/cum-functioneaza/'); ?>" class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white rounded-2xl font-semibold border border-white/20 hover:bg-white/20 transition-all inline-flex items-center justify-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              Cum functioneaza
            </a>
          </div>

          <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-3xl mx-auto">
            <div class="text-center">
              <div class="text-3xl md:text-4xl font-bold text-white mb-1">50K+</div>
              <div class="text-sm text-white/60">Utilizatori activi</div>
            </div>
            <div class="text-center">
              <div class="text-3xl md:text-4xl font-bold text-white mb-1">500+</div>
              <div class="text-sm text-white/60">Service-uri partenere</div>
            </div>
            <div class="text-center">
              <div class="text-3xl md:text-4xl font-bold text-white mb-1">4.9</div>
              <div class="text-sm text-white/60">Rating aplicatie</div>
            </div>
            <div class="text-center">
              <div class="text-3xl md:text-4xl font-bold text-white mb-1">24/7</div>
              <div class="text-sm text-white/60">Asistenta rutiera</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-white relative">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-orange-100 rounded-full text-orange-700 text-sm font-medium mb-4">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
          Functionalitati principale
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Tot ce ai nevoie pentru masina ta</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">De la gestionarea documentelor pana la gasirea pieselor perfecte cu AI.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <a href="<?php echo home_url('/functii/garaj-digital/'); ?>" class="group bg-gradient-to-br from-orange-50 to-amber-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-orange-500 to-amber-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Garaj Digital</h3>
          <p class="text-gray-600 mb-4">Gestioneaza toate masinile tale intr-un singur loc. Istoric complet, documente digitalizate si alerte automate.</p>
          <span class="inline-flex items-center gap-2 text-orange-600 font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </span>
        </a>

        <a href="<?php echo home_url('/functii/servicii-auto/'); ?>" class="group bg-gradient-to-br from-teal-50 to-cyan-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-teal-100">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-teal-500 to-cyan-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Servicii Auto</h3>
          <p class="text-gray-600 mb-4">Gaseste service-ul perfect din reteaua noastra de parteneri verificati. Programare online in cateva secunde.</p>
          <span class="inline-flex items-center gap-2 text-teal-600 font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </span>
        </a>

        <a href="<?php echo home_url('/functii/anvelope/'); ?>" class="group bg-gradient-to-br from-orange-50 to-rose-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-orange-500 to-rose-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" stroke-width="2"/>
              <circle cx="12" cy="12" r="3" stroke-width="2"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Anvelope cu AI</h3>
          <p class="text-gray-600 mb-4">Recomandari inteligente de anvelope bazate pe masina ta, stilul de condus si buget.</p>
          <span class="inline-flex items-center gap-2 text-orange-600 font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </span>
        </a>

        <a href="<?php echo home_url('/functii/tractari/'); ?>" class="group bg-gradient-to-br from-orange-50 to-amber-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-orange-500 to-amber-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Tractari 24/7</h3>
          <p class="text-gray-600 mb-4">Asistenta rutiera disponibila non-stop. Ajutor rapid oriunde te afli in Romania.</p>
          <span class="inline-flex items-center gap-2 text-orange-600 font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </span>
        </a>

        <a href="<?php echo home_url('/functii/piese-auto/'); ?>" class="group bg-gradient-to-br from-teal-50 to-emerald-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-teal-100">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-teal-500 to-emerald-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Piese Auto</h3>
          <p class="text-gray-600 mb-4">Catalog complet de piese de la furnizori verificati. Compatibilitate garantata cu masina ta.</p>
          <span class="inline-flex items-center gap-2 text-teal-600 font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </span>
        </a>

        <a href="<?php echo home_url('/functii/remindere/'); ?>" class="group bg-gradient-to-br from-orange-50 to-amber-50 rounded-3xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-orange-500 to-amber-500 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Reminder-e Inteligente</h3>
          <p class="text-gray-600 mb-4">Nu mai uita niciodata ITP-ul, RCA sau revizia. Alerte automate pentru toate termenele.</p>
          <span class="inline-flex items-center gap-2 text-orange-600 font-medium group-hover:gap-3 transition-all">
            Descopera
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </span>
        </a>
      </div>
    </div>
  </section>

  <section class="py-20 cta-gradient">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Incepe sa-ti gestionezi masina mai usor</h2>
      <p class="text-xl text-white/90 mb-10">Creeaza cont gratuit si descopera toate functionalitatile platformei.</p>
      <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-gray-900 rounded-2xl font-bold hover:shadow-xl transition-all">
        Creeaza cont gratuit
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>
    </div>
  </section>

<?php get_footer(); ?>
