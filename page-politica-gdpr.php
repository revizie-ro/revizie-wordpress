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
        Înapoi la pagina principală
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
            <strong class="text-foreground">Ai control deplin asupra datelor tale.</strong> Mai jos găsești drepturile pe care ți le garantează Regulamentul (UE) 2016/679 (GDPR) și cum le exerciți la revizie.ro.
          </p>
        </div>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">1</span>
            Operatorul de date
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle">
              Operatorul datelor cu caracter personal este societatea care administrează platforma revizie.ro. Datele complete (denumire, CUI, adresa, contact) sunt în <a href="<?php echo home_url('/termeni-si-conditii/'); ?>" class="text-accent hover:underline">Termeni și Condiții</a>.
            </p>
            <p class="text-foreground-subtle mt-3">
              Pentru orice cerere privind datele tale, ne contactezi la <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a> (cu mențiunea &bdquo;GDPR" în subiect, pentru a fi rutat către Responsabilul cu Protecția Datelor).
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
              <p class="text-foreground-subtle text-sm">Ai dreptul să afli ce date personale detinem despre tine și să primești o copie a acestora.</p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul la rectificare</h3>
              <p class="text-foreground-subtle text-sm">Ai dreptul să corectezi date incorecte sau să le completezi pe cele incomplete.</p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul la ștergere (&bdquo;dreptul de a fi uitat")</h3>
              <p class="text-foreground-subtle text-sm">Poți cere ștergerea datelor tale, exceptand cazurile în care suntem obligați legal să le păstrăm (de ex. evidentele contabile sau polițele active).</p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul la portabilitate</h3>
              <p class="text-foreground-subtle text-sm">Poți primi datele tale într-un format structurat (JSON / CSV) pe care le poți transfera altui operator.</p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul la restrictionarea prelucrarii</h3>
              <p class="text-foreground-subtle text-sm">Poți cere să oprim temporar procesarea datelor în anumite situații (de ex. în timp ce verificăm o solicitare de rectificare).</p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-2">Dreptul la opoziție</h3>
              <p class="text-foreground-subtle text-sm">Te poți opune prelucrarii bazate pe interes legitim sau în scop de marketing direct.</p>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">3</span>
            Cum îți exerciți drepturile
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <ol class="list-decimal list-inside space-y-2 text-foreground-subtle">
              <li>Trimite o cerere scrisă la <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a> cu numele, adresa de email asociata contului și dreptul pe care vrei să-l exerciți.</li>
              <li>Pentru identificare, te putem ruga să confirmi accesul la contul tău (de ex. printr-un link de confirmare trimis pe email-ul de pe cont).</li>
              <li>Procesăm cererea în maxim <strong>30 de zile calendaristice</strong> de la primire (termen prelungibil cu încă 60 de zile pentru cereri complexe, cu notificare prealabila).</li>
              <li>Răspunsul este gratuit. Pentru cereri vadit nefondate sau excesive (de ex. repetare frecventa) putem percepe o taxa rezonabila sau refuză să dam curs.</li>
            </ol>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">4</span>
            Persoane imputernicite să prelucreze datele tale
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-3">
              Pentru a-ți oferi serviciile, transferam date strict necesare către urmatorii parteneri (toți cu sediul în UE / SEE sau supusi unor decizii de adecvare):
            </p>
            <ul class="space-y-3 text-foreground-subtle">
              <li><strong>Transilvania Broker de Asigurare-Reasigurare SA</strong> &mdash; broker de asigurare partener. Primește datele tale (CNP, nume, adresa, date vehicul) doar pentru emiterea poliței RCA pe care o cumperi.</li>
              <li><strong>Asigurătorul ales</strong> (Allianz-Tiriac, Asirom, Generali, Groupama, Grawe, Hellas, Omniasig, Axeria, Eazy Insure, DallBogg etc.) &mdash; primește datele necesare emiterii poliței prin broker.</li>
              <li><strong>Life is Hard (platforma tehnica LIH)</strong> &mdash; platforma prin care interogam asigurătorii și emitem polița. Procesează datele necesare ofertarii și emiterii, în calitate de persoana imputernicita.</li>
              <li><strong>NETOPIA Payments</strong> &mdash; procesator de plăti cu cardul. Primește datele de facturare și sumele tranzacțiilor; <strong>nu</strong> primește CNP-ul, nici datele despre vehicul. Datele cardului ajung direct la el (nu trec prin serverele noastre).</li>
              <li><strong>Supabase Inc.</strong> &mdash; furnizor de infrastructura (hosting baza de date + autentificare). Datele sunt stocate criptat, pe servere din UE (Frankfurt).</li>
              <li><strong>Resend</strong> &mdash; furnizor de email tranzactional. Primește adresa ta de email și continutul mesajelor (polița, notificări); <strong>nu</strong> primește CNP-ul.</li>
              <li><strong>Sentry</strong> &mdash; monitorizare erori tehnice. Primește mesaje de eroare anonimizate; <strong>nu</strong> primește date personale, CNP sau date de plata.</li>
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
              <li><strong>Cont activ</strong>: cât timp ai cont și încă 12 luni după inactivitate continuă.</li>
              <li><strong>Polițe emise</strong>: 5 ani de la expirarea poliței (cerinta legala &mdash; evidente contabile + obligație de arhivare în industria asigurarilor).</li>
              <li><strong>Facturi și documente fiscale</strong>: 10 ani conform Codului Fiscal.</li>
              <li><strong>Log-uri tehnice anonime</strong>: maxim 90 de zile.</li>
            </ul>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">6</span>
            Plangere către autoritate
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-3">
              Dacă consideri ca drepturile tale au fost incalcate, te poți adresa direct <strong>Autorității Nationale de Supraveghere a Prelucrarii Datelor cu Caracter Personal (ANSPDCP)</strong>:
            </p>
            <ul class="space-y-1 text-foreground-subtle text-sm">
              <li>Web: <a href="https://www.dataprotection.ro" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">www.dataprotection.ro</a></li>
              <li>Email: anspdcp@dataprotection.ro</li>
              <li>Adresa: B-dul G-ral Gheorghe Magheru 28-30, Sector 1, București</li>
              <li>Telefon: +40 318 059 211</li>
            </ul>
            <p class="text-foreground-subtle text-sm mt-4">
              Apreciem dacă ne lași sansa să rezolvăm noi mai întâi prin <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a> &mdash; în majoritatea cazurilor putem oferi soluția mult mai rapid decât procedura oficiala.
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
              <li><a href="<?php echo home_url('/politica-de-confidentialitate/'); ?>" class="text-accent hover:underline">Politica de Confidențialitate</a> &mdash; ce date colectam și de ce</li>
              <li><a href="<?php echo home_url('/termeni-si-conditii/'); ?>" class="text-accent hover:underline">Termeni și Condiții</a></li>
              <li><a href="<?php echo home_url('/politica-cookies/'); ?>" class="text-accent hover:underline">Politica de Cookies</a></li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
