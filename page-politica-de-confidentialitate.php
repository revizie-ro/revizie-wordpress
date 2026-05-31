<?php
/**
 * Template Name: Politica de Confidentialitate
 *
 * Mirrors app.revizie.ro's GDPR privacy policy (RCA-only alignment,
 * 28 Mai 2026). Keep in sync with
 * revizie-app/src/pages/legal/PrivacyPage.tsx.
 *
 * Note: WP Tailwind config has no `success-soft` / `warning-soft` tokens, so
 * the soft callouts use `bg-success/10` and `bg-warning/10`.
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
        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-success to-accent flex items-center justify-center">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
        </div>
        <div>
          <h1 class="text-3xl font-bold text-foreground">Politica de Confidentialitate</h1>
          <p class="text-foreground-subtle">Conform GDPR - Ultima actualizare: 28 Mai 2026</p>
        </div>
      </div>

      <div class="prose prose-lg max-w-none">
        <div class="bg-success/10 border border-success/40 rounded-2xl p-6 mb-8">
          <p class="text-foreground mb-3">
            <strong class="text-foreground">Angajamentul nostru:</strong> revizie.ro respecta pe deplin Regulamentul General privind Protectia Datelor (GDPR - Regulamentul UE 2016/679). Protejam datele dumneavoastra personale si va oferim control total asupra lor.
          </p>
          <p class="text-foreground m-0 text-sm">
            <strong class="text-foreground">Operator de date:</strong> SMART HAGGLING SRL, CUI RO34531325, Reg. Com. J2015006020404, sediu social si punct de lucru in Str. Constantin Bonea Nr. 13, Sector 5, Bucuresti. Contact: <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a>.
          </p>
        </div>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/></svg>
            1. Ce Date Colectam
          </h2>
          <div class="space-y-4">
            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-3">Date furnizate direct de dumneavoastra:</h3>
              <ul class="space-y-2 text-foreground-subtle">
                <li><strong>Date de identificare:</strong> nume, prenume, adresa de email; pentru emiterea politei: CNP (sau CUI pentru firme), serie/numar act de identitate</li>
                <li><strong>Date despre vehicule:</strong> marca, model, an fabricatie, numar inmatriculare, VIN, serie CIV, kilometraj</li>
                <li><strong>Date de contact si adresa:</strong> numar de telefon, adresa de domiciliu/facturare (necesara pentru emiterea politei)</li>
                <li><strong>Date financiare:</strong> istoricul politelor si al tranzactiilor (nu stocam datele complete ale cardului &mdash; vezi sectiunea 4)</li>
                <li><strong>Documente:</strong> fotografii ale documentelor auto (talon/CIV, ITP, polita)</li>
              </ul>
            </div>

            <div class="bg-surface-muted rounded-xl p-6">
              <h3 class="font-semibold text-foreground mb-3">Date colectate automat:</h3>
              <ul class="space-y-2 text-foreground-subtle">
                <li><strong>Date tehnice:</strong> adresa IP, tip browser, sistem de operare</li>
                <li><strong>Date de utilizare:</strong> paginile vizitate, actiunile in aplicatie</li>
                <li><strong>Cookies:</strong> pentru functionarea platformei si imbunatatirea experientei</li>
              </ul>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            2. Scopul Prelucrarii Datelor
          </h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>Prelucram datele dumneavoastra in urmatoarele scopuri:</p>
            <div class="grid md:grid-cols-2 gap-4">
              <div class="bg-card border-l-4 border-accent rounded-xl p-4">
                <h4 class="font-semibold text-foreground mb-2">Furnizarea serviciilor</h4>
                <ul class="text-sm text-foreground-muted space-y-1">
                  <li>Gestionarea contului si a garajului digital</li>
                  <li>Intermedierea, emiterea si administrarea politelor de asigurare</li>
                  <li>Trimiterea notificarilor si a reminder-elor (RCA, ITP etc.)</li>
                  <li>Asigurarea suportului tehnic</li>
                </ul>
              </div>
              <div class="bg-card border-l-4 border-success rounded-xl p-4">
                <h4 class="font-semibold text-foreground mb-2">Imbunatatirea serviciilor</h4>
                <ul class="text-sm text-foreground-muted space-y-1">
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
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
            3. Temeiul Legal al Prelucrarii
          </h2>
          <div class="space-y-4 text-foreground-subtle">
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
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
            4. Partajarea Datelor cu Terti
          </h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>Pentru a-ti oferi serviciile, transmitem date strict necesare catre:</p>
            <div class="bg-surface-muted rounded-xl p-6">
              <ul class="space-y-3">
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-success mt-2 shrink-0"></span>
                  <span><strong>Transilvania Broker de Asigurare-Reasigurare SA:</strong> broker partener &mdash; primeste datele (nume, CNP, adresa, date vehicul) pentru emiterea politei pe care o cumperi</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-success mt-2 shrink-0"></span>
                  <span><strong>Asiguratorul ales</strong> (Allianz-Tiriac, Asirom, Generali, Groupama, Grawe, Hellas, Omniasig, Axeria, Eazy Insure, DallBogg etc.): primeste datele necesare emiterii politei, prin broker</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-success mt-2 shrink-0"></span>
                  <span><strong>NETOPIA Payments:</strong> procesator de plati cu cardul &mdash; primeste datele de facturare si sumele tranzactiilor; nu primeste CNP-ul si nici datele vehiculului. Datele cardului ajung direct la el, nu trec prin serverele noastre</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-success mt-2 shrink-0"></span>
                  <span><strong>Supabase Inc.:</strong> furnizor de infrastructura (baza de date + autentificare), date stocate criptat pe servere din UE (Frankfurt)</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-success mt-2 shrink-0"></span>
                  <span><strong>Resend:</strong> furnizor de email tranzactional &mdash; pentru trimiterea politei si a notificarilor catre adresa ta de email</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="w-2 h-2 rounded-full bg-success mt-2 shrink-0"></span>
                  <span><strong>Sentry:</strong> monitorizare erori tehnice &mdash; primeste mesaje de eroare anonimizate, fara date personale, CNP sau date de plata</span>
                </li>
              </ul>
            </div>
            <div class="bg-warning/10 border border-warning/40 rounded-xl p-4">
              <p class="text-foreground m-0">
                <strong class="text-foreground">Important:</strong> Nu vindem si nu inchiriem niciodata datele dumneavoastra personale catre terti in scopuri de marketing.
              </p>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
            5. Drepturile Dumneavoastra (GDPR)
          </h2>
          <div class="space-y-4">
            <p class="text-foreground-subtle">Conform GDPR, aveti urmatoarele drepturi:</p>
            <div class="grid md:grid-cols-2 gap-4">
              <div class="border border-border-subtle rounded-xl p-4">
                <h4 class="font-semibold text-foreground mb-2">Dreptul de acces</h4>
                <p class="text-sm text-foreground-subtle">Puteti solicita o copie a tuturor datelor pe care le detinem despre dumneavoastra.</p>
              </div>
              <div class="border border-border-subtle rounded-xl p-4">
                <h4 class="font-semibold text-foreground mb-2">Dreptul la rectificare</h4>
                <p class="text-sm text-foreground-subtle">Puteti corecta datele incorecte sau incomplete direct din cont sau prin cerere.</p>
              </div>
              <div class="border border-border-subtle rounded-xl p-4">
                <h4 class="font-semibold text-foreground mb-2">Dreptul la stergere</h4>
                <p class="text-sm text-foreground-subtle">Puteti solicita stergerea completa a datelor ("dreptul de a fi uitat").</p>
              </div>
              <div class="border border-border-subtle rounded-xl p-4">
                <h4 class="font-semibold text-foreground mb-2">Dreptul la portabilitate</h4>
                <p class="text-sm text-foreground-subtle">Puteti primi datele intr-un format structurat pentru transfer.</p>
              </div>
              <div class="border border-border-subtle rounded-xl p-4">
                <h4 class="font-semibold text-foreground mb-2">Dreptul la opozitie</h4>
                <p class="text-sm text-foreground-subtle">Puteti refuza prelucrarea datelor in anumite scopuri (ex: marketing).</p>
              </div>
              <div class="border border-border-subtle rounded-xl p-4">
                <h4 class="font-semibold text-foreground mb-2">Dreptul la restrictionare</h4>
                <p class="text-sm text-foreground-subtle">Puteti limita modul in care va prelucram datele.</p>
              </div>
            </div>
            <p class="text-foreground-subtle mt-4">
              Pentru exercitarea acestor drepturi, contactati-ne la: <a href="mailto:office@revizie.ro" class="text-accent hover:underline font-medium">office@revizie.ro</a>
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/></svg>
            6. Durata Pastrarii Datelor
          </h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>Pastram datele dumneavoastra doar atat timp cat este necesar:</p>
            <div class="bg-surface-muted rounded-xl p-6">
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
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
            7. Securitatea Datelor
          </h2>
          <div class="space-y-4 text-foreground-subtle">
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
          <h2 class="text-2xl font-bold text-foreground mb-4">8. Cookies si Tehnologii Similare</h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>Utilizam cookies pentru:</p>
            <div class="bg-surface-muted rounded-xl p-6">
              <ul class="space-y-2">
                <li><strong>Cookies esentiale:</strong> Necesare pentru functionarea platformei (autentificare, securitate)</li>
                <li><strong>Cookies de preferinte:</strong> Salvarea setarilor (limba, tema)</li>
                <li><strong>Cookies analitice:</strong> Intelegerea modului de utilizare a platformei</li>
              </ul>
            </div>
            <p>
              Puteti gestiona preferintele cookies din setarile browserului. Dezactivarea cookies esentiale poate afecta functionarea platformei. Detalii in <a href="<?php echo home_url('/politica-cookies/'); ?>" class="text-accent hover:underline">Politica de Cookies</a>.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4">9. Transferuri Internationale</h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>
              Datele dumneavoastra sunt stocate pe servere situate in Uniunea Europeana. In cazul in care transferuri catre tari terte sunt necesare, ne asiguram ca exista garantii adecvate conform GDPR (ex: Clauze Contractuale Standard).
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4">10. Minori</h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>
              Serviciile noastre nu sunt destinate persoanelor sub 18 ani. Nu colectam intentionat date de la minori. Daca descoperim ca am colectat astfel de date, le vom sterge imediat.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4">11. Modificari ale Politicii</h2>
          <div class="space-y-4 text-foreground-subtle">
            <p>
              Aceasta politica poate fi actualizata periodic. Va vom notifica despre modificarile semnificative prin email sau notificare in aplicatie. Va recomandam sa verificati periodic aceasta pagina.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
            12. Contact si Plangeri
          </h2>
          <div class="bg-card border-l-4 border-success rounded-xl p-6">
            <p class="text-foreground mb-4">
              <strong>Responsabil Protectia Datelor (DPO):</strong>
            </p>
            <ul class="space-y-2 text-foreground-muted mb-6">
              <li><strong class="text-foreground">Email:</strong> <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a></li>
              <li><strong class="text-foreground">Telefon:</strong> 0758 500 700</li>
              <li><strong class="text-foreground">Program:</strong> Luni - Vineri, 09:00 - 17:00</li>
            </ul>
            <div class="border-t border-border-subtle pt-4">
              <p class="text-foreground-muted">
                <strong class="text-foreground">Autoritatea de supraveghere:</strong><br>
                Daca considerati ca drepturile dumneavoastra au fost incalcate, puteti depune o plangere la Autoritatea Nationala de Supraveghere a Prelucrarii Datelor cu Caracter Personal (ANSPDCP):
              </p>
              <ul class="mt-2 text-foreground-muted">
                <li>Website: <a href="https://www.dataprotection.ro" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">www.dataprotection.ro</a></li>
                <li>Email: anspdcp@dataprotection.ro</li>
              </ul>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
