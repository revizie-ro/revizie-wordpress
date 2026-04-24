  <footer class="bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid md:grid-cols-4 gap-12 mb-12">
        <div class="md:col-span-1">
          <div class="bg-[#f5f5f0] rounded-xl p-2 inline-block mb-4">
            <img src="<?php echo esc_url(revizie_get_logo_url()); ?>" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto object-contain">
          </div>
          <p class="text-gray-400 text-sm mb-4">Platforma ta completa pentru intretinerea auto, alimentata de AI.</p>
        </div>

        <div>
          <h4 class="text-white font-semibold mb-4">Servicii</h4>
          <ul class="space-y-2">
            <li><a href="<?php echo home_url('/functii/garaj-digital/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Garaj Digital</a></li>
            <li><a href="<?php echo home_url('/functii/servicii-auto/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Servicii Auto</a></li>
            <li><a href="<?php echo home_url('/functii/anvelope/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Anvelope</a></li>
            <li><a href="<?php echo home_url('/functii/tractari/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Tractari</a></li>
            <li><a href="<?php echo home_url('/functii/piese-auto/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Piese Auto</a></li>
            <li><a href="<?php echo home_url('/functii/remindere/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Reminder-e</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-white font-semibold mb-4">Companie</h4>
          <ul class="space-y-2">
            <li><a href="<?php echo home_url('/despre-noi/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Despre Noi</a></li>
            <li><a href="<?php echo home_url('/cum-functioneaza/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Cum Functioneaza</a></li>
            <li><a href="<?php echo home_url('/pentru-parteneri/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Pentru Parteneri</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-white font-semibold mb-4">Legal</h4>
          <ul class="space-y-2">
            <li><a href="<?php echo home_url('/termeni-si-conditii/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Termeni si Conditii</a></li>
            <li><a href="<?php echo home_url('/politica-de-confidentialitate/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Politica de Confidentialitate</a></li>
            <li><a href="<?php echo home_url('/politica-cookies/'); ?>" class="text-gray-400 hover:text-white transition-colors text-sm">Politica Cookies</a></li>
          </ul>
        </div>
      </div>

      <div class="border-t border-gray-800 pt-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
          <p class="text-gray-500 text-sm">
            &copy; <?php echo date('Y'); ?> revizie.ro. Toate drepturile rezervate.
          </p>
          <div class="flex items-center gap-4">
            <span class="text-gray-500 text-sm">Contact: 0758 500 700</span>
            <span class="text-gray-500 text-sm">|</span>
            <a href="mailto:contact@revizie.ro" class="text-gray-500 hover:text-white text-sm transition-colors">contact@revizie.ro</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
