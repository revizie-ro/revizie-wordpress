<?php
/**
 * Template Name: Produse si Preturi
 *
 * Mirrors app.revizie.ro's "Produse și Prețuri" legal page (NETOPIA merchant
 * onboarding requirement). Keep in sync with
 * revizie-app/src/pages/legal/ProdusePreturiPage.tsx.
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
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"/>
          </svg>
        </div>
        <div>
          <h1 class="text-3xl font-bold text-foreground">Produse si Preturi</h1>
          <p class="text-foreground-subtle">Ultima actualizare: 29 Mai 2026</p>
        </div>
      </div>

      <div class="prose prose-lg max-w-none">
        <div class="bg-accent-soft border border-accent rounded-2xl p-6 mb-8">
          <p class="text-foreground m-0">
            <strong class="text-foreground">Transparenta:</strong> Mai jos gasesti ce poti face pe revizie.ro si cat costa. Singurul produs cu plata direct pe revizie.ro este asigurarea RCA, al carei pret (prima de asigurare) il vezi exact, de la fiecare asigurator, inainte de a plati. Verificarea istoricului vehiculului se face printr-un partener (carVertical), cu plata pe site-ul lor. Restul functiilor sunt gratuite.
          </p>
        </div>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
            Asigurare RCA
          </h2>
          <div class="bg-surface-muted rounded-xl p-6 space-y-4">
            <div class="flex items-start justify-between gap-4 flex-wrap">
              <p class="text-foreground-subtle m-0 max-w-xl">
                Compari online oferte RCA de la mai multi asiguratori (Allianz-Tiriac, Asirom, Omniasig, Generali, Groupama, Grawe, Hellas, Axeria, Eazy Insure, DallBogg etc.) si cumperi polita aleasa, in calitate de asistent in brokeraj afiliat al Transilvania Broker. Polita este 100% digitala si se livreaza prin email + in contul tau.
              </p>
              <span class="inline-flex items-center rounded-lg bg-accent px-3 py-1.5 text-sm font-semibold text-accent-fg whitespace-nowrap">
                Pret variabil
              </span>
            </div>

            <div class="border-t border-border-subtle pt-4">
              <h3 class="font-semibold text-foreground mb-2">Cum se stabileste pretul</h3>
              <ul class="list-disc pl-6 space-y-2 text-foreground-subtle text-sm m-0">
                <li>Pretul este <strong>prima de asigurare</strong>, stabilita de fiecare asigurator in functie de datele vehiculului si ale conducatorului (tip vehicul, capacitate cilindrica, varsta, istoric daune / clasa bonus-malus, localitate, durata politei etc.).</li>
                <li>Vezi pretul <strong>exact</strong>, in lei, de la fiecare asigurator, in pagina de comparatie &mdash; <strong>inainte</strong> de a plati.</li>
                <li>Pretul afisat este <strong>final</strong>: nu percepem niciun cost suplimentar sau comision catre tine; comisionul de intermediere este inclus in prima si suportat de asigurator.</li>
                <li>Platesti exact suma afisata, cu cardul, prin NETOPIA Payments.</li>
              </ul>
            </div>

            <p class="text-foreground-subtle text-sm m-0">
              Detalii despre livrare in <a href="<?php echo home_url('/politica-de-livrare/'); ?>" class="text-accent hover:underline">Politica de livrare</a>, iar despre anulare/restituire in <a href="<?php echo home_url('/politica-de-anulare/'); ?>" class="text-accent hover:underline">Politica de anulare</a>.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/><path stroke-linecap="round" stroke-linejoin="round" d="M10.875 14.25a2.625 2.625 0 105.25 0 2.625 2.625 0 00-5.25 0zM16.5 16.5L18 18"/></svg>
            Istoric vehicul (carVertical)
          </h2>
          <div class="bg-surface-muted rounded-xl p-6 space-y-4">
            <div class="flex items-start justify-between gap-4 flex-wrap">
              <p class="text-foreground-subtle m-0 max-w-xl">
                Verifici istoricul unei masini (accidente raportate, kilometraj real, daune, furt, proprietari anteriori) printr-un <strong>partener extern, carVertical</strong>. De pe revizie.ro esti redirectionat catre carVertical, unde cumperi si platesti raportul direct pe site-ul lor &mdash; revizie.ro nu iti percepe niciun cost pentru acest serviciu.
              </p>
              <span class="inline-flex items-center rounded-lg bg-accent px-3 py-1.5 text-sm font-semibold text-accent-fg whitespace-nowrap">
                Pret carVertical
              </span>
            </div>

            <div class="border-t border-border-subtle pt-4">
              <h3 class="font-semibold text-foreground mb-2">Preturi orientative</h3>
              <ul class="list-disc pl-6 space-y-2 text-foreground-subtle text-sm m-0">
                <li>Prin linkul nostru se aplica automat o <strong>reducere de 20%</strong>. Orientativ, cu reducerea aplicata: raport <strong>Lite de la ~80 lei</strong>, <strong>Standard de la ~104 lei</strong>, <strong>Pro de la ~120 lei</strong> per raport. Pentru mai multe rapoarte, pretul pe raport scade.</li>
                <li><strong>Aceste preturi sunt orientative si se pot schimba oricand</strong> &mdash; sunt stabilite de carVertical, nu de revizie.ro.</li>
                <li>Vezi <strong>pretul exact</strong>, in lei, pe site-ul carVertical &mdash; <strong>inainte</strong> de a cumpara.</li>
                <li>Plata se face pe carVertical, in conditiile si prin procesatorul lor; nu trece prin revizie.ro / NETOPIA.</li>
              </ul>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.044c0 .568.422 1.048.987 1.106.085.009.17.017.255.025M14.25 18.75v-7.5c0-.621.504-1.125 1.125-1.125H18a2.25 2.25 0 012.118 1.488"/></svg>
            Garaj Digital
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <div class="flex items-start justify-between gap-4 flex-wrap">
              <p class="text-foreground-subtle m-0 max-w-xl">
                Adaugi si gestionezi vehiculele tale, tii evidenta documentelor (talon, ITP, polita), a istoricului de intretinere si a kilometrajului, totul intr-un singur loc.
              </p>
              <span class="inline-flex items-center rounded-lg bg-success px-3 py-1.5 text-sm font-semibold text-white whitespace-nowrap">
                Gratuit
              </span>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/></svg>
            Notificari si remindere
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <div class="flex items-start justify-between gap-4 flex-wrap">
              <p class="text-foreground-subtle m-0 max-w-xl">
                Primesti la timp remindere pentru expirarea RCA, ITP, rovinietei, reviziilor si a altor termene importante legate de masinile tale.
              </p>
              <span class="inline-flex items-center rounded-lg bg-success px-3 py-1.5 text-sm font-semibold text-white whitespace-nowrap">
                Gratuit
              </span>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
            Modalitati de plata
          </h2>
          <div class="bg-surface-muted rounded-xl p-6 text-foreground-subtle">
            <p class="m-0">
              Plata se face online, cu cardul (Visa / Mastercard), prin procesatorul autorizat NETOPIA Payments, in mediu securizat 3D Secure. Datele cardului nu sunt stocate pe serverele revizie.ro. Mai multe in <a href="<?php echo home_url('/termeni-si-conditii/'); ?>" class="text-accent hover:underline">Termeni si Conditii</a>.
            </p>
          </div>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
