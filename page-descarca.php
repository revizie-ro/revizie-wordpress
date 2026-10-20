<?php
/**
 * Template Name: Descarca aplicatia
 *
 * Pagina de la capatul adresei `revizie.ro/descarca` — una singura, de pus in
 * reclame, in bio, pe fluturasi.
 *
 * ⚠️ PE TELEFON PAGINA ASTA NU SE VEDE. `revizie_download_route()` din
 * functions.php trimite Android-ul direct in Google Play si iPhone-ul direct in
 * App Store, inainte sa se randeze ceva. Aici ajung doar:
 *   - calculatoarele (de aceea codul QR e lucrul cel mai mare de pe ecran);
 *   - robotii care fac previzualizarea linkului (WhatsApp, Facebook);
 *   - tu, cand vrei s-o vezi de pe telefon: `revizie.ro/descarca?vezi=1`.
 */
get_header();
?>

  <section class="pt-32 pb-20 relative overflow-hidden hero-gradient">
    <div class="absolute top-20 right-10 w-96 h-96 bg-accent/15 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-10 left-10 w-72 h-72 bg-warning/10 rounded-full blur-[100px]"></div>

    <div class="relative max-w-6xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-14 items-center">

        <div>
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent-soft border border-accent/20 mb-6">
            <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
            </svg>
            <span class="text-sm text-accent-strong font-medium">Aplicatia revizie.ro</span>
          </div>

          <h1 class="text-5xl md:text-6xl font-bold text-foreground mb-6 leading-[1.15]">
            Masina ta,
            <span class="bg-gradient-to-r from-accent via-accent-hover to-warning bg-clip-text text-transparent pb-1">in telefon</span>
          </h1>

          <p class="text-xl text-foreground-muted leading-relaxed mb-8">
            ITP, RCA, rovinieta si impozitul — toate intr-un singur loc, cu notificare inainte sa expire. Gratuit, fara card.
          </p>

          <div class="mb-6"><?php revizie_render_promo('card'); ?></div>

          <div class="flex flex-wrap gap-3 mb-6">
            <?php revizie_render_store_badges('lg'); ?>
          </div>

          <p class="text-sm text-foreground-muted">
            Android 7.0 sau mai nou &middot; iOS 15 sau mai nou
          </p>
        </div>

        <div class="flex flex-col items-center gap-6">
          <div class="bg-card rounded-3xl p-7 border border-accent/15 shadow-xl text-center">
            <img
              src="<?php echo esc_url(REVIZIE_THEME_URI . '/assets/img/qr-descarca.svg'); ?>"
              alt="Cod QR catre pagina de descarcare revizie.ro"
              width="200" height="200" class="w-48 h-48 mx-auto" loading="eager" decoding="async">
            <p class="mt-4 text-base font-semibold text-foreground">Scaneaza cu telefonul</p>
            <p class="text-sm text-foreground-muted">Te duce direct in magazinul tau</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="py-20 bg-card">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-foreground text-center mb-4">Ce face aplicatia</h2>
      <p class="text-lg text-foreground-muted text-center max-w-2xl mx-auto mb-14">
        Adaugi numarul de inmatriculare o data. Restul datelor se completeaza din sursele oficiale.
      </p>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php
        $functii = array(
            array(
                'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
                'Nu mai uiti nimic',
                'Primesti notificare inainte sa expire ITP-ul, RCA-ul sau rovinieta, si cand vine termenul de plata al impozitului.',
            ),
            array(
                'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                'Actele, la tine in buzunar',
                'Talon, permis, polite — fotografiate o data si gasite in doua secunde cand ti le cere cineva.',
            ),
            array(
                'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                'RCA comparat pe loc',
                'Compari ofertele mai multor asiguratori si cumperi polita din telefon, in cateva minute.',
            ),
            array(
                'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                'Vezi cat te costa masina',
                'Fiecare revizie, reparatie si plin de carburant intra intr-un istoric care arata costul real pe kilometru.',
            ),
        );
        foreach ($functii as $f) {
            printf(
                '<div class="bg-gradient-to-br from-accent-soft to-card rounded-2xl p-6 border border-accent/15">
                   <div class="w-11 h-11 rounded-xl bg-accent/10 flex items-center justify-center mb-4">
                     <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="%s"/></svg>
                   </div>
                   <h3 class="text-lg font-bold text-foreground mb-2">%s</h3>
                   <p class="text-foreground-muted leading-relaxed">%s</p>
                 </div>',
                esc_attr($f[0]), esc_html($f[1]), esc_html($f[2])
            );
        }
        ?>
      </div>
    </div>
  </section>

  <section class="py-20">
    <div class="max-w-5xl mx-auto px-6">
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <img
          src="<?php echo esc_url(REVIZIE_THEME_URI . '/assets/img/phone-app.webp'); ?>"
          alt="Aplicatia revizie.ro pe telefon" class="w-full rounded-3xl" loading="lazy" decoding="async">
        <div>
          <h2 class="text-3xl font-bold text-foreground mb-5">Acelasi cont, peste tot</h2>
          <p class="text-lg text-foreground-muted leading-relaxed mb-5">
            Ce adaugi pe telefon se vede si pe calculator, si invers. Daca nu vrei sa instalezi nimic, poti folosi aplicatia direct din browser.
          </p>
          <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-7 py-4 bg-accent text-white rounded-2xl font-bold shadow-lg hover:bg-accent-hover transition-colors">
            Deschide in browser
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="py-20 bg-gradient-to-br from-accent via-accent-hover to-accent-strong">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Descarca aplicatia</h2>
      <p class="text-xl text-white/90 mb-6">Gratuit, fara card. Adaugi prima masina in 30 de secunde.</p>
      <div class="mb-10"><?php revizie_render_promo('pe-accent'); ?></div>
      <div class="flex flex-wrap gap-3 justify-center">
        <?php revizie_render_store_badges('lg'); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
