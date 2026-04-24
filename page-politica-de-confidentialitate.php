<?php
/**
 * Template Name: Politica de Confidentialitate
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
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-teal-500 to-cyan-500 flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>
        <div>
          <h1 class="text-3xl font-bold text-gray-900">Politica de Confidentialitate</h1>
          <p class="text-gray-500">Conform GDPR - Ultima actualizare: 4 Ianuarie 2026</p>
        </div>
      </div>

      <div class="prose prose-lg max-w-none">
        <div class="bg-teal-50 border border-teal-200 rounded-2xl p-6 mb-8">
          <p class="text-teal-800 m-0">
            <strong>Angajamentul nostru:</strong> revizie.ro respecta pe deplin Regulamentul General privind Protectia Datelor (GDPR - Regulamentul UE 2016/679). Protejam datele dumneavoastra personale si va oferim control total asupra lor.
          </p>
        </div>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
            </svg>
            1. Ce Date Colectam
          </h2>
          <div class="space-y-4">
            <div class="bg-gray-50 rounded-xl p-6">
              <h3 class="font-semibold text-gray-900 mb-3">Date furnizate direct de dumneavoastra:</h3>
              <ul class="space-y-2 text-gray-700">
                <li><strong>Date de identificare:</strong> nume, prenume, adresa de email</li>
                <li><strong>Date despre vehicule:</strong> marca, model, an fabricatie, numar inmatriculare, VIN, kilometraj</li>
                <li><strong>Date de contact:</strong> numar de telefon, adresa de livrare</li>
                <li><strong>Date financiare:</strong> istoricul comenzilor (nu stocam date complete ale cardurilor)</li>
                <li><strong>Documente:</strong> fotografii ale documentelor auto (ITP, RCA, asigurare)</li>
              </ul>
            </div>
            <div class="bg-gray-50 rounded-xl p-6">
              <h3 class="font-semibold text-gray-900 mb-3">Date colectate automat:</h3>
              <ul class="space-y-2 text-gray-700">
                <li><strong>Date tehnice:</strong> adresa IP, tip browser, sistem de operare</li>
                <li><strong>Date de utilizare:</strong> paginile vizitate, actiunile in aplicatie</li>
                <li><strong>Cookies:</strong> pentru functionarea platformei si imbunatatirea experientei</li>
              </ul>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
            </svg>
            2. Scopul Prelucrarii Datelor
          </h2>
          <div class="space-y-4 text-gray-700">
            <p>Prelucram datele dumneavoastra in urmatoarele scopuri:</p>
            <div class="grid md:grid-cols-2 gap-4">
              <div class="bg-orange-50 rounded-xl p-4">
                <h4 class="font-semibold text-orange-800 mb-2">Furnizarea serviciilor</h4>
                <ul class="text-sm text-orange-700 space-y-1">
                  <li>Gestionarea contului si garajului digital</li>
                  <li>Procesarea comenzilor si programarilor</li>
                  <li>Trimiterea notificarilor si reminder-elor</li>
                  <li>Asigurarea suportului tehnic</li>
                </ul>
              </div>
              <div class="bg-teal-50 rounded-xl p-4">
                <h4 class="font-semibold text-teal-800 mb-2">Imbunatatirea serviciilor</h4>
                <ul class="text-sm text-teal-700 space-y-1">
                  <li>Personalizarea recomandarilor AI</li>
                  <li>Analiza utilizarii platformei</li>
                  <li>Dezvoltarea de noi functionalitati</li>
                  <li>Prevenirea fraudelor</li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
            3. Temeiul Legal al Prelucrarii
          </h2>
          <div class="space-y-4 text-gray-700">
            <p>Prelucram datele dumneavoastra pe baza urmatoarelor temeiuri legale (conform Art. 6 GDPR):</p>
            <ul class="list-disc pl-6 space-y-2">
              <li><strong>Executarea contractului</strong> - pentru furnizarea serviciilor solicitate</li>
              <li><strong>Consimtamantul</strong> - pentru comunicari de marketing (optional)</li>
              <li><strong>Interesul legitim</strong> - pentru imbunatatirea serviciilor si prevenirea fraudelor</li>
              <li><strong>Obligatii legale</strong> - pentru conformitatea fiscala si legala</li>
            </ul>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            4. Partajarea Datelor cu Terti
          </h2>
          <div class="space-y-4 text-gray-700">
            <p>Datele dumneavoastra pot fi partajate cu:</p>
            <div class="bg-gray-50 rounded-xl p-6">
              <ul class="space-y-3">
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-teal-500 mt-2 shrink-0"></span>
                  <span><strong>Furnizori de piese si anvelope:</strong> pentru procesarea si livrarea comenzilor</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-teal-500 mt-2 shrink-0"></span>
                  <span><strong>Service-uri partenere:</strong> pentru programari si efectuarea lucrarilor</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-teal-500 mt-2 shrink-0"></span>
                  <span><strong>Companii de curierat:</strong> pentru livrarea produselor</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-teal-500 mt-2 shrink-0"></span>
                  <span><strong>Procesatori de plati:</strong> pentru tranzactii sigure (Stripe, procesatori bancari)</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-teal-500 mt-2 shrink-0"></span>
                  <span><strong>Furnizori de servicii cloud:</strong> pentru stocarea securizata a datelor (servere UE)</span>
                </li>
              </ul>
            </div>
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-4">
              <p class="text-amber-800 m-0">
                <strong>Important:</strong> Nu vindem si nu inchiriem niciodata datele dumneavoastra personale catre terti in scopuri de marketing.
              </p>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            5. Drepturile Dumneavoastra (GDPR)
          </h2>
          <div class="space-y-4">
            <p class="text-gray-700">Conform GDPR, aveti urmatoarele drepturi:</p>
            <div class="grid md:grid-cols-2 gap-4">
              <div class="border border-gray-200 rounded-xl p-4">
                <h4 class="font-semibold text-gray-900 mb-2">Dreptul de acces</h4>
                <p class="text-sm text-gray-600">Puteti solicita o copie a tuturor datelor pe care le detinem despre dumneavoastra.</p>
              </div>
              <div class="border border-gray-200 rounded-xl p-4">
                <h4 class="font-semibold text-gray-900 mb-2">Dreptul la rectificare</h4>
                <p class="text-sm text-gray-600">Puteti corecta datele incorecte sau incomplete direct din cont sau prin cerere.</p>
              </div>
              <div class="border border-gray-200 rounded-xl p-4">
                <h4 class="font-semibold text-gray-900 mb-2">Dreptul la stergere</h4>
                <p class="text-sm text-gray-600">Puteti solicita stergerea completa a datelor ("dreptul de a fi uitat").</p>
              </div>
              <div class="border border-gray-200 rounded-xl p-4">
                <h4 class="font-semibold text-gray-900 mb-2">Dreptul la portabilitate</h4>
                <p class="text-sm text-gray-600">Puteti primi datele intr-un format structurat pentru transfer.</p>
              </div>
              <div class="border border-gray-200 rounded-xl p-4">
                <h4 class="font-semibold text-gray-900 mb-2">Dreptul la opozitie</h4>
                <p class="text-sm text-gray-600">Puteti refuza prelucrarea datelor in anumite scopuri (ex: marketing).</p>
              </div>
              <div class="border border-gray-200 rounded-xl p-4">
                <h4 class="font-semibold text-gray-900 mb-2">Dreptul la restrictionare</h4>
                <p class="text-sm text-gray-600">Puteti limita modul in care va prelucram datele.</p>
              </div>
            </div>
            <p class="text-gray-700 mt-4">Pentru exercitarea acestor drepturi, contactati-ne la: <a href="mailto:gdpr@revizie.ro" class="text-teal-600 hover:text-teal-700 font-medium">gdpr@revizie.ro</a></p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
            </svg>
            6. Durata Pastrarii Datelor
          </h2>
          <div class="space-y-4 text-gray-700">
            <p>Pastram datele dumneavoastra doar atat timp cat este necesar:</p>
            <div class="bg-gray-50 rounded-xl p-6">
              <ul class="space-y-3">
                <li><strong>Date cont activ:</strong> Pe toata durata utilizarii platformei</li>
                <li><strong>Dupa stergerea contului:</strong> 30 zile pentru recuperare, apoi stergere completa</li>
                <li><strong>Date financiare:</strong> 10 ani (conform legislatiei fiscale)</li>
                <li><strong>Logs tehnice:</strong> Maximum 90 zile</li>
                <li><strong>Date marketing:</strong> Pana la retragerea consimtamantului</li>
              </ul>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
            7. Securitatea Datelor
          </h2>
          <div class="space-y-4 text-gray-700">
            <p>Implementam masuri tehnice si organizatorice pentru protejarea datelor:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Criptare SSL/TLS pentru toate comunicatiile</li>
              <li>Criptarea datelor sensibile in baza de date</li>
              <li>Autentificare securizata si protectie impotriva atacurilor</li>
              <li>Backup-uri regulate si redundanta datelor</li>
              <li>Acces restrictionat pe baza de roluri pentru angajati</li>
              <li>Audituri de securitate periodice</li>
            </ul>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            8. Contact si Plangeri
          </h2>
          <div class="bg-teal-50 rounded-xl p-6">
            <p class="text-gray-700 mb-4"><strong>Responsabil Protectia Datelor (DPO):</strong></p>
            <ul class="space-y-2 text-gray-700 mb-6">
              <li><strong>Email:</strong> <a href="mailto:gdpr@revizie.ro" class="text-teal-600 hover:text-teal-700">gdpr@revizie.ro</a></li>
              <li><strong>Telefon:</strong> 0758 500 700</li>
              <li><strong>Program:</strong> Luni - Vineri, 09:00 - 17:00</li>
            </ul>
            <div class="border-t border-teal-200 pt-4">
              <p class="text-gray-700">
                <strong>Autoritatea de supraveghere:</strong><br>
                Daca considerati ca drepturile dumneavoastra au fost incalcate, puteti depune o plangere la Autoritatea Nationala de Supraveghere a Prelucrarii Datelor cu Caracter Personal (ANSPDCP):
              </p>
              <ul class="mt-2 text-gray-700">
                <li>Website: <a href="https://www.dataprotection.ro" target="_blank" rel="noopener noreferrer" class="text-teal-600 hover:text-teal-700">www.dataprotection.ro</a></li>
                <li>Email: anspdcp@dataprotection.ro</li>
              </ul>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
