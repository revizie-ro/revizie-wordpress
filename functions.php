<?php
/**
 * Revizie.ro Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

define('REVIZIE_THEME_VERSION', '1.4.0');
define('REVIZIE_THEME_DIR', get_template_directory());
define('REVIZIE_THEME_URI', get_template_directory_uri());

/**
 * Tailwind config injected as inline script after the CDN tag.
 * Mirrors the React app's semantic tokens (tan accent + neutrals)
 * so both surfaces feel like the same brand.
 *
 * Keep in sync with revizie-app/src/index.css :root palette.
 */
function revizie_tailwind_config() {
    return <<<JS
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            accent: {
              DEFAULT: '#B89063',
              hover:   '#A57E54',
              strong:  '#8B6843',
              soft:    '#F4EDE1',
              fg:      '#FFFFFF',
            },
            surface:         '#FFFFFF',
            'surface-muted': '#F5F7FA',
            card:            '#FFFFFF',
            'card-elevated': '#F5F7FA',
            foreground:           '#0F1113',
            'foreground-muted':   '#4B5563',
            'foreground-subtle':  '#9CA3AF',
            border:         '#E5E7EB',
            'border-subtle':'#F3F4F6',
            logo:           '#F8F5F0',
            success: '#22C55E',
            warning: '#F59E0B',
            danger:  '#EF4444',
            info:    '#3B82F6',
          },
          fontFamily: {
            sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
          },
        },
      },
    };
JS;
}

function revizie_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'main-menu'   => __('Main Menu', 'revizie'),
        'footer-menu' => __('Footer Menu', 'revizie'),
    ));
}
add_action('after_setup_theme', 'revizie_theme_setup');

function revizie_enqueue_scripts() {
    wp_enqueue_style('google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null);
    wp_add_inline_script('tailwindcss', revizie_tailwind_config(), 'after');
    wp_enqueue_style('revizie-main-style', REVIZIE_THEME_URI . '/assets/css/main.css', array('google-fonts-inter'), REVIZIE_THEME_VERSION);
    wp_enqueue_style('revizie-style', get_stylesheet_uri(), array(), REVIZIE_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'revizie_enqueue_scripts');

/**
 * Social media links — centralized so footer + homepage stay in sync.
 * Update the URLs in one place when a handle changes.
 */
function revizie_social_links() {
    return array(
        'facebook'  => 'https://www.facebook.com/share/1J43gVTVKm/',
        'instagram' => 'https://www.instagram.com/revizie.ro/',
        'tiktok'    => 'https://www.tiktok.com/@revizie.ro',
    );
}

/**
 * Renders the 3 social icons as anchor pills. `$variant` controls colors:
 * - 'light' = for dark backgrounds (footer) → white-ish icons on subtle bg
 * - 'card'  = for light backgrounds (home section) → accent-tinted icons
 */
function revizie_render_social_links($variant = 'light') {
    $links = revizie_social_links();
    $base = $variant === 'card'
        ? 'group flex items-center justify-center w-12 h-12 rounded-xl bg-accent-soft border border-accent/20 text-accent hover:bg-accent hover:text-white hover:border-accent transition-all'
        : 'group flex items-center justify-center w-10 h-10 rounded-lg bg-white/10 hover:bg-accent text-foreground-subtle hover:text-white transition-all';

    $icons = array(
        'facebook'  => '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>',
        'instagram' => '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>',
        'tiktok'    => '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005.81 20.1a6.34 6.34 0 0010.86-4.43V8.94a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1.85-.37z"/></svg>',
    );

    $labels = array(
        'facebook'  => 'Facebook',
        'instagram' => 'Instagram',
        'tiktok'    => 'TikTok',
    );

    foreach ($links as $key => $url) {
        echo '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer" aria-label="' . esc_attr($labels[$key]) . '" class="' . esc_attr($base) . '">' . $icons[$key] . '</a>';
    }
}

function revizie_get_logo_url() {
    if (has_custom_logo()) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo_image = wp_get_attachment_image_src($custom_logo_id, 'full');
        return $logo_image[0];
    }
    return REVIZIE_THEME_URI . '/assets/img/logo.png';
}

function revizie_main_menu_fallback() {
    ?>
    <nav class="hidden md:flex items-center gap-8">
        <a href="<?php echo home_url('/despre-noi/'); ?>" class="text-foreground-muted hover:text-foreground transition-colors text-sm font-medium">Despre Noi</a>
        <a href="<?php echo home_url('/cum-functioneaza/'); ?>" class="text-foreground-muted hover:text-foreground transition-colors text-sm font-medium">Cum Functioneaza</a>
    </nav>
    <?php
}

function revizie_custom_menu_walker($items, $args) {
    if ($args->theme_location == 'main-menu') {
        $output = '<nav class="hidden md:flex items-center gap-8">';
        foreach ($items as $item) {
            $output .= '<a href="' . esc_url($item->url) . '" class="text-foreground-muted hover:text-foreground transition-colors text-sm font-medium">' . esc_html($item->title) . '</a>';
        }
        $output .= '</nav>';
        return $output;
    }
    return $items;
}

function revizie_display_main_menu() {
    if (has_nav_menu('main-menu')) {
        $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['main-menu']);
        if ($menu_items) {
            echo '<nav class="hidden md:flex items-center gap-8">';
            foreach ($menu_items as $item) {
                if ($item->menu_item_parent == 0) {
                    echo '<a href="' . esc_url($item->url) . '" class="text-foreground-muted hover:text-foreground transition-colors text-sm font-medium">' . esc_html($item->title) . '</a>';
                }
            }
            echo '</nav>';
        }
    } else {
        revizie_main_menu_fallback();
    }
}

function revizie_body_class($classes) {
    $classes[] = 'min-h-screen bg-surface text-foreground';
    return $classes;
}
add_filter('body_class', 'revizie_body_class');

add_filter('show_admin_bar', '__return_false');

/* =============================================================================
 * Coming-soon waitlist
 *
 * Each "feature in development" page renders an email form via
 * revizie_render_waitlist_form(). The form POSTs to admin-ajax.php with
 * action `revizie_waitlist_signup`. The handler validates email + feature
 * and appends to the `revizie_waitlist` option as [{email, feature, ts}].
 * No new DB table needed for a few hundred entries.
 *
 * Read list via WP-CLI or SQL:
 *   SELECT option_value FROM wp_options WHERE option_name = 'revizie_waitlist';
 * ============================================================================= */

function revizie_render_waitlist_form($feature_slug, $feature_label) {
    ?>
    <form
      class="waitlist-form max-w-md mx-auto"
      data-feature="<?php echo esc_attr($feature_slug); ?>"
      data-label="<?php echo esc_attr($feature_label); ?>"
      data-ajax-url="<?php echo esc_url(admin_url('admin-ajax.php')); ?>"
      data-nonce="<?php echo esc_attr(wp_create_nonce('revizie_waitlist')); ?>"
    >
      <div class="flex flex-col sm:flex-row gap-3">
        <input
          type="email"
          name="email"
          required
          placeholder="Adresa ta de email"
          class="flex-1 px-4 py-3 rounded-xl border border-border bg-card text-foreground placeholder-foreground-subtle focus:outline-none focus:ring-2 focus:ring-accent/30 focus:border-accent transition-colors"
        >
        <button
          type="submit"
          class="px-6 py-3 bg-accent hover:bg-accent-hover text-white rounded-xl font-semibold transition-colors disabled:opacity-60"
        >
          Anunta-ma
        </button>
      </div>
      <p class="waitlist-msg text-sm mt-3 text-foreground-muted text-center" role="status" aria-live="polite"></p>
    </form>
    <?php
}

function revizie_print_waitlist_script() {
    if (!is_page_template(array(
        'functii/page-servicii-auto.php',
        'functii/page-tractari.php',
        'functii/page-anvelope.php',
        'functii/page-piese-auto.php',
    ))) {
        return;
    }
    ?>
    <script>
    document.querySelectorAll('.waitlist-form').forEach(function(form) {
      if (form.dataset.bound === '1') return;
      form.dataset.bound = '1';
      var msg = form.querySelector('.waitlist-msg');
      var btn = form.querySelector('button[type="submit"]');
      var input = form.querySelector('input[name="email"]');
      form.addEventListener('submit', async function(e) {
        e.preventDefault();
        msg.textContent = '';
        msg.className = 'waitlist-msg text-sm mt-3 text-foreground-muted text-center';
        btn.disabled = true;
        try {
          var body = new FormData();
          body.append('action', 'revizie_waitlist_signup');
          body.append('email', input.value.trim());
          body.append('feature', form.dataset.feature);
          body.append('nonce', form.dataset.nonce);
          var res = await fetch(form.dataset.ajaxUrl, { method: 'POST', body: body });
          var data = await res.json();
          if (data.success) {
            msg.textContent = 'Te-am adaugat pe lista! Te anuntam de indata ce lansam ' + form.dataset.label + '.';
            msg.className = 'waitlist-msg text-sm mt-3 text-success text-center';
            input.value = '';
          } else {
            msg.textContent = (data.data && data.data.message) || 'Nu am putut salva. Incearca din nou.';
            msg.className = 'waitlist-msg text-sm mt-3 text-danger text-center';
          }
        } catch (err) {
          msg.textContent = 'Eroare de retea. Incearca din nou.';
          msg.className = 'waitlist-msg text-sm mt-3 text-danger text-center';
        } finally {
          btn.disabled = false;
        }
      });
    });
    </script>
    <?php
}
add_action('wp_footer', 'revizie_print_waitlist_script');

function revizie_handle_waitlist_signup() {
    // 'general' = home-page form (any upcoming feature). The 4 named features
    // remain for users who land on a specific Coming Soon page.
    $allowed_features = array('general', 'servicii-auto', 'tractari', 'anvelope', 'piese-auto');

    if (!isset($_POST['nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['nonce'])), 'revizie_waitlist')) {
        wp_send_json_error(array('message' => 'Sesiune expirata, reincarca pagina.'), 403);
    }

    $email = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $feature = isset($_POST['feature']) ? sanitize_key(wp_unslash($_POST['feature'])) : '';

    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Adresa de email invalida.'), 400);
    }
    if (!in_array($feature, $allowed_features, true)) {
        wp_send_json_error(array('message' => 'Functie necunoscuta.'), 400);
    }

    $list = get_option('revizie_waitlist', array());
    if (!is_array($list)) $list = array();

    foreach ($list as $idx => $entry) {
        if (isset($entry['email'], $entry['feature']) && $entry['email'] === $email && $entry['feature'] === $feature) {
            $list[$idx]['ts'] = time();
            update_option('revizie_waitlist', $list, false);
            wp_send_json_success();
        }
    }

    $list[] = array('email' => $email, 'feature' => $feature, 'ts' => time());
    update_option('revizie_waitlist', $list, false);
    wp_send_json_success();
}
add_action('wp_ajax_revizie_waitlist_signup', 'revizie_handle_waitlist_signup');
add_action('wp_ajax_nopriv_revizie_waitlist_signup', 'revizie_handle_waitlist_signup');

/* =============================================================================
 * Auto-provision pages
 *
 * WordPress decouples theme templates from actual Pages — a `page-X.php`
 * template only renders if there's a published Page in the DB with the
 * matching slug AND the template assigned via Page Attributes. New
 * installs (or partial migrations) leave missing pages as 404s.
 *
 * This hook runs once per theme version on admin pageviews: it scans the
 * page manifest, creates any missing entry with the correct slug + parent
 * + template, and leaves existing pages untouched. After it runs, all
 * routes resolve without manual WP Admin work.
 *
 * Bump REVIZIE_THEME_VERSION to re-trigger (e.g. when adding a new page
 * to the manifest below).
 * ============================================================================= */

function revizie_page_manifest($functii_parent_id) {
    return array(
        // Top-level pages
        array('title' => 'Acasa',                          'slug' => 'acasa',                          'template' => 'front-page.php',                          'parent' => 0),
        array('title' => 'Despre Noi',                     'slug' => 'despre-noi',                     'template' => 'page-despre-noi.php',                     'parent' => 0),
        array('title' => 'Cum Functioneaza',               'slug' => 'cum-functioneaza',               'template' => 'page-cum-functioneaza.php',               'parent' => 0),
        array('title' => 'Pentru Parteneri',               'slug' => 'pentru-parteneri',               'template' => 'page-pentru-parteneri.php',               'parent' => 0),
        array('title' => 'Termeni si Conditii',            'slug' => 'termeni-si-conditii',            'template' => 'page-termeni-si-conditii.php',            'parent' => 0),
        array('title' => 'Politica de Confidentialitate',  'slug' => 'politica-de-confidentialitate',  'template' => 'page-politica-de-confidentialitate.php',  'parent' => 0),
        array('title' => 'Politica Cookies',               'slug' => 'politica-cookies',               'template' => 'page-politica-cookies.php',               'parent' => 0),
        // /functii/* subpages
        array('title' => 'Garaj Digital',                  'slug' => 'garaj-digital',                  'template' => 'functii/page-garaj-digital.php',          'parent' => $functii_parent_id),
        array('title' => 'Reminder-e',                     'slug' => 'remindere',                      'template' => 'functii/page-remindere.php',              'parent' => $functii_parent_id),
        array('title' => 'Servicii Auto',                  'slug' => 'servicii-auto',                  'template' => 'functii/page-servicii-auto.php',          'parent' => $functii_parent_id),
        array('title' => 'Tractari',                       'slug' => 'tractari',                       'template' => 'functii/page-tractari.php',               'parent' => $functii_parent_id),
        array('title' => 'Anvelope',                       'slug' => 'anvelope',                       'template' => 'functii/page-anvelope.php',               'parent' => $functii_parent_id),
        array('title' => 'Piese Auto',                     'slug' => 'piese-auto',                     'template' => 'functii/page-piese-auto.php',             'parent' => $functii_parent_id),
    );
}

function revizie_find_page_by_slug_and_parent($slug, $parent_id) {
    $existing = get_posts(array(
        'post_type'      => 'page',
        'name'           => $slug,
        'post_parent'    => (int) $parent_id,
        'posts_per_page' => 1,
        'post_status'    => array('publish', 'draft', 'pending', 'private'),
    ));
    return $existing ? $existing[0] : null;
}

function revizie_provision_pages() {
    // Cheap idempotency: skip when this exact theme version already provisioned.
    if (get_option('revizie_pages_provisioned_version') === REVIZIE_THEME_VERSION) {
        return;
    }

    // Ensure the "Functii" container page exists so child URLs resolve at /functii/X/.
    $functii = revizie_find_page_by_slug_and_parent('functii', 0);
    if (!$functii) {
        $functii_id = wp_insert_post(array(
            'post_title'   => 'Functii',
            'post_name'    => 'functii',
            'post_type'    => 'page',
            'post_status'  => 'publish',
            'post_content' => '<!-- Container page; child pages render their own templates. -->',
        ));
    } else {
        $functii_id = $functii->ID;
    }

    if (!$functii_id || is_wp_error($functii_id)) {
        // Don't mark as provisioned — let it retry next admin pageview.
        return;
    }

    foreach (revizie_page_manifest($functii_id) as $page) {
        $existing = revizie_find_page_by_slug_and_parent($page['slug'], $page['parent']);

        if (!$existing) {
            $new_id = wp_insert_post(array(
                'post_title'   => $page['title'],
                'post_name'    => $page['slug'],
                'post_type'    => 'page',
                'post_status'  => 'publish',
                'post_parent'  => (int) $page['parent'],
                'post_content' => '<!-- Rendered by template ' . esc_attr($page['template']) . ' -->',
            ));
            if ($new_id && !is_wp_error($new_id)) {
                update_post_meta($new_id, '_wp_page_template', $page['template']);
            }
        } else {
            // Existing page — only enforce the template (don't overwrite content / title).
            $current_template = get_post_meta($existing->ID, '_wp_page_template', true);
            if ($current_template !== $page['template']) {
                update_post_meta($existing->ID, '_wp_page_template', $page['template']);
            }
        }
    }

    // If the user hasn't pointed the front page at "Acasa" yet, do it now.
    if (get_option('show_on_front') !== 'page' || !get_option('page_on_front')) {
        $acasa = revizie_find_page_by_slug_and_parent('acasa', 0);
        if ($acasa) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $acasa->ID);
        }
    }

    update_option('revizie_pages_provisioned_version', REVIZIE_THEME_VERSION);
}
add_action('admin_init', 'revizie_provision_pages');

