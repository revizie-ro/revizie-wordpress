<?php
/**
 * Template Name: Intrebari Frecvente
 * Full FAQ page for revizie.ro (mirrors the app's FAQ). WordPress auto-uses
 * this template for a Page whose slug is "intrebari-frecvente"; it is also
 * selectable as a page template. Uses native <details> accordions (no JS).
 */
get_header();
?>

<style>
  summary { list-style: none; cursor: pointer; }
  summary::-webkit-details-marker { display: none; }
</style>

  <!-- Header -->
  <section class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 opacity-40 pointer-events-none">
      <div class="absolute top-16 left-10 w-80 h-80 bg-accent/15 rounded-full blur-[110px]"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-6 pt-32 pb-14 text-center">
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent-soft border border-accent/20 mb-6">
        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <span class="text-sm text-accent-strong font-medium">Ai o întrebare?</span>
      </div>
      <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-4">Întrebări frecvente</h1>
      <p class="text-lg text-foreground-muted max-w-2xl mx-auto">Raspunsuri la cele mai frecvente întrebări despre RCA, garajul digital, verificarea VIN și contul tău revizie.ro.</p>
    </div>
  </section>

  <!-- FAQ groups -->
  <section class="py-16 bg-card">
    <div class="max-w-3xl mx-auto px-6 space-y-12">
      <?php
      $faq_groups = array(
        'RCA &amp; Asigurări' => array(
          array('Cum cumpar o polița RCA prin revizie.ro?', 'Completezi datele mașinii (sau doar numărul de înmatriculare), compari instant ofertele de la asigurătorii autorizați, alegi cea mai bună varianta și plătești securizat online. Primești polița pe email în câteva minute.'),
          array('De la ce asigurători primesc oferte?', 'Comparăm oferte de la asigurători autorizați ASF: Groupama, Omniasig, Allianz-Tiriac, Generali, Asirom, Grawe, Axeria, Eazy și alții.'),
          array('Polița emisă online este valabilă?', 'Da. Polița RCA emisă prin revizie.ro este 100% valabilă și înregistrată în baza de date oficiala, exact ca una emisă la ghiseu.'),
          array('Pot plăti RCA în rate?', 'Da, acolo unde asigurătorul permite, poți alege plata în mai multe rate la finalizarea comenzii.'),
          // CASCO nu se mai vinde (nov 2026) — intrarea ramane aici, comentata.
          // array('Oferiți și CASCO?', 'Da, pe langa RCA poți compara și cumpăra și polițe CASCO direct din cont.'),
        ),
        'Cont &amp; Garaj digital' => array(
          array('Este gratuit să imi fac cont?', 'Da. Crearea contului și folosirea garajului digital sunt 100% gratuite, fără card la înregistrare.'),
          array('Pot adăuga mai multe mașini?', 'Da, adaugi oricate mașini în garajul tău digital și le gestionezi pe toate dintr-un singur cont.'),
          array('Ce documente pot tine în garaj?', 'Talon, RCA, ITP, asigurări, facturi de service și orice alt document al mașinii — toate la un loc, accesibile oricând.'),
        ),
        'Verificare VIN / Istoric' => array(
          array('Ce conține raportul de istoric VIN?', 'Kilometraj real, istoric de accidente și daune, foști proprietari, date tehnice oficiale și multe altele, prin partenerul nostru carVertical.'),
          array('Cât costa un raport VIN?', 'Utilizatorii revizie.ro beneficiază de ' . (int) REVIZIE_CARVERTICAL_DISCOUNT_PERCENT . '% reducere la rapoartele carVertical.'),
        ),
        'Notificari' => array(
          array('Cum funcționează notificările?', 'Primești automat un email înainte să expire RCA, ITP sau revizia, ca să nu uiți nicio scadența.'),
          array('Când primesc notificările?', 'Notificările vin automat cu mai multe zile înainte de expirare (de regula 30, 14, 7 și 1 zi), ca să ai timp să reînnoiești.'),
        ),
        'Plăti &amp; Securitate' => array(
          array('Este sigur să introduc datele mașinii?', 'Da. Datele sunt criptate și folosite doar pentru calculul ofertelor și emiterea poliței. Nu le partajăm cu terți.'),
          array('Cum sunt procesate platile?', 'Toate platile sunt procesate securizat prin NETOPIA Payments — card bancar, Google Pay sau Apple Pay.'),
          array('Primesc factura?', 'Da, primești factura și polița pe email imediat după efectuarea plății.'),
        ),
      );
      foreach ($faq_groups as $group => $items) : ?>
        <div>
          <h2 class="text-xl font-bold text-accent-strong mb-4"><?php echo $group; ?></h2>
          <div class="bg-card rounded-2xl border border-border-subtle divide-y divide-border-subtle">
            <?php foreach ($items as $qa) : ?>
              <details class="group">
                <summary class="flex items-center justify-between gap-4 px-6 py-4 font-semibold text-foreground">
                  <span><?php echo $qa[0]; ?></span>
                  <svg class="w-5 h-5 text-foreground-subtle shrink-0 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </summary>
                <p class="px-6 pb-5 -mt-1 text-foreground-muted leading-relaxed"><?php echo $qa[1]; ?></p>
              </details>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- CTA -->
      <div class="text-center bg-surface-muted rounded-3xl border border-border-subtle p-8 sm:p-10">
        <h2 class="text-2xl font-bold text-foreground mb-2">Nu ai găsit răspunsul?</h2>
        <p class="text-foreground-muted mb-6">Creează-ți cont gratuit și începe sau scrie-ne, îți raspundem rapid.</p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
          <a href="https://app.revizie.ro/register" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 bg-accent hover:bg-accent-hover text-white rounded-2xl font-semibold shadow-lg transition-all">
            Creează cont gratuit
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="<?php echo home_url('/contact/'); ?>" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 bg-card border border-border text-foreground rounded-2xl font-semibold hover:border-accent hover:text-accent transition-all">
            Contacteaza-ne
          </a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
