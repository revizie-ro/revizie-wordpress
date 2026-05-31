<?php
/**
 * Template Name: Termeni si Conditii
 *
 * Mirrors app.revizie.ro's "Termeni si Conditii" page (RCA-only alignment,
 * 28 Mai 2026). Keep in sync with revizie-app/src/pages/legal/TermsPage.tsx.
 */
get_header();
?>

  <main class="pt-24 pb-20">
    <div class="max-w-4xl mx-auto px-6">
      <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 text-foreground-muted hover:text-foreground mb-8 transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        Inapoi la pagina principala
      </a>

      <div class="flex items-center gap-4 mb-8">
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-accent to-warning flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
        </div>
        <div>
          <h1 class="text-3xl font-bold text-foreground">Termeni si Conditii</h1>
          <p class="text-foreground-subtle">Ultima actualizare: 28 Mai 2026</p>
        </div>
      </div>

      <div class="prose prose-lg max-w-none">
        <div class="bg-accent-soft border border-accent rounded-2xl p-6 mb-8">
          <p class="text-foreground m-0">
            <strong class="text-foreground">Important:</strong> Te rugam sa citesti cu atentie acesti termeni si conditii inainte de a utiliza platforma revizie.ro. Prin crearea unui cont si utilizarea serviciilor noastre, accepti in mod expres acesti termeni.
          </p>
        </div>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h1.5c.621 0 1.125.504 1.125 1.125V21"/></svg>
            1. Datele companiei
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-4">
              Platforma revizie.ro este o marca administrata si operata de:
            </p>
            <ul class="space-y-2 text-foreground-subtle">
              <li><strong class="text-foreground">Denumire:</strong> SMART HAGGLING SRL</li>
              <li><strong class="text-foreground">Sediu social si punct de lucru:</strong> Str. Constantin Bonea Nr. 13, Sector 5, Bucuresti, Romania</li>
              <li><strong class="text-foreground">Cod Unic de Inregistrare (CUI):</strong> RO34531325</li>
              <li><strong class="text-foreground">Nr. Registrul Comertului:</strong> J2015006020404</li>
              <li><strong class="text-foreground">Cod CAEN principal:</strong> 6622 &mdash; Activitati ale agentilor si broker-ilor de asigurari (asistent in brokeraj)</li>
              <li><strong class="text-foreground">Email:</strong> <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a></li>
              <li><strong class="text-foreground">Telefon:</strong> 0758 500 700</li>
            </ul>
            <p class="text-foreground-subtle mt-4">
              SMART HAGGLING SRL este <strong>asistent in brokeraj</strong>, afiliat al brokerului <strong>Transilvania Broker de Asigurare-Reasigurare SA</strong>, si isi desfasoara activitatea de distributie de asigurari sub supravegherea Autoritatii de Supraveghere Financiara (ASF).
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">2</span>
            Servicii oferite
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-4">
              Prin platforma revizie.ro iti punem la dispozitie urmatoarele servicii:
            </p>
            <ul class="space-y-2 text-foreground-subtle">
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                <span><strong>Asigurari auto (RCA)</strong> &mdash; comparare oferte de la mai multi asiguratori si cumpararea politei online, in calitate de asistent in brokeraj.</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.044c0 .568.422 1.048.987 1.106.085.009.17.017.255.025M14.25 18.75v-7.5c0-.621.504-1.125 1.125-1.125H18a2.25 2.25 0 012.118 1.488"/></svg>
                <span><strong>Garaj Digital</strong> &mdash; gestionarea vehiculelor personale, istoric intretinere si documente auto.</span>
              </li>
              <li class="flex items-start gap-3">
                <svg class="w-5 h-5 text-accent mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/></svg>
                <span><strong>Notificari</strong> &mdash; remindere pentru expirarea RCA, ITP, rovinieta, revizii si alte termene.</span>
              </li>
            </ul>
            <p class="text-foreground-subtle mt-4 text-sm">
              Alte servicii (marketplace piese/anvelope, programari la service, tractari) pot fi adaugate in viitor; vor fi reflectate in acesti termeni la momentul lansarii lor.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">3</span>
            Conditii de utilizare a contului
          </h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>Pentru a utiliza serviciile revizie.ro, trebuie sa:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Ai varsta minima de 18 ani si capacitate deplina de exercitiu;</li>
              <li>Furnizezi informatii corecte si complete la inregistrare si la cumpararea unei polite;</li>
              <li>Mentii confidentialitatea datelor de autentificare;</li>
              <li>Notifici imediat orice utilizare neautorizata a contului;</li>
              <li>Utilizezi platforma doar in scopuri legale.</li>
            </ul>
            <p>
              Ne rezervam dreptul de a suspenda sau sterge conturile care incalca acesti termeni, fara notificare prealabila in cazuri grave.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
            4. Asigurari RCA (intermediere)
          </h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>
              revizie.ro intermediaza contractarea politelor de asigurare. <strong>Nu suntem asigurator</strong> si nu preluam riscul asigurat. Actionam ca asistent in brokeraj afiliat al Transilvania Broker de Asigurare-Reasigurare SA, iar polita este emisa de <strong>asiguratorul ales de tine</strong> (Allianz-Tiriac, Asirom, Omniasig, Generali, Groupama, Grawe, Hellas, Axeria, Eazy Insure, DallBogg etc.).
            </p>
            <ul class="list-disc pl-6 space-y-2">
              <li>Pretul afisat reprezinta prima de asigurare comunicata de asigurator, in lei, fara costuri ascunse;</li>
              <li>Esti responsabil pentru corectitudinea datelor introduse (date personale, CNP/CUI, date vehicul); ofertele si valabilitatea politei depind de acestea;</li>
              <li>Polita intra in vigoare la data de start aleasa de tine la cumparare, nu la data platii;</li>
              <li>Livrarea politei este 100% digitala &mdash; vezi <a href="<?php echo home_url('/politica-de-livrare/'); ?>" class="text-accent hover:underline">Politica de livrare</a>;</li>
              <li>Anularea si restituirile sunt detaliate in <a href="<?php echo home_url('/politica-de-anulare/'); ?>" class="text-accent hover:underline">Politica de anulare</a> (RCA fiind asigurare obligatorie, dreptul de retragere de 14 zile nu se aplica, conform OUG 34/2014 art. 16).</li>
            </ul>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
            5. Plata
          </h2>
          <div class="bg-surface-muted rounded-xl p-6 text-foreground-subtle space-y-3">
            <p>
              Plata se face online, cu cardul, prin procesatorul autorizat <strong>NETOPIA Payments</strong>, in mediu securizat 3D Secure. Acceptam carduri Visa si Mastercard.
            </p>
            <p>
              Datele cardului tau sunt introduse direct pe pagina securizata a procesatorului si <strong>nu sunt stocate</strong> pe serverele revizie.ro.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">6</span>
            Limitarea raspunderii
          </h2>
          <div class="bg-card border-l-4 border-warning rounded-xl p-6">
            <div class="flex items-start gap-3">
              <svg class="w-6 h-6 text-warning shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
              <div class="text-foreground-muted">
                <p class="mb-3">
                  <strong class="text-foreground">revizie.ro nu isi asuma raspunderea pentru:</strong>
                </p>
                <ul class="list-disc pl-6 space-y-1">
                  <li>Refuzul emiterii sau conditiile politei, stabilite exclusiv de asigurator;</li>
                  <li>Solutionarea daunelor, care se face direct de catre asiguratorul emitent;</li>
                  <li>Erori in informatiile furnizate de utilizatori (CNP, date vehicul, data de start) si consecintele lor asupra valabilitatii politei;</li>
                  <li>Indisponibilitatea temporara a platformei sau a sistemelor asiguratorilor din motive tehnice;</li>
                  <li>Pierderi financiare indirecte sau daune colaterale.</li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">7</span>
            Proprietate intelectuala
          </h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>
              Toate drepturile de proprietate intelectuala asupra platformei revizie.ro (marca &bdquo;revizie.ro", design-ul si interfata, continutul original &mdash; texte, imagini, grafice) sunt detinute exclusiv de SMART HAGGLING SRL. Este interzisa copierea, modificarea sau distribuirea fara acordul scris prealabil.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">8</span>
            Modificari ale termenilor
          </h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>
              Ne rezervam dreptul de a modifica acesti termeni si conditii in orice moment. Modificarile vor fi comunicate prin notificare in aplicatie, email catre adresa asociata contului si/sau publicare pe aceasta pagina cu data actualizarii. Continuarea utilizarii platformei dupa notificare constituie acceptarea noilor termeni.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z"/></svg>
            9. Legea aplicabila si solutionarea litigiilor
          </h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>
              Acesti termeni sunt guvernati de legislatia din Romania. Orice disputa va fi solutionata de instantele competente din Romania.
            </p>
            <p>Pentru solutionarea amiabila a litigiilor te poti adresa:</p>
            <ul class="list-disc pl-6 space-y-2">
              <li><strong>ANPC</strong> (tranzactia online) &mdash; <a href="https://anpc.ro" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">anpc.ro</a>; platforma SAL &mdash; <a href="https://reclamatiisal.anpc.ro" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">reclamatiisal.anpc.ro</a></li>
              <li><strong>ASF</strong> (aspecte legate de polita) &mdash; <a href="https://asfromania.ro" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">asfromania.ro</a></li>
              <li><strong>Platforma europeana ODR</strong> &mdash; <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">ec.europa.eu/consumers/odr</a></li>
            </ul>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">10</span>
            Contact
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-4">
              Pentru orice intrebari legate de acesti termeni si conditii, ne poti contacta la:
            </p>
            <ul class="space-y-2 text-foreground-subtle">
              <li><strong>Email:</strong> <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a></li>
              <li><strong>Telefon:</strong> 0758 500 700</li>
              <li><strong>Program:</strong> Luni - Vineri, 09:00 - 17:00</li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
