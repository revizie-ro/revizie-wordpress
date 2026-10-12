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
        <span class="text-sm text-accent-strong font-medium">Ai o intrebare?</span>
      </div>
      <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-4">Intrebari frecvente</h1>
      <p class="text-lg text-foreground-muted max-w-2xl mx-auto">Raspunsuri la cele mai frecvente intrebari despre RCA, garajul digital, verificarea VIN si contul tau revizie.ro.</p>
    </div>
  </section>

  <!-- FAQ groups -->
  <section class="py-16 bg-card">
    <div class="max-w-3xl mx-auto px-6 space-y-12">
      <?php
      $faq_groups = array(
        'RCA &amp; Asigurari' => array(
          array('Cum cumpar o polita RCA prin revizie.ro?', 'Completezi datele masinii (sau doar numarul de inmatriculare), compari instant ofertele de la asiguratorii autorizati, alegi cea mai buna varianta si platesti securizat online. Primesti polita pe email in cateva minute.'),
          array('De la ce asiguratori primesc oferte?', 'Comparam oferte de la asiguratori autorizati ASF: Groupama, Omniasig, Allianz-Tiriac, Generali, Asirom, Grawe, Axeria, Eazy si altii.'),
          array('Polita emisa online este valabila?', 'Da. Polita RCA emisa prin revizie.ro este 100% valabila si inregistrata in baza de date oficiala, exact ca una emisa la ghiseu.'),
          array('Pot plati RCA in rate?', 'Da, acolo unde asiguratorul permite, poti alege plata in mai multe rate la finalizarea comenzii.'),
          array('Oferiti si CASCO?', 'Da, pe langa RCA poti compara si cumpara si polite CASCO direct din cont.'),
        ),
        'Cont &amp; Garaj digital' => array(
          array('Este gratuit sa imi fac cont?', 'Da. Crearea contului si folosirea garajului digital sunt 100% gratuite, fara card la inregistrare.'),
          array('Pot adauga mai multe masini?', 'Da, adaugi oricate masini in garajul tau digital si le gestionezi pe toate dintr-un singur cont.'),
          array('Ce documente pot tine in garaj?', 'Talon, RCA, ITP, asigurari, facturi de service si orice alt document al masinii — toate la un loc, accesibile oricand.'),
        ),
        'Verificare VIN / Istoric' => array(
          array('Ce contine raportul de istoric VIN?', 'Kilometraj real, istoric de accidente si daune, fosti proprietari, date tehnice oficiale si multe altele, prin partenerul nostru carVertical.'),
          array('Cat costa un raport VIN?', 'Utilizatorii revizie.ro beneficiaza de ' . (int) REVIZIE_CARVERTICAL_DISCOUNT_PERCENT . '% reducere la rapoartele carVertical.'),
        ),
        'Notificari' => array(
          array('Cum functioneaza notificarile?', 'Primesti automat un email inainte sa expire RCA, ITP sau revizia, ca sa nu uiti nicio scadenta.'),
          array('Cand primesc notificarile?', 'Notificarile vin automat cu mai multe zile inainte de expirare (de regula 30, 14, 7 si 1 zi), ca sa ai timp sa reinnoiesti.'),
        ),
        'Plati &amp; Securitate' => array(
          array('Este sigur sa introduc datele masinii?', 'Da. Datele sunt criptate si folosite doar pentru calculul ofertelor si emiterea politei. Nu le partajam cu terti.'),
          array('Cum sunt procesate platile?', 'Toate platile sunt procesate securizat prin NETOPIA Payments — card bancar, Google Pay sau Apple Pay.'),
          array('Primesc factura?', 'Da, primesti factura si polita pe email imediat dupa efectuarea platii.'),
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
        <h2 class="text-2xl font-bold text-foreground mb-2">Nu ai gasit raspunsul?</h2>
        <p class="text-foreground-muted mb-6">Creeaza-ti cont gratuit si incepe sau scrie-ne, iti raspundem rapid.</p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
          <a href="https://app.revizie.ro/register" class="inline-flex items-center justify-center gap-2 px-7 py-3.5 bg-accent hover:bg-accent-hover text-white rounded-2xl font-semibold shadow-lg transition-all">
            Creeaza cont gratuit
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
