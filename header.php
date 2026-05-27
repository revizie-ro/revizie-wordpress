<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="fixed top-0 left-0 right-0 z-50 bg-white/85 backdrop-blur-xl border-b border-border-subtle">
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
        <div class="bg-logo rounded-xl p-1">
          <img src="<?php echo esc_url(revizie_get_logo_url()); ?>" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto object-contain">
        </div>
      </a>

      <?php revizie_display_main_menu(); ?>

      <div class="flex items-center gap-3">
        <a href="https://app.revizie.ro/login" class="px-4 py-2 text-foreground-muted hover:text-foreground transition-colors text-sm font-medium">Login</a>
        <a href="https://app.revizie.ro/register" class="px-5 py-2.5 bg-accent hover:bg-accent-hover text-white rounded-full text-sm font-semibold shadow-md hover:shadow-lg hover:shadow-accent/30 transition-all duration-300">Inregistreaza-te</a>
      </div>
    </div>
  </header>
