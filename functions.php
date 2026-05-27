<?php
/**
 * Revizie.ro Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

define('REVIZIE_THEME_VERSION', '1.1.0');
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
