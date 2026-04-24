<?php
/**
 * Template Name: Functie - Remindere
 */
get_header();
?>

  <section class="pt-32 pb-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-orange-50 via-white to-amber-50/30"></div>
    <div class="absolute top-20 right-10 w-96 h-96 bg-orange-500/10 rounded-full blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-6">
      <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-900 mb-8 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Inapoi la pagina principala
      </a>

      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div>
          <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-100 rounded-full mb-6">
            <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
            <span class="text-sm text-orange-700 font-medium">Remindere</span>
          </div>

          <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Nu mai uita niciodata
            <span class="block bg-gradient-to-r from-orange-500 to-amber-500 bg-clip-text text-transparent">ITP, RCA sau revizia</span>
          </h1>

          <p class="text-xl text-gray-600 mb-8 leading-relaxed">Sistemul nostru inteligent de remindere te notifica din timp pentru toate termenele importante ale masinii. ITP, RCA, revizie, schimb ulei - nu vei mai rata niciodata o data limita.</p>

          <div class="flex flex-col sm:flex-row gap-4">
            <a href="https://app.revizie.ro/register" class="px-8 py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white rounded-2xl font-semibold hover:shadow-xl hover:shadow-orange-500/25 transition-all text-center inline-flex items-center justify-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
              Activeaza reminderele
            </a>
          </div>
        </div>

        <div class="relative">
          <div class="bg-gradient-to-br from-orange-500 to-amber-500 rounded-3xl p-8 shadow-2xl shadow-orange-500/20">
            <div class="bg-white rounded-2xl p-6 space-y-4">
              <div class="flex items-center gap-3 p-3 bg-red-50 rounded-xl">
                <div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                  <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <div>
                  <div class="text-sm font-semibold text-red-700">RCA expira in 7 zile</div>
                  <div class="text-xs text-red-600">Reinnoieste acum pentru a evita amenzile</div>
                </div>
              </div>
              <div class="flex items-center gap-3 p-3 bg-orange-50 rounded-xl">
                <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center">
                  <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                  <div class="text-sm font-semibold text-orange-700">ITP in 30 zile</div>
                  <div class="text-xs text-orange-600">Programeaza inspectia tehnica</div>
                </div>
              </div>
              <div class="flex items-center gap-3 p-3 bg-green-50 rounded-xl">
                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                  <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                  <div class="text-sm font-semibold text-green-700">Revizie OK</div>
                  <div class="text-xs text-green-600">Urmatoarea revizie peste 4 luni</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Ce poti monitoriza cu reminderele</h2>
        <p class="text-xl text-gray-600">Toate termenele importante, intr-un singur loc</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Alerte ITP</h3>
          <p class="text-gray-600">Notificare cu 30, 14 si 7 zile inainte de expirarea inspectiei tehnice periodice.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Alerte RCA</h3>
          <p class="text-gray-600">Nu mai risca amenzi - primesti alerte din timp pentru reinnoirea asigurarii obligatorii.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Remindere revizie</h3>
          <p class="text-gray-600">Bazeaza-te pe kilometri sau timp - sistemul stie cand e momentul reviziei.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Schimb ulei</h3>
          <p class="text-gray-600">Alerte bazate pe kilometrajul parcurs sau intervalul de timp recomandat.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Schimb anvelope</h3>
          <p class="text-gray-600">Reminder sezonier pentru trecerea de la anvelope de vara la iarna si invers.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Notificari personalizate</h3>
          <p class="text-gray-600">Alege cum vrei sa primesti alertele: push, email sau SMS - tu decizi.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-to-r from-orange-500 to-amber-500">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Nu mai rata niciun termen important</h2>
      <p class="text-xl text-white/90 mb-10">Activeaza reminderele inteligente si fii mereu la curent cu masina ta.</p>
      <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-gray-900 rounded-2xl font-bold hover:shadow-xl transition-all">
        Activeaza acum
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </section>

<?php get_footer(); ?>
