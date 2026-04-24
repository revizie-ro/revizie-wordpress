<?php
/**
 * Main index template
 */
get_header();
?>

  <main class="pt-24 pb-20">
    <div class="max-w-4xl mx-auto px-6">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">
              <a href="<?php the_permalink(); ?>" class="hover:text-orange-500 transition-colors">
                <?php the_title(); ?>
              </a>
            </h2>
            <div class="prose prose-lg">
              <?php the_excerpt(); ?>
            </div>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <p class="text-gray-600">Nu s-a gasit niciun continut.</p>
      <?php endif; ?>
    </div>
  </main>

<?php get_footer(); ?>
