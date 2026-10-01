<?php
/**
 * Template Name: Home Page
 * Template for the front page / home
 *
 * Redesign 2026-07 (client concept): realistic device mockups (app UI
 * composited into a real phone + laptop, inlined as transparent WebP),
 * revizie.ro-branded hero car, continuous insurer-logo marquee. The
 * carVertical (VIN), mobile-apps, social and NETOPIA/ANPC sections are kept
 * from the previous landing per client request. No fabricated stats/prices.
 */
get_header();

// Inlined imagery (host doesn't reliably serve theme binaries — same pattern
// as the wordmark + carVertical asset).
$hero_car   = revizie_img_datauri('audi-car.webp');   // branded RS6, bg removed
$hero_phone = revizie_img_datauri('phone-app.webp');  // app UI in a real phone
$showcase_laptop = revizie_img_datauri('laptop-app.webp'); // dashboard in a real laptop

// Insurers shown in the continuous marquee (all logos we carry).
$marquee_insurers = array('groupama','omniasig','allianz','generali','asirom','grawe','axeria','eazy_insure','hellas_autonom');
?>

<style>
  /* Slight global zoom-out for a calmer, less in-your-face layout (all rem-based
     sizes + spacing scale down ~6%). Scoped to the homepage document. */
  html { font-size: 15px; }
  summary { list-style: none; }
  summary::-webkit-details-marker { display: none; }
  @keyframes revizie-marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  .rv-marquee { overflow: hidden;
    -webkit-mask-image: linear-gradient(90deg, transparent, #000 7%, #000 93%, transparent);
            mask-image: linear-gradient(90deg, transparent, #000 7%, #000 93%, transparent); }
  .rv-marquee-track { display: flex; align-items: center; gap: 3.5rem; width: max-content;
    animation: revizie-marquee 38s linear infinite; }
  @media (prefers-reduced-motion: reduce) { .rv-marquee-track { animation: none; } }
</style>

  <!-- ============================ HERO ============================ -->
  <section class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 opacity-50 pointer-events-none">
      <div class="absolute top-24 left-10 w-96 h-96 bg-accent/15 rounded-full blur-[120px]"></div>
      <div class="absolute bottom-10 right-16 w-80 h-80 bg-warning/15 rounded-full blur-[110px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 pt-28 pb-16 lg:pt-32 lg:pb-24">
      <div class="grid lg:grid-cols-[1fr_1.2fr] gap-12 lg:gap-6 items-center">

        <!-- Left -->
        <div>
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground mb-6 leading-[1.1]">
            Tot ce ai nevoie pentru masina ta,
            <span class="block bg-gradient-to-r from-accent via-accent-hover to-accent-strong bg-clip-text text-transparent leading-[1.15] pb-2">intr-un singur loc</span>
          </h1>

          <p class="text-lg md:text-xl text-foreground-muted mb-6 leading-relaxed max-w-xl">
            Compari RCA, verifici istoricul prin VIN, tii documentele si scadentele la zi si primesti notificari inainte de expirare.
          </p>

          <!-- Feature pills -->
          <div class="flex flex-wrap gap-2 mb-9">
            <?php
            $hero_pills = array(
              array('RCA',           'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'),
              array('ITP',           'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'),
              array('Istoric VIN',   'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z'),
              array('Notificari',    'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9'),
              array('Garaj digital', 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'),
            );
            foreach ($hero_pills as $pill) : ?>
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-card border border-border-subtle text-sm font-medium text-foreground-muted">
                <svg class="w-4 h-4 text-accent-strong" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $pill[1]; ?>"/></svg>
                <?php echo $pill[0]; ?>
              </span>
            <?php endforeach; ?>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 mb-10">
            <a href="https://revizie.ro/rca" class="group px-8 py-4 bg-accent hover:bg-accent-hover text-white rounded-2xl font-semibold shadow-lg hover:shadow-2xl hover:shadow-accent/30 transition-all duration-300 inline-flex items-center justify-center gap-2">
              Compara RCA acum
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
            <a href="https://app.revizie.ro/register" class="px-8 py-4 bg-card border border-border text-foreground rounded-2xl font-semibold hover:border-accent hover:text-accent transition-all inline-flex items-center justify-center gap-2">
              Creeaza cont gratuit
            </a>
          </div>

          <div class="grid grid-cols-2 sm:grid-cols-3 gap-x-4 gap-y-3">
            <div class="flex items-center gap-2.5">
              <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-success/10 text-success">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </span>
              <div>
                <div class="text-sm font-semibold text-foreground leading-tight">100% gratuit</div>
                <div class="text-xs text-foreground-subtle leading-tight">Fara card la inregistrare</div>
              </div>
            </div>
            <div class="flex items-center gap-2.5">
              <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-accent-soft text-accent-strong">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              </span>
              <div>
                <div class="text-sm font-semibold text-foreground leading-tight">Date in siguranta</div>
                <div class="text-xs text-foreground-subtle leading-tight">Protejate si confidentiale</div>
              </div>
            </div>
            <div class="flex items-center gap-2.5">
              <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-info/10 text-info">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </span>
              <div>
                <div class="text-sm font-semibold text-foreground leading-tight">Rapid si simplu</div>
                <div class="text-xs text-foreground-subtle leading-tight">RCA in 2 minute</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: branded car + realistic app phone overlapping -->
        <div class="relative mt-4 lg:mt-0">
          <div class="relative">
            <div class="pointer-events-none absolute inset-0 -z-10 flex items-center justify-center">
              <div class="w-[90%] h-[75%] bg-accent/10 rounded-full blur-[90px]"></div>
            </div>
            <?php if ($hero_car !== '') : ?>
              <img src="<?php echo esc_attr($hero_car); ?>" alt="Masina ta, gestionata cu revizie.ro"
                   class="w-full max-w-none ml-auto lg:w-[120%] lg:-mr-[10%] select-none pointer-events-none" style="filter: drop-shadow(0 30px 45px rgba(15,17,19,.28));" />
            <?php endif; ?>
            <?php if ($hero_phone !== '') : ?>
              <img src="<?php echo esc_attr($hero_phone); ?>" alt="Aplicatia revizie.ro"
                   class="absolute top-1/2 -translate-y-1/2 left-0 lg:-left-4 w-[128px] sm:w-[168px] lg:w-[205px] select-none pointer-events-none"
                   style="filter: drop-shadow(0 25px 35px rgba(15,17,19,.30));" />
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===================== SERVICII PRINCIPALE ===================== -->
  <section class="py-16 bg-surface-muted relative">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Servicii principale -->
      <div class="mb-8">
        <h2 class="text-3xl md:text-4xl font-bold text-foreground">Serviciile noastre principale</h2>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
        <?php
        $arrow = '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>';
        $services = array(
          array('title'=>'RCA in 2 minute','chip'=>'bg-accent/10 text-accent-strong',
            'icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
            'desc'=>'Compari pretul de la toate asigurarile si cumperi online.',
            'badge'=>'Popular','badge_class'=>'bg-accent-soft text-accent-strong',
            'btn'=>'Compara RCA','href'=>'https://revizie.ro/rca','style'=>'primary'),
          array('title'=>'Garaj digital','chip'=>'bg-warning/15 text-warning',
            'icon'=>'M3 7a2 2 0 012-2h4l2 2h8a2 2 0 012 2v7a2 2 0 01-2 2H5a2 2 0 01-2-2V7z',
            'desc'=>'Toate documentele, notificarile si istoricul masinii intr-un loc.',
            'badge'=>null,'btn'=>'Vezi garajul','href'=>home_url('/functii/garaj-digital/'),'style'=>'outline'),
          array('title'=>'Verifica VIN cu ' . (int) REVIZIE_CARVERTICAL_DISCOUNT_PERCENT . '% reducere','chip'=>'bg-info/15 text-info',
            'icon'=>'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z',
            'desc'=>'Istoric complet: daune, kilometraj, proprietari, accidente si multe altele.',
            'badge'=>null,'btn'=>'Verifica acum','href'=>'https://revizie.ro/verificare-vin','style'=>'outline'),
          array('title'=>'Marketplace auto','chip'=>'bg-success/15 text-success',
            'icon'=>'M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0',
            'desc'=>'Cumperi sau vinzi masini rapid si in siguranta.',
            'badge'=>'Nou','badge_class'=>'bg-warning/15 text-warning',
            'btn'=>'Vezi anunturi','href'=>'https://revizie.ro/anunturi','style'=>'outline'),
          array('title'=>'Piese &amp; Service','chip'=>'bg-foreground/5 text-foreground-muted',
            'icon'=>'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z',
            'desc'=>'In curand: piese auto, service si revizii.',
            'badge'=>null,'badge_class'=>'',
            'btn'=>'In curand','href'=>null,'style'=>'disabled'),
        );
        foreach ($services as $s) : ?>
          <div class="relative bg-card rounded-2xl border border-border-subtle p-5 flex flex-col hover:shadow-lg transition-all">
            <?php if (!empty($s['badge'])) : ?>
              <span class="absolute top-4 right-4 px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wide <?php echo $s['badge_class']; ?>"><?php echo $s['badge']; ?></span>
            <?php endif; ?>
            <div class="flex items-center justify-center w-12 h-12 rounded-xl <?php echo $s['chip']; ?> mb-4">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="<?php echo $s['icon']; ?>"/></svg>
            </div>
            <h3 class="text-base font-bold text-foreground mb-2 leading-snug"><?php echo $s['title']; ?></h3>
            <p class="text-xs text-foreground-muted mb-5 leading-relaxed flex-1"><?php echo $s['desc']; ?></p>
            <?php if ($s['style'] === 'primary') : ?>
              <a href="<?php echo esc_url($s['href']); ?>" class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl bg-accent hover:bg-accent-hover text-white text-sm font-semibold transition-colors self-start"><?php echo $s['btn'] . $arrow; ?></a>
            <?php elseif ($s['style'] === 'disabled') : ?>
              <span class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl bg-surface-muted text-foreground-subtle text-sm font-semibold self-start cursor-default"><?php echo $s['btn'] . $arrow; ?></span>
            <?php else : ?>
              <a href="<?php echo esc_url($s['href']); ?>" class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-xl border border-border text-foreground hover:border-accent hover:text-accent text-sm font-semibold transition-colors self-start"><?php echo $s['btn'] . $arrow; ?></a>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ===================== RCA + INSURER MARQUEE ===================== -->
  <section class="py-16 bg-card relative">
    <div class="max-w-7xl mx-auto px-6">
      <div class="bg-surface-muted rounded-3xl border border-border-subtle p-8 sm:p-10 mb-8">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-10 items-center">
          <!-- Left: pitch + bullets + CTA -->
          <div>
            <div class="inline-flex items-center gap-2 mb-4">
              <span class="flex items-center justify-center w-8 h-8 rounded-lg bg-accent text-white">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              </span>
              <span class="text-sm font-semibold uppercase tracking-wide text-accent-strong">RCA online</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6 leading-tight">Compara RCA<br>in 2 minute</h2>
            <ul class="space-y-3 mb-8">
              <?php foreach (array('10 asiguratori intr-un singur loc', 'Polita emisa instant pe email', 'Plata 100% securizata', 'Preturi corecte, fara comisioane ascunse') as $b) : ?>
                <li class="flex items-center gap-3 text-foreground-muted">
                  <span class="flex items-center justify-center w-5 h-5 rounded-full bg-success/15 text-success shrink-0">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                  </span>
                  <?php echo $b; ?>
                </li>
              <?php endforeach; ?>
            </ul>
            <a href="https://revizie.ro/rca" class="group inline-flex items-center gap-2 px-7 py-3.5 bg-accent hover:bg-accent-hover text-white rounded-2xl font-semibold shadow-lg hover:shadow-xl hover:shadow-accent/30 transition-all">
              Vezi oferte RCA
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
          <!-- Right: two highlight boxes + insurer marquee under them -->
          <div class="min-w-0">
            <div class="grid sm:grid-cols-2 gap-4">
              <div class="bg-card rounded-2xl border border-border-subtle p-6">
                <div class="flex items-center gap-2 text-success text-sm font-semibold mb-2">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                  Economisesti timp si bani
                </div>
                <p class="text-sm text-foreground-muted leading-relaxed">Compari ofertele de la toti asiguratorii dintr-un singur formular si alegi cea mai buna varianta.</p>
              </div>
              <div class="bg-card rounded-2xl border border-border-subtle p-6">
                <div class="flex items-center gap-2 text-accent-strong text-sm font-semibold mb-2">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                  Polita pe loc
                </div>
                <p class="text-sm text-foreground-muted leading-relaxed">Platesti securizat prin NETOPIA si primesti polita pe email imediat. Fara drumuri, fara hartii.</p>
              </div>
            </div>

            <!-- Continuous insurer marquee, inside the card, under the two boxes -->
            <div class="rv-marquee mt-5 pt-5 border-t border-border-subtle">
              <div class="rv-marquee-track">
                <?php for ($i = 0; $i < 2; $i++) :
                  foreach ($marquee_insurers as $slug) :
                    $uri = revizie_img_datauri('insurers/' . $slug . '.webp');
                    if ($uri === '') continue; ?>
                    <img src="<?php echo esc_attr($uri); ?>" alt="" aria-hidden="<?php echo $i ? 'true' : 'false'; ?>"
                         class="h-7 sm:h-8 w-auto object-contain opacity-90" />
                <?php endforeach; endfor; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== APLICATIA (3 telefoane) ===================== -->
  <section class="py-20 bg-surface-muted">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
        <!-- Left: 3 phones -->
        <div class="order-2 lg:order-1">
          <?php $phones_group = revizie_img_datauri('phones-group.webp'); if ($phones_group !== '') : ?>
            <img src="<?php echo esc_attr($phones_group); ?>" alt="Aplicatia revizie.ro pe telefon"
                 class="w-full max-w-xl mx-auto lg:mx-0 select-none pointer-events-none"
                 style="filter: drop-shadow(0 30px 45px rgba(15,17,19,.18));" />
          <?php endif; ?>
        </div>
        <!-- Right: text + bullets + app badges -->
        <div class="order-1 lg:order-2">
          <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-accent-soft rounded-full text-accent-strong text-sm font-medium mb-4">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
            Aplicatia ta, pe orice ecran
          </div>
          <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4 leading-tight">Garajul tau digital,<br>pe telefon si pe laptop</h2>
          <p class="text-lg text-foreground-muted mb-6 leading-relaxed">Accesezi oricand si de oriunde toate informatiile importante despre masinile tale.</p>
          <ul class="space-y-3 mb-8">
            <?php foreach (array('Documente si asigurari mereu la zi', 'Notificari automate inainte de expirare', 'Istoric cheltuieli si revizii', 'Acces de pe web si din aplicatie') as $pt) : ?>
              <li class="flex items-center gap-3 text-foreground-muted">
                <span class="flex items-center justify-center w-5 h-5 rounded-full bg-success/15 text-success shrink-0"><svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg></span>
                <?php echo $pt; ?>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="flex flex-wrap items-center gap-3">
            <?php revizie_render_store_badges('lg'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======================= VERIFICARE VIN (carVertical) ======================= -->
  <!-- Kept from the previous landing per client request. -->
  <section class="py-20 bg-surface-muted relative overflow-hidden">
    <div class="absolute inset-0 opacity-30 pointer-events-none">
      <div class="absolute top-10 right-10 w-72 h-72 bg-info/20 rounded-full blur-[100px]"></div>
      <div class="absolute bottom-10 left-10 w-64 h-64 bg-accent/15 rounded-full blur-[90px]"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-6">
      <div class="bg-card rounded-3xl border border-info/25 shadow-xl overflow-hidden">
        <div class="grid lg:grid-cols-5 gap-0">
          <!-- Left: badge + headline + copy -->
          <div class="lg:col-span-3 p-8 sm:p-12">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-info/15 rounded-full text-info text-sm font-semibold mb-5">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
              Parteneriat carVertical
            </div>

            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4 leading-tight">
              Verifica istoricul oricarei masini
              <span class="block text-info">cu <?php echo (int) REVIZIE_CARVERTICAL_DISCOUNT_PERCENT; ?>% reducere</span>
            </h2>

            <p class="text-lg text-foreground-muted mb-6 leading-relaxed">
              Inainte sa cumperi o masina second-hand, vezi tot ce trebuie sa stii: kilometraj real, accidente, fosti proprietari, daune declarate, date tehnice. Raport oficial generat in cateva minute, direct din contul tau revizie.ro.
            </p>

            <div class="flex flex-wrap items-center gap-3 mb-8">
              <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-success/10 text-success rounded-full text-sm font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                Kilometraj real
              </span>
              <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-success/10 text-success rounded-full text-sm font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                Istoric accidente
              </span>
              <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-success/10 text-success rounded-full text-sm font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                Date tehnice oficiale
              </span>
            </div>

            <?php
              // Config + builder live in inc/carvertical.php, shared with the
              // React and Flutter apps. `wp_landing_promo` is the surface
              // label we read back in Everflow reporting.
              $carvertical_url = revizie_carvertical_url('wp_landing_promo');
            ?>
            <a href="<?php echo esc_url($carvertical_url); ?>" target="_blank" rel="noopener noreferrer sponsored" class="group inline-flex items-center gap-2 px-7 py-3.5 bg-info hover:bg-info/90 text-white rounded-2xl font-semibold shadow-lg hover:shadow-xl hover:shadow-info/30 transition-all">
              Verifica un VIN cu -<?php echo (int) REVIZIE_CARVERTICAL_DISCOUNT_PERCENT; ?>%
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
              </svg>
            </a>
            <p class="text-xs text-foreground-subtle mt-3">Te redirectionam direct pe carVertical, cu codul <span class="font-mono font-semibold text-foreground"><?php echo esc_html(REVIZIE_CARVERTICAL_DISCOUNT_CODE); ?></span> aplicat automat.</p>
          </div>

          <!-- Right: carVertical report visual (same asset as the app). A dark
               scrim over it keeps the white copy clearly legible. -->
          <div
            class="lg:col-span-2 relative flex items-center justify-center p-8 sm:p-12 bg-cover bg-center"
            style="background-image: url('<?php echo REVIZIE_CARVERTICAL_ASSET_DATAURI; ?>');"
          >
            <div class="absolute inset-0 bg-foreground/60"></div>
            <div class="relative text-center text-white" style="text-shadow: 0 1px 4px rgba(0,0,0,0.55);">
              <div class="text-sm font-medium uppercase tracking-wider mb-2 opacity-90">Reducere exclusiva</div>
              <div class="text-7xl md:text-8xl font-bold leading-none mb-2">-<?php echo (int) REVIZIE_CARVERTICAL_DISCOUNT_PERCENT; ?>%</div>
              <div class="text-lg font-semibold mb-1">la rapoartele carVertical</div>
              <div class="text-sm opacity-90 mb-6">doar pentru utilizatorii revizie.ro</div>

              <!-- Promo code coupon — auto-applied via the link, shown so it can be copied/used too -->
              <div class="inline-flex items-center gap-2.5 rounded-xl border border-dashed border-white/70 bg-white/20 px-4 py-2.5 backdrop-blur-sm">
                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 9h.01"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="m15 9-6 6"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 15h.01"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2 9a3 3 0 1 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 1 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
                </svg>
                <span class="text-xs uppercase tracking-wider opacity-80">Cod</span>
                <span class="font-mono text-lg font-bold tracking-[0.2em]"><?php echo esc_html(REVIZIE_CARVERTICAL_DISCOUNT_CODE); ?></span>
              </div>

              <div class="mt-5 text-[10px] uppercase tracking-wider opacity-70">Sursă: carVertical</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      <!-- FAQ + CTA cu cheia -->
  <section class="py-20 bg-surface-muted">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-8 items-start">

        <!-- Left: FAQ accordion -->
        <div class="bg-card rounded-3xl border border-border-subtle p-8 sm:p-10">
          <h2 class="text-2xl md:text-3xl font-bold text-foreground mb-6">Intrebari frecvente</h2>
          <?php
          $faqs = array(
            array('Cum cumpar o polita RCA?', 'Completezi datele masinii, compari ofertele de la asiguratori si platesti securizat online. Primesti polita pe email in cateva minute.'),
            array('Este sigur sa introduc datele masinii?', 'Da. Datele sunt criptate si folosite doar pentru calculul ofertelor si emiterea politei. Nu le partajam cu terti.'),
            array('Cum functioneaza notificarile?', 'Primesti automat un email inainte sa expire RCA, ITP sau revizia, ca sa nu uiti nicio scadenta.'),
            array('Pot adauga mai multe masini?', 'Da, poti adauga oricate masini in garajul tau digital si le gestionezi pe toate dintr-un singur cont.'),
          );
          foreach ($faqs as $i => $q) : ?>
            <details class="group border-b border-border-subtle py-5"<?php if ($i === 0) echo ' open'; ?>>
              <summary class="flex items-center justify-between gap-4 cursor-pointer list-none font-semibold text-foreground text-base md:text-lg">
                <span><?php echo $q[0]; ?></span>
                <svg class="w-5 h-5 text-foreground-subtle shrink-0 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
              </summary>
              <p class="mt-3 text-sm md:text-base text-foreground-muted leading-relaxed"><?php echo $q[1]; ?></p>
            </details>
          <?php endforeach; ?>
          <a href="<?php echo home_url('/intrebari-frecvente/'); ?>" class="group inline-flex items-center gap-2 mt-6 text-accent-strong font-semibold">
            Vezi toate intrebarile
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
        </div>

        <!-- Right: CTA with the branded key as a cover background (robust to any height) -->
        <?php $faq_key = revizie_img_datauri('key.webp'); ?>
        <div class="relative overflow-hidden rounded-3xl p-8 sm:p-10 flex flex-col justify-center min-h-[340px] bg-accent-strong bg-cover bg-center"
             <?php if ($faq_key !== '') : ?>style="background-image: linear-gradient(100deg, rgba(21,15,8,0.94) 0%, rgba(21,15,8,0.55) 48%, rgba(21,15,8,0.05) 100%), url('<?php echo esc_attr($faq_key); ?>');"<?php endif; ?>>
          <div class="relative max-w-sm">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-3 leading-tight">Esti gata sa simplifici gestionarea masinii tale?</h2>
            <p class="text-white/80 mb-6">Creeaza cont gratuit si ai totul intr-un singur loc.</p>
            <a href="https://app.revizie.ro/register" class="inline-flex items-center gap-2 px-6 py-3.5 bg-white text-accent-strong rounded-xl font-bold shadow-lg hover:scale-105 transition-transform">
              Creeaza cont gratuit
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Social (kept) -->
  <section class="py-16 bg-surface-muted border-t border-border-subtle">
    <div class="max-w-3xl mx-auto px-6 text-center">
      <h2 class="text-2xl font-bold text-foreground mb-2">Urmareste-ne pe social</h2>
      <p class="text-foreground-muted mb-6">Tips, noutati despre lansari si feedback rapid.</p>
      <div class="flex items-center justify-center gap-4">
        <?php revizie_render_social_links('card'); ?>
      </div>
    </div>
  </section>

  <!-- Plati securizate (NETOPIA trust strip) — HIDDEN per client 2026-07-15
       (it duplicated the footer strip). Kept in code; flip `false` -> `true` to restore. -->
  <?php if (false) : ?>
  <section class="py-14 bg-card">
    <div class="max-w-3xl mx-auto px-6">
      <div class="bg-foreground rounded-3xl border border-white/10 shadow-xl px-8 py-8 sm:px-10">
        <div class="flex flex-col sm:flex-row items-center gap-6 sm:gap-8">
          <div class="flex items-center gap-4 flex-1">
            <div class="w-12 h-12 rounded-2xl bg-success/15 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <div class="text-center sm:text-left">
              <div class="font-semibold text-lg text-white">Plati 100% securizate</div>
              <div class="text-sm text-white/60">Procesare prin NETOPIA Payments</div>
            </div>
          </div>
          <div class="shrink-0 sm:pl-8 sm:border-l sm:border-white/10 flex flex-col items-center sm:items-end gap-3">
            <?php revizie_render_netopia_logo('0F1113', 'orizontal', 220, 56); ?>
            <?php revizie_render_wallet_pay_marks(); ?>
          </div>
        </div>

        <!-- Protectia consumatorilor: ANPC SAL pictogram + links -->
        <div class="mt-6 pt-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">
          <?php revizie_render_anpc_sal(); ?>
          <div class="flex flex-wrap items-center justify-center gap-x-3 gap-y-1 text-xs">
            <span class="text-white/50">Protectia consumatorilor:</span>
            <?php revizie_render_anpc_links(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

<?php get_footer(); ?>
