<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-xl border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
        <div class="bg-[#f5f5f0] rounded-xl p-1">
          <img src="<?php echo esc_url(revizie_get_logo_url()); ?>" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto object-contain">
        </div>
      </a>

      <?php revizie_display_main_menu(); ?>

      <div class="flex items-center gap-3">
        <a href="https://app.revizie.ro/login" class="px-4 py-2 text-gray-700 hover:text-gray-900 transition-colors text-sm font-medium">Login</a>
        <a href="https://app.revizie.ro/register" class="px-5 py-2.5 bg-gradient-to-r from-orange-500 to-amber-500 text-white rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-orange-500/25 transition-all duration-300">Inregistreaza-te</a>
      </div>
    </div>
  </header>
