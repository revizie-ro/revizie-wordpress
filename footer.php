  <footer class="bg-foreground py-16">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid md:grid-cols-4 gap-12 mb-12">
        <div class="md:col-span-1">
          <div class="bg-logo rounded-xl p-2 inline-block mb-4">
            <img src="<?php echo esc_url(revizie_get_logo_url()); ?>" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto object-contain">
          </div>
          <p class="text-foreground-subtle text-sm mb-4">Platforma ta completa pentru intretinerea auto, alimentata de AI.</p>
        </div>

        <div>
          <h4 class="text-white font-semibold mb-4">Functii disponibile</h4>
          <ul class="space-y-2">
            <li><a href="<?php echo home_url('/functii/garaj-digital/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Garaj Digital</a></li>
            <li><a href="https://app.revizie.ro/anunturi" class="text-foreground-subtle hover:text-white transition-colors text-sm">Anunturi masini</a></li>
            <li><a href="https://app.revizie.ro/asigurari/rca" class="text-foreground-subtle hover:text-white transition-colors text-sm">Asigurari RCA</a></li>
            <li><a href="<?php echo home_url('/functii/remindere/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Reminder-e</a></li>
          </ul>
          <h4 class="text-white font-semibold mt-6 mb-3">In curand</h4>
          <ul class="space-y-2">
            <li><a href="<?php echo home_url('/functii/servicii-auto/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Programari service</a></li>
            <li><a href="<?php echo home_url('/functii/tractari/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Tractari</a></li>
            <li><a href="<?php echo home_url('/functii/piese-auto/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Piese auto</a></li>
            <li><a href="<?php echo home_url('/functii/anvelope/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Anvelope</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-white font-semibold mb-4">Companie</h4>
          <ul class="space-y-2">
            <li><a href="<?php echo home_url('/despre-noi/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Despre Noi</a></li>
            <li><a href="<?php echo home_url('/cum-functioneaza/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Cum Functioneaza</a></li>
            <li><a href="<?php echo home_url('/pentru-parteneri/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Pentru Parteneri</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-white font-semibold mb-4">Legal</h4>
          <ul class="space-y-2">
            <li><a href="<?php echo home_url('/termeni-si-conditii/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Termeni si Conditii</a></li>
            <li><a href="<?php echo home_url('/politica-de-confidentialitate/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Politica de Confidentialitate</a></li>
            <li><a href="<?php echo home_url('/politica-cookies/'); ?>" class="text-foreground-subtle hover:text-white transition-colors text-sm">Politica Cookies</a></li>
          </ul>
        </div>
      </div>

      <div class="border-t border-white/10 pt-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
          <p class="text-foreground-subtle text-sm">
            &copy; <?php echo date('Y'); ?> revizie.ro. Toate drepturile rezervate.
          </p>
          <div class="flex items-center gap-4">
            <span class="text-foreground-subtle text-sm">Contact: 0758 500 700</span>
            <span class="text-foreground-subtle text-sm">|</span>
            <a href="mailto:office@revizie.ro" class="text-foreground-subtle hover:text-white text-sm transition-colors">office@revizie.ro</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
