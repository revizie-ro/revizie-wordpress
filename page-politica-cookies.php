<?php
/**
 * Template Name: Politica Cookies
 */
get_header();
?>

  <main class="pt-24 pb-20">
    <div class="max-w-4xl mx-auto px-6">
      <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-900 mb-8 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        Inapoi la pagina principala
      </a>

      <div class="flex items-center gap-4 mb-8">
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-500 flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <div>
          <h1 class="text-3xl font-bold text-gray-900">Politica Cookies</h1>
          <p class="text-gray-500">Ultima actualizare: 4 Ianuarie 2026</p>
        </div>
      </div>

      <div class="prose prose-lg max-w-none">
        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Ce sunt cookie-urile?</h2>
          <div class="space-y-4 text-gray-700">
            <p>Cookie-urile sunt fisiere text de mici dimensiuni stocate pe dispozitivul dumneavoastra (computer, telefon, tableta) atunci cand vizitati un website. Acestea permit site-ului sa va "aminteasca" - preferintele, actiunile si alte informatii.</p>
            <p>Cookie-urile sunt esentiale pentru functionarea moderna a internetului si nu pot accesa alte informatii de pe dispozitivul dumneavoastra.</p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Tipuri de cookies utilizate</h2>

          <div class="space-y-6">
            <div class="bg-green-50 border border-green-200 rounded-2xl p-6">
              <div class="flex items-center gap-3 mb-4">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <h3 class="text-xl font-bold text-green-800 m-0">Cookies Strict Necesare</h3>
              </div>
              <p class="text-green-700 mb-4">Aceste cookies sunt esentiale pentru functionarea platformei. Fara ele, site-ul nu ar functiona corect.</p>
              <div class="bg-white rounded-xl p-4 overflow-x-auto">
                <table class="w-full text-sm">
                  <thead>
                    <tr class="border-b">
                      <th class="text-left py-2 font-semibold text-gray-700">Cookie</th>
                      <th class="text-left py-2 font-semibold text-gray-700">Scop</th>
                      <th class="text-left py-2 font-semibold text-gray-700">Durata</th>
                    </tr>
                  </thead>
                  <tbody class="text-gray-600">
                    <tr class="border-b">
                      <td class="py-2">sb-auth-token</td>
                      <td class="py-2">Autentificare utilizator</td>
                      <td class="py-2">Sesiune</td>
                    </tr>
                    <tr class="border-b">
                      <td class="py-2">theme</td>
                      <td class="py-2">Preferinta tema (light/dark)</td>
                      <td class="py-2">1 an</td>
                    </tr>
                    <tr>
                      <td class="py-2">language</td>
                      <td class="py-2">Preferinta limba</td>
                      <td class="py-2">1 an</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6">
              <div class="flex items-center gap-3 mb-4">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <h3 class="text-xl font-bold text-blue-800 m-0">Cookies Functionale</h3>
              </div>
              <p class="text-blue-700 mb-4">Permit functionalitatii imbunatatite si personalizare. Pot fi setate de noi sau de furnizori terti.</p>
              <div class="bg-white rounded-xl p-4 overflow-x-auto">
                <table class="w-full text-sm">
                  <thead>
                    <tr class="border-b">
                      <th class="text-left py-2 font-semibold text-gray-700">Cookie</th>
                      <th class="text-left py-2 font-semibold text-gray-700">Scop</th>
                      <th class="text-left py-2 font-semibold text-gray-700">Durata</th>
                    </tr>
                  </thead>
                  <tbody class="text-gray-600">
                    <tr class="border-b">
                      <td class="py-2">selected_car</td>
                      <td class="py-2">Ultima masina selectata</td>
                      <td class="py-2">30 zile</td>
                    </tr>
                    <tr>
                      <td class="py-2">cart_items</td>
                      <td class="py-2">Continut cos cumparaturi</td>
                      <td class="py-2">7 zile</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6">
              <div class="flex items-center gap-3 mb-4">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
                <h3 class="text-xl font-bold text-gray-800 m-0">Cookies Analitice</h3>
              </div>
              <p class="text-gray-700 mb-4">Ne ajuta sa intelegem cum este utilizata platforma pentru a o imbunatati. Datele sunt anonimizate.</p>
              <div class="bg-white rounded-xl p-4 overflow-x-auto">
                <table class="w-full text-sm">
                  <thead>
                    <tr class="border-b">
                      <th class="text-left py-2 font-semibold text-gray-700">Cookie</th>
                      <th class="text-left py-2 font-semibold text-gray-700">Scop</th>
                      <th class="text-left py-2 font-semibold text-gray-700">Durata</th>
                    </tr>
                  </thead>
                  <tbody class="text-gray-600">
                    <tr class="border-b">
                      <td class="py-2">_ga</td>
                      <td class="py-2">Google Analytics - identificare</td>
                      <td class="py-2">2 ani</td>
                    </tr>
                    <tr>
                      <td class="py-2">_gid</td>
                      <td class="py-2">Google Analytics - sesiune</td>
                      <td class="py-2">24 ore</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Cum sa gestionati cookies</h2>
          <div class="space-y-4 text-gray-700">
            <p>Puteti controla si sterge cookies din setarile browserului dumneavoastra. Iata cum:</p>
            <div class="grid md:grid-cols-2 gap-4">
              <a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer" class="block bg-gray-50 rounded-xl p-4 hover:bg-gray-100 transition-colors no-underline">
                <h4 class="font-semibold text-gray-900">Google Chrome</h4>
                <p class="text-sm text-gray-600 m-0">Setari &gt; Confidentialitate &gt; Cookies</p>
              </a>
              <a href="https://support.mozilla.org/ro/kb/activarea-si-dezactivarea-cookies" target="_blank" rel="noopener noreferrer" class="block bg-gray-50 rounded-xl p-4 hover:bg-gray-100 transition-colors no-underline">
                <h4 class="font-semibold text-gray-900">Mozilla Firefox</h4>
                <p class="text-sm text-gray-600 m-0">Optiuni &gt; Confidentialitate &gt; Cookies</p>
              </a>
              <a href="https://support.apple.com/ro-ro/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer" class="block bg-gray-50 rounded-xl p-4 hover:bg-gray-100 transition-colors no-underline">
                <h4 class="font-semibold text-gray-900">Safari</h4>
                <p class="text-sm text-gray-600 m-0">Preferinte &gt; Confidentialitate</p>
              </a>
              <a href="https://support.microsoft.com/ro-ro/microsoft-edge/stergerea-modulelor-cookie-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer" class="block bg-gray-50 rounded-xl p-4 hover:bg-gray-100 transition-colors no-underline">
                <h4 class="font-semibold text-gray-900">Microsoft Edge</h4>
                <p class="text-sm text-gray-600 m-0">Setari &gt; Confidentialitate &gt; Cookies</p>
              </a>
            </div>
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 mt-4">
              <p class="text-amber-800 m-0">
                <strong>Atentie:</strong> Dezactivarea cookies strict necesare poate afecta functionarea platformei (nu veti putea ramane autentificat, cosul de cumparaturi nu va fi salvat, etc.)
              </p>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4">Contact</h2>
          <div class="bg-gray-50 rounded-xl p-6">
            <p class="text-gray-700 mb-4">Pentru intrebari despre politica de cookies, contactati-ne:</p>
            <ul class="space-y-2 text-gray-700 list-none pl-0">
              <li><strong>Email:</strong> <a href="mailto:gdpr@revizie.ro" class="text-orange-500 hover:text-orange-600">gdpr@revizie.ro</a></li>
              <li><strong>Telefon:</strong> 0758 500 700</li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
