<?php
/**
 * Template Name: Politica de livrare
 *
 * Mirrors app.revizie.ro's "Politica de livrare" page (NETOPIA merchant
 * verification). Keep in sync with
 * revizie-app/src/pages/legal/PoliticaLivrarePage.tsx.
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
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.044c0 .568.422 1.048.987 1.106.085.009.17.017.255.025M14.25 18.75v-7.5c0-.621.504-1.125 1.125-1.125H18a2.25 2.25 0 012.118 1.488"/></svg>
        </div>
        <div>
          <h1 class="text-3xl font-bold text-foreground">Politica de livrare</h1>
          <p class="text-foreground-subtle">Ultima actualizare: 26 Mai 2026</p>
        </div>
      </div>

      <div class="prose prose-lg max-w-none">
        <div class="bg-accent-soft border border-accent rounded-2xl p-6 mb-8">
          <p class="text-foreground m-0">
            <strong class="text-foreground">Pe scurt:</strong> Polița ta RCA se livrează electronic, prin email, imediat după confirmarea plății. Documentul este disponibil și permanent în contul tău, în secțiunea &bdquo;Asigurarile mele".
          </p>
        </div>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">1</span>
            Natura produsului
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle">
              revizie.ro intermediază (în calitate de asistent în brokeraj afiliat al <strong>Transilvania Broker de Asigurare-Reasigurare SA</strong>) emiterea polițelor de asigurare RCA pe care le contractezi prin platforma. Polița în sine este emisă de asigurătorul ales (Allianz-Tiriac, Asirom, Omniasig, Generali, Groupama, Grawe, Hellas, Axeria, Eazy Insure, DallBogg etc.) și este 100% digitala.
            </p>
            <p class="text-foreground-subtle mt-3">
              Nu se livrează produse fizice. Nu se aplică costuri de transport, ridicare la sediu sau livrare prin curier.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">2</span>
            Termen de livrare
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <div class="flex items-start gap-3 mb-4">
              <svg class="w-5 h-5 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <div>
                <p class="text-foreground font-medium mb-1">Sub 5 minute, în condiții normale.</p>
                <p class="text-foreground-subtle text-sm">
                  De obicei polița se emite și se livrează în maxim 60 de secunde de la confirmarea plății cu cardul. În perioadele de incarcare a sistemelor asiguratorului sau în cazul unor verificari suplimentare, livrarea poate dura până la 24 de ore.
                </p>
              </div>
            </div>
            <p class="text-foreground-subtle">
              Dacă nu primești polița în maxim 24 de ore de la plata, contactează-ne la <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a> și verificăm imediat statutul comenzii la asigurător.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">3</span>
            Modalități de livrare
          </h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-surface-muted rounded-xl p-6">
              <svg class="w-6 h-6 text-accent mb-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
              <h3 class="font-semibold text-foreground mb-2">Email</h3>
              <p class="text-foreground-subtle text-sm">
                Trimitem polița (PDF semnat electronic) pe adresa de email folosită la cumpărare. Documentul este valid și se poate prezenta digital sau tiparit.
              </p>
            </div>
            <div class="bg-surface-muted rounded-xl p-6">
              <svg class="w-6 h-6 text-accent mb-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
              <h3 class="font-semibold text-foreground mb-2">Contul revizie.ro</h3>
              <p class="text-foreground-subtle text-sm">
                Polița apare automat în secțiunea &bdquo;Asigurarile mele" din contul tău. O poți descărca oricând, de pe orice dispozitiv.
              </p>
            </div>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">4</span>
            Intrarea în vigoare a poliței
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle">
              Polița intră în vigoare la <strong>data de start aleasa de tine</strong> la momentul cumpararii (nu la data plății). Asigură-te ca alegi o dată de start corecta &mdash; majoritatea asigurătorilor nu acceptă &bdquo;azi" ca data de start, ci minim ziua următoare.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">5</span>
            Probleme la livrare
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle mb-3">
              Dacă plata a fost confirmată dar polița nu a fost emisă (cazuri rare &mdash; sistemul asiguratorului poate refuza emisia post-plata din motive tehnice), banii îți sunt restituiți integral pe cardul folosit în maxim <strong>5 zile lucrătoare</strong>. Vei primi o notificare prin email cu motivul și momentul restituirii.
            </p>
            <p class="text-foreground-subtle">
              Pentru orice problemă legată de livrare, scrie-ne la <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a>.
            </p>
          </div>
        </section>

        <section class="mb-10">
          <h2 class="text-2xl font-bold text-foreground mb-4 flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-surface-muted flex items-center justify-center text-sm font-bold text-foreground-subtle">6</span>
            Contact
          </h2>
          <div class="bg-surface-muted rounded-xl p-6">
            <p class="text-foreground-subtle">
              Email: <a href="mailto:office@revizie.ro" class="text-accent hover:underline">office@revizie.ro</a><br>
              Adresa: vezi <a href="<?php echo home_url('/termeni-si-conditii/'); ?>" class="text-accent hover:underline">Termeni și Condiții</a> pentru datele complete ale companiei.
            </p>
          </div>
        </section>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
