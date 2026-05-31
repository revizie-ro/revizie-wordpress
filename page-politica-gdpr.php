<?php
/**
 * Template Name: Politica GDPR
 *
 * Mirrors app.revizie.ro's "Politica GDPR" legal page. NETOPIA merchant
 * onboarding lists it separately from the privacy policy. Keep in sync with
 * revizie-app/src/pages/legal/PoliticaGDPRPage.tsx.
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
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
        </div>
        <div>
          <h1 class="text-3xl font-bold text-foreground">Politica GDPR</h1>
          <p class="text-foreground-subtle">Ultima actualizare: 27 Mai 2026</p>
        </div>
      </div>

      <div class="prose prose-lg max-w-none">
        <div class="bg-accent-soft border border-accent rounded-2xl p-6 mb-8">
          <p class="text-foreground m-0">
            <strong class="text-foreground">Ai control deplin asupra datelor tale.</strong> Mai jos gasesti drepturile pe care ti le garanteaza Regulamentul (UE) 2016/679 (GDPR) si cum le exerciti la revizie.ro.
          </p>
        </div>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">1</span>
            Operatorul de date
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle">
              Operatorul datelor cu caracter personal este societatea care administreaza platforma revizie.ro. Datele complete (denumire, CUI, adresa, contact) sunt in <a href="<?php echo home_url('/termeni-si-conditii/'); ?>" class="text-accent hover:underline">Termeni si Conditii</a>.
            </p>
            <p class="text-foreground-subtle mt-3">
              Pentru orice cerere privind datele tale, ne contactezi la <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a> (cu mentiunea &bdquo;GDPR" in subiect, pentru a fi rutat catre Responsabilul cu Protectia Datelor).
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">2</span>
            Drepturile tale
          </h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul de acces</h3>
              <p class="text-foreground-subtle text-sm">Ai dreptul sa afli ce date personale detinem despre tine si sa primesti o copie a acestora.</p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul la rectificare</h3>
              <p class="text-foreground-subtle text-sm">Ai dreptul sa corectezi date incorecte sau sa le completezi pe cele incomplete.</p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul la stergere (&bdquo;dreptul de a fi uitat")</h3>
              <p class="text-foreground-subtle text-sm">Poti cere stergerea datelor tale, exceptand cazurile in care suntem obligati legal sa le pastram (de ex. evidentele contabile sau politele active).</p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul la portabilitate</h3>
              <p class="text-foreground-subtle text-sm">Poti primi datele tale intr-un format structurat (JSON / CSV) pe care le poti transfera altui operator.</p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul la restrictionarea prelucrarii</h3>
              <p class="text-foreground-subtle text-sm">Poti cere sa oprim temporar procesarea datelor in anumite situatii (de ex. in timp ce verificam o solicitare de rectificare).</p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul la opozitie</h3>
              <p class="text-foreground-subtle text-sm">Te poti opune prelucrarii bazate pe interes legitim sau in scop de marketing direct.</p>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">3</span>
            Cum iti exerciti drepturile
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <ol class="list-decimal list-inside space-y-2 text-foreground-subtle">
              <li>Trimite o cerere scrisa la <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a> cu numele, adresa de email asociata contului si dreptul pe care vrei sa-l exerciti.</li>
              <li>Pentru identificare, te putem ruga sa confirmi accesul la contul tau (de ex. printr-un link de confirmare trimis pe email-ul de pe cont).</li>
              <li>Procesam cererea in maxim <strong>30 de zile calendaristice</strong> de la primire (termen prelungibil cu inca 60 de zile pentru cereri complexe, cu notificare prealabila).</li>
              <li>Raspunsul este gratuit. Pentru cereri vadit nefondate sau excesive (de ex. repetare frecventa) putem percepe o taxa rezonabila sau refuza sa dam curs.</li>
            </ol>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">4</span>
            Persoane imputernicite sa prelucreze datele tale
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-3">
              Pentru a-ti oferi serviciile, transferam date strict necesare catre urmatorii parteneri (toti cu sediul in UE / SEE sau supusi unor decizii de adecvare):
            </p>
            <ul class="space-y-3 text-foreground-subtle">
              <li><strong>Transilvania Broker de Asigurare-Reasigurare SA</strong> &mdash; broker de asigurare partener. Primeste datele tale (CNP, nume, adresa, date vehicul) doar pentru emiterea politei RCA pe care o cumperi.</li>
              <li><strong>Asiguratorul ales</strong> (Allianz-Tiriac, Asirom, Generali, Groupama, Grawe, Hellas, Omniasig, Axeria, Eazy Insure, DallBogg etc.) &mdash; primeste datele necesare emiterii politei prin broker.</li>
              <li><strong>Life is Hard (platforma tehnica LIH)</strong> &mdash; platforma prin care interogam asiguratorii si emitem polita. Proceseaza datele necesare ofertarii si emiterii, in calitate de persoana imputernicita.</li>
              <li><strong>NETOPIA Payments</strong> &mdash; procesator de plati cu cardul. Primeste datele de facturare si sumele tranzactiilor; <strong>nu</strong> primeste CNP-ul, nici datele despre vehicul. Datele cardului ajung direct la el (nu trec prin serverele noastre).</li>
              <li><strong>Supabase Inc.</strong> &mdash; furnizor de infrastructura (hosting baza de date + autentificare). Datele sunt stocate criptat, pe servere din UE (Frankfurt).</li>
              <li><strong>Resend</strong> &mdash; furnizor de email tranzactional. Primeste adresa ta de email si continutul mesajelor (polita, notificari); <strong>nu</strong> primeste CNP-ul.</li>
              <li><strong>Sentry</strong> &mdash; monitorizare erori tehnice. Primeste mesaje de eroare anonimizate; <strong>nu</strong> primeste date personale, CNP sau date de plata.</li>
            </ul>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">5</span>
            Perioada de pastrare
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <ul class="space-y-2 text-foreground-subtle list-disc list-inside ml-4">
              <li><strong>Cont activ</strong>: cat timp ai cont si inca 12 luni dupa inactivitate continua.</li>
              <li><strong>Polite emise</strong>: 5 ani de la expirarea politei (cerinta legala &mdash; evidente contabile + obligatie de arhivare in industria asigurarilor).</li>
              <li><strong>Facturi si documente fiscale</strong>: 10 ani conform Codului Fiscal.</li>
              <li><strong>Log-uri tehnice anonime</strong>: maxim 90 de zile.</li>
            </ul>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">6</span>
            Plangere catre autoritate
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-3">
              Daca consideri ca drepturile tale au fost incalcate, te poti adresa direct <strong>Autoritatii Nationale de Supraveghere a Prelucrarii Datelor cu Caracter Personal (ANSPDCP)</strong>:
            </p>
            <ul class="space-y-1 text-foreground-subtle text-sm">
              <li>Web: <a href="https://www.dataprotection.ro" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">www.dataprotection.ro</a></li>
              <li>Email: anspdcp@dataprotection.ro</li>
              <li>Adresa: B-dul G-ral Gheorghe Magheru 28-30, Sector 1, Bucuresti</li>
              <li>Telefon: +40 318 059 211</li>
            </ul>
            <p class="text-foreground-subtle text-sm mt-4">
              Apreciem daca ne lasi sansa sa rezolvam noi mai intai prin <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a> &mdash; in majoritatea cazurilor putem oferi solutia mult mai rapid decat procedura oficiala.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">7</span>
            Documente conexe
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <ul class="space-y-2 text-foreground-subtle list-disc list-inside ml-4">
              <li><a href="<?php echo home_url('/politica-de-confidentialitate/'); ?>" class="text-accent hover:underline">Politica de Confidentialitate</a> &mdash; ce date colectam si de ce</li>
              <li><a href="<?php echo home_url('/termeni-si-conditii/'); ?>" class="text-accent hover:underline">Termeni si Conditii</a></li>
              <li><a href="<?php echo home_url('/politica-cookies/'); ?>" class="text-accent hover:underline">Politica de Cookies</a></li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
