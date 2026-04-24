<?php
/**
 * Template Name: Functie - Servicii Auto
 */
get_header();
?>

  <section class="pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-teal-50 via-white to-cyan-50/30"></div>
    <div class="absolute top-20 right-10 w-96 h-96 bg-teal-500/10 rounded-full blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-6">
      <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-900 mb-8 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Inapoi la pagina principala
      </a>

      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <div class="inline-flex items-center gap-2 px-4 py-2 bg-teal-100 rounded-full mb-6">
            <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            <span class="text-sm text-teal-700 font-medium">Servicii Auto</span>
          </div>

          <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Gaseste service-ul perfect
            <span class="block bg-gradient-to-r from-teal-500 to-cyan-500 bg-clip-text text-transparent">pentru masina ta</span>
          </h1>

          <p class="text-xl text-gray-600 mb-8 leading-relaxed">Compara preturi, citeste recenzii si programeaza online la cele mai bune service-uri din zona ta. Toti partenerii nostri sunt verificati si ofera garantie pentru lucrari.</p>

          <div class="flex flex-col sm:flex-row gap-4">
            <a href="https://app.revizie.ro/register" class="px-8 py-4 bg-gradient-to-r from-teal-500 to-cyan-500 text-white rounded-2xl font-semibold hover:shadow-xl hover:shadow-teal-500/25 transition-all text-center inline-flex items-center justify-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
              Cauta service
            </a>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
            <div class="text-3xl font-bold text-teal-600 mb-1">500+</div>
            <div class="text-sm text-gray-500">Service-uri partenere</div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
            <div class="text-3xl font-bold text-teal-600 mb-1">4.8</div>
            <div class="text-sm text-gray-500">Rating mediu</div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
            <div class="text-3xl font-bold text-teal-600 mb-1">50K+</div>
            <div class="text-sm text-gray-500">Programari efectuate</div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
            <div class="text-3xl font-bold text-teal-600 mb-1">98%</div>
            <div class="text-sm text-gray-500">Clienti multumiti</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Tipuri de servicii disponibile</h2>
        <p class="text-xl text-gray-600">De la revizie simpla la reparatii complexe, gasesti tot ce ai nevoie</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-cyan-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Revizie completa</h3>
          <p class="text-gray-600">Schimb ulei, filtre, verificari tehnice complete conform specificatiilor producatorului.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-cyan-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">ITP</h3>
          <p class="text-gray-600">Inspectie tehnica periodica la parteneri autorizati RAR cu programare rapida.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-cyan-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Frane</h3>
          <p class="text-gray-600">Schimb placute, discuri, lichid frana si verificare sistem complet de franare.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-cyan-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Diagnoza auto</h3>
          <p class="text-gray-600">Citire erori, diagnoza computerizata si identificare probleme cu echipament profesional.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-cyan-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Distributie</h3>
          <p class="text-gray-600">Inlocuire kit distributie, pompa apa si verificari conexe la mecanici specializati.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-cyan-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Geometrie roti</h3>
          <p class="text-gray-600">Verificare si reglare geometrie directie pe stand profesional pentru siguranta optima.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-to-r from-teal-500 to-cyan-500">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Programeaza-te acum la service</h2>
      <p class="text-xl text-white/90 mb-10">Gaseste cel mai bun service pentru masina ta in doar cateva minute.</p>
      <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-gray-900 rounded-2xl font-bold hover:shadow-xl transition-all">
        Incepe cautarea
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </section>

<?php get_footer(); ?>
