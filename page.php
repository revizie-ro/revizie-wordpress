<?php
/**
 * Default page template
 */
get_header();
?>

  <main class="pt-24 pb-20">
    <div class="max-w-4xl mx-auto px-6">
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="text-3xl font-bold text-gray-900 mb-8"><?php the_title(); ?></h1>
        <div class="prose prose-lg max-w-none">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </main>

<?php get_footer(); ?>
