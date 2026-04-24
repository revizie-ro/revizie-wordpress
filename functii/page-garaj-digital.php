<?php
/**
 * Template Name: Functie - Garaj Digital
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
            <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            <span class="text-sm text-orange-700 font-medium">Garaj Digital</span>
          </div>

          <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Toate masinile tale,
            <span class="block bg-gradient-to-r from-orange-500 to-amber-500 bg-clip-text text-transparent">intr-un singur loc</span>
          </h1>

          <p class="text-xl text-gray-600 mb-8 leading-relaxed">Garajul Digital este centrul de comanda pentru masinile tale. Aici gestionezi documente, urmaresti istoricul de intretinere si primesti alerte pentru toate termenele importante.</p>

          <div class="flex flex-col sm:flex-row gap-4">
            <a href="https://app.revizie.ro/register" class="px-8 py-4 bg-gradient-to-r from-orange-500 to-amber-500 text-white rounded-2xl font-semibold hover:shadow-xl hover:shadow-orange-500/25 transition-all text-center inline-flex items-center justify-center gap-2">
              Incepe gratuit
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </div>

        <div class="relative">
          <div class="bg-gradient-to-br from-orange-500 to-amber-500 rounded-3xl p-8 shadow-2xl shadow-orange-500/20">
            <div class="bg-white rounded-2xl p-6 space-y-4">
              <div class="flex items-center gap-4">
                <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-gray-800 to-gray-600 flex items-center justify-center">
                  <span class="text-white text-2xl font-bold">VW</span>
                </div>
                <div>
                  <h3 class="font-bold text-gray-900">Volkswagen Golf 7</h3>
                  <p class="text-sm text-gray-500">2.0 TDI 150 CP | 2019</p>
                </div>
              </div>
              <div class="grid grid-cols-2 gap-3">
                <div class="bg-green-50 rounded-xl p-3">
                  <div class="text-xs text-green-600 mb-1">ITP Valid</div>
                  <div class="text-sm font-semibold text-green-700">pana la 15.08.2026</div>
                </div>
                <div class="bg-orange-50 rounded-xl p-3">
                  <div class="text-xs text-orange-600 mb-1">RCA Expira</div>
                  <div class="text-sm font-semibold text-orange-700">in 23 zile</div>
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
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Ce poti face in Garajul Digital</h2>
        <p class="text-xl text-gray-600">Toate instrumentele de care ai nevoie pentru a-ti gestiona masinile</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Toate masinile intr-un loc</h3>
          <p class="text-gray-600">Gestioneaza una sau mai multe masini cu toate detaliile tehnice.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Documente digitalizate</h3>
          <p class="text-gray-600">Salveaza digital toate documentele importante: talon, asigurare RCA, certificat ITP.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Istoric complet</h3>
          <p class="text-gray-600">Fiecare interventie este inregistrata automat: data, service, lucrare efectuata, pret.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Alerte automate</h3>
          <p class="text-gray-600">Primesti notificari din timp pentru ITP, RCA, revizie si orice termen important.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Expirari vizibile</h3>
          <p class="text-gray-600">Calendarul masinii iti arata clar ce urmeaza: cand expira documentele, cand e nevoie de revizie.</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-100 to-amber-100 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Galerie foto</h3>
          <p class="text-gray-600">Pastreaza fotografii cu masina ta, documente scanate sau detalii importante.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-to-r from-orange-500 to-amber-500">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Incepe sa-ti gestionezi masinile mai usor</h2>
      <p class="text-xl text-white/90 mb-10">Creeaza cont gratuit si adauga prima ta masina in mai putin de 2 minute.</p>
      <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-gray-900 rounded-2xl font-bold hover:shadow-xl transition-all">
        Creeaza cont gratuit
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </section>

<?php get_footer(); ?>
