<?php
/**
 * Template Name: Politica de anulare
 *
 * Mirrors app.revizie.ro's "Politica de anulare" page (NETOPIA onboarding +
 * RO consumer/insurance law). Keep in sync with
 * revizie-app/src/pages/legal/PoliticaAnularePage.tsx.
 *
 * Note: the WP Tailwind config has no `warning-soft` token, so the warning
 * callout uses `bg-warning/10` instead.
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
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div>
          <h1 class="text-3xl font-bold text-foreground">Politica de anulare</h1>
          <p class="text-foreground-subtle">Ultima actualizare: 27 Mai 2026</p>
        </div>
      </div>

      <div class="prose prose-lg max-w-none">
        <div class="bg-warning/10 border border-warning/40 rounded-2xl p-6 mb-8">
          <p class="text-foreground mb-3">
            <strong class="text-foreground">Retur vs. anulare:</strong> produsele vândute pe revizie.ro sunt 100% digitale (polițe de asigurare), deci <strong>nu există retur fizic de produs</strong>. Conceptul aplicabil este anularea poliței și restituirea sumei, descrisa mai jos.
          </p>
          <p class="text-foreground m-0">
            <strong class="text-foreground">Important:</strong> RCA fiind asigurare obligatorie, dreptul de retragere de 14 zile prevazut de OUG 34/2014 pentru vanzarile la distanta <strong>nu se aplică</strong>. Pentru detalii vezi secțiunea 2 mai jos.
          </p>
        </div>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">1</span>
            Anulare înainte de intrarea în vigoare
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <div class="flex items-start gap-3 mb-3">
              <svg class="w-5 h-5 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <div>
                <p class="text-foreground font-medium mb-1">Înainte de data de start: anulare cu rambursare integrală.</p>
                <p class="text-foreground-subtle text-sm">
                  Dacă ai cumpărat o polița și încă <strong>nu a intrat în vigoare</strong> (data de start este în viitor), o poți anula gratuit. Banii îți sunt restituiți integral pe cardul folosit în maxim 14 zile lucrătoare de la cererea de anulare.
                </p>
              </div>
            </div>
            <p class="text-foreground-subtle">
              Trimite cererea de anulare la <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a> cu numărul de polița și motivul. Procesăm cererea în cel mai scurt timp.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">2</span>
            De ce nu se aplică dreptul de retragere de 14 zile
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-3">
              OUG 34/2014 art. 16 lit. (l) prevede că dreptul de retragere de 14 zile <strong>nu se aplică</strong> contractelor de asigurare obligatorie (RCA este obligatorie conform Legii 132/2017 &mdash; Codul Asigurarilor). Aceasta excludere este standard pentru toți distribuitorii de asigurări auto din România, nu este o practica interna revizie.ro.
            </p>
            <p class="text-foreground-subtle">
              Dacă vom oferi pe viitor asigurări facultative, dreptul de retragere de 14 zile <strong>se aplică</strong> pentru ele conform aceleiasi legi, iar politica va fi actualizată corespunzator.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">3</span>
            Anulare după intrarea în vigoare
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-3">
              După ce polița a intrat în vigoare, anularea anticipata este posibila în cazurile prevazute expres de Legea 132/2017 și Norma ASF 20/2017, printre care:
            </p>
            <ul class="space-y-2 text-foreground-subtle list-disc list-inside ml-4">
              <li>Vânzarea sau transferul vehiculului către un alt proprietar</li>
              <li>Casarea vehiculului (radiere definitiva din evidența)</li>
              <li>Furtul vehiculului (cu adeverinta de la organele de poliție)</li>
              <li>Schimbarea proprietarului prin mostenire</li>
              <li>Pierderea calității de utilizator legal al vehiculului</li>
            </ul>
            <p class="text-foreground-subtle mt-4">
              În aceste cazuri, asigurătorul restituie prima neutilizata <strong>pro-rata</strong> (proportional cu zilele rămase din perioada de asigurare), după ce se retin eventuale cheltuieli administrative și impozite. Suma exacta este stabilita de asigurător, nu de revizie.ro.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">4</span>
            Procedura de anulare
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <div class="flex items-start gap-3 mb-4">
              <svg class="w-5 h-5 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
              <div>
                <p class="text-foreground font-medium mb-1">Pas 1 &mdash; Trimite cererea</p>
                <p class="text-foreground-subtle text-sm">
                  Cel mai simplu este direct din cont, fără să scrii nimanui: deschide
                  <a href="https://app.revizie.ro/cont/politele-mele" class="text-accent hover:underline">Polițele mele</a>,
                  alege polița și apasă <strong>Solicită anularea</strong>.
                </p>
                <p class="text-foreground-subtle text-sm mt-2">
                  Dacă preferi, poți trimite un email la <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a> cu următoarele informații:
                </p>
                <ul class="list-disc list-inside ml-4 text-foreground-subtle text-sm mt-2 space-y-1">
                  <li>Numărul poliței</li>
                  <li>CNP-ul detinatorului poliței</li>
                  <li>Motivul anularii</li>
                  <li>Documentele justificative (după caz: contract vânzare, dovada casare, adeverinta poliție etc.)</li>
                </ul>
              </div>
            </div>
            <div class="mt-4 text-foreground-subtle text-sm">
              <p class="mb-1"><strong>Pas 2 &mdash; Verificare:</strong> trimitem cererea către asigurător în cel mai scurt timp.</p>
              <p class="mb-1"><strong>Pas 3 &mdash; Răspuns:</strong> primești decizia asiguratorului în 5-15 zile lucrătoare.</p>
              <p><strong>Pas 4 &mdash; Restituire:</strong> dacă cererea e aprobată, suma se restituie în 14 zile lucrătoare pe cardul folosit la plata.</p>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">5</span>
            Rambursarea efectuată de noi (pre-activare)
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle">
              Pentru anularile pre-activare confirmate de noi, rambursarea pe card se face prin procesatorul nostru de plăti (NETOPIA Payments). Suma apare în extrasul bancar în 5-14 zile lucrătoare, în funcție de banca emitentă a cardului.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-warning" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
            Cazuri în care anularea NU este posibila
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <ul class="space-y-2 text-foreground-subtle list-disc list-inside ml-4">
              <li>Polița este activă și a survenit deja un eveniment asigurat (dauna plătită sau în curs)</li>
              <li>Polița a expirat (s-a implinit termenul ales la cumpărare)</li>
              <li>Solicitarea de anulare vine de la o altă persoană decât detinatorul poliței, fără mandat scris</li>
            </ul>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">6</span>
            Sesizari către autorități
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-3">
              Dacă nu ești multumit de modul în care a fost tratata cererea ta, ai dreptul să te adresezi:
            </p>
            <ul class="space-y-2 text-foreground-subtle list-disc list-inside ml-4">
              <li><strong>Autoritatea de Supraveghere Financiara (ASF)</strong> pentru aspecte legate de polița în sine &mdash; <a href="https://asfromania.ro" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">asfromania.ro</a></li>
              <li><strong>Autoritatea Națională pentru Protecția Consumatorilor (ANPC)</strong> pentru aspecte legate de tranzacția online &mdash; <a href="https://anpc.ro" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">anpc.ro</a></li>
              <li><strong>Platforma SOL (Soluționarea Online a Litigiilor)</strong> a Comisiei Europene &mdash; <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer" class="text-accent hover:underline">ec.europa.eu/consumers/odr</a></li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
