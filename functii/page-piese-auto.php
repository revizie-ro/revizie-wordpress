<?php
/**
 * Template Name: Functie - Piese Auto
 */
get_header();
?>

  <section class="pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-teal-50 via-white to-emerald-50/30"></div>
    <div class="absolute top-20 right-10 w-96 h-96 bg-teal-500/10 rounded-full blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-6">
      <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-900 mb-8 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Inapoi la pagina principala
      </a>

      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <div class="inline-flex items-center gap-2 px-4 py-2 bg-teal-100 rounded-full mb-6">
            <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
            <span class="text-sm text-teal-700 font-medium">Piese Auto</span>
          </div>

          <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Toate piesele auto,
            <span class="block bg-gradient-to-r from-teal-500 to-emerald-500 bg-clip-text text-transparent">un singur click</span>
          </h1>

          <p class="text-xl text-gray-600 mb-8 leading-relaxed">Cel mai mare marketplace de piese auto din Romania. Cauta dupa VIN, marca sau cod piesa si gaseste instant ce ai nevoie de la furnizori verificati, cu livrare rapida la usa ta.</p>

          <div class="flex flex-col sm:flex-row gap-4">
            <a href="https://app.revizie.ro/register" class="px-8 py-4 bg-gradient-to-r from-teal-500 to-emerald-500 text-white rounded-2xl font-semibold hover:shadow-xl hover:shadow-teal-500/25 transition-all text-center inline-flex items-center justify-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
              Cauta piese
            </a>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
            <div class="text-3xl font-bold text-teal-600 mb-1">500K+</div>
            <div class="text-sm text-gray-500">Piese disponibile</div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
            <div class="text-3xl font-bold text-teal-600 mb-1">100+</div>
            <div class="text-sm text-gray-500">Furnizori verificati</div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
            <div class="text-3xl font-bold text-teal-600 mb-1">24h</div>
            <div class="text-sm text-gray-500">Livrare rapida</div>
          </div>
          <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
            <div class="text-3xl font-bold text-teal-600 mb-1">100%</div>
            <div class="text-sm text-gray-500">Garantie calitate</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">De ce sa alegi marketplace-ul nostru</h2>
        <p class="text-xl text-gray-600">Gasesti piese originale si aftermarket pentru orice masina</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-emerald-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Cautare dupa VIN</h3>
          <p class="text-gray-600">Introdu VIN-ul masinii si gaseste automat piesele compatibile cu vehiculul tau.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-emerald-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Furnizori verificati</h3>
          <p class="text-gray-600">Toti furnizorii sunt verificati si ofera garantie pentru piesele comercializate.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-emerald-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Livrare rapida</h3>
          <p class="text-gray-600">Majoritatea pieselor sunt livrate in 24-48 de ore, direct la adresa ta.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-emerald-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Comparatie preturi</h3>
          <p class="text-gray-600">Compara preturile de la mai multi furnizori si alege oferta cea mai buna.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-emerald-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Stoc actualizat</h3>
          <p class="text-gray-600">Disponibilitatea pieselor este actualizata in timp real pentru comenzi fara surprize.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-100 to-emerald-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Retur usor</h3>
          <p class="text-gray-600">Politica de retur simpla pentru piesele care nu corespund sau sunt defecte.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-to-r from-teal-500 to-emerald-500">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Gaseste piesele de care ai nevoie</h2>
      <p class="text-xl text-white/90 mb-10">Peste 500.000 de piese disponibile de la furnizori verificati, cu livrare rapida.</p>
      <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-gray-900 rounded-2xl font-bold hover:shadow-xl transition-all">
        Incepe cautarea
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </section>

<?php get_footer(); ?>
