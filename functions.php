<?php
/**
 * Revizie.ro Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

define('REVIZIE_THEME_VERSION', '1.10.0');
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

/**
 * Official NETOPIA Payments logo widget (iframe served from mny.ro). The
 * snippet + `secret` (POS id for revizie.ro) come from the NETOPIA merchant
 * panel → Identitate vizuala. The widget bundles the NETOPIA wordmark plus
 * the Mastercard + Visa marks in one image, so no separate card SVGs needed.
 *
 * IMPORTANT: `$color` is the BACKGROUND color of YOUR surface (hex without
 * #), not the logo color. NETOPIA auto-inverts the logo to contrast against
 * it — pass a dark bg and you get a light logo, pass white and you get a dark
 * logo. Both placements sit on `bg-foreground` (#0F1113), so we pass 0F1113
 * and NETOPIA renders the light logo variant.
 *
 * `$version` accepts 'vertical' or 'orizontal' (NETOPIA's Romanian spelling —
 * NOT 'horizontal', which renders blank). Orizontal is ~4:1, so give it a
 * wide box (e.g. 220x56); vertical is ~5:4 (e.g. 100x80).
 */
function revizie_render_netopia_logo($color = 'ffffff', $version = 'vertical', $width = 100, $height = 80) {
    $src = 'https://mny.ro/npId.html?color=%23' . sanitize_hex_color_no_hash($color)
        . '&version=' . rawurlencode($version)
        . '&secret=165293';
    printf(
        '<iframe src="%s" style="border:none;width:%dpx;height:%dpx;" title="NETOPIA Payments" loading="lazy"></iframe>',
        esc_url($src),
        (int) $width,
        (int) $height
    );
}

/**
 * Official ANPC SAL pictogram, mandatory on the home page for RO
 * e-commerce per ORDIN ANPC 449/2022 art. 2 (as amended by Ordinul
 * 270/2026): a 250x50 px pictogram linking to the SAL platform at
 * https://reclamatiisal.anpc.ro. The image must be the official one
 * downloaded for free from https://anpc.ro — do NOT recolor or resize
 * it, the law requires the facsimile from Anexa nr. 2.
 *
 * The old EU ODR pictogram (ec.europa.eu/consumers/odr) is intentionally
 * gone: the EU shut that platform down in July 2025 and the 2026
 * amendment dropped it, leaving only the national SAL pictogram.
 *
 * Until the PNG is dropped at assets/img/anpc-sal.png we render a text
 * link fallback so nothing appears broken.
 */
function revizie_render_anpc_sal() {
    $sal_url  = 'https://reclamatiisal.anpc.ro';
    $img_path = REVIZIE_THEME_DIR . '/assets/img/anpc-sal.png';

    if (file_exists($img_path)) {
        // Inline the pictogram as a base64 data URI instead of linking to its
        // theme URL. On this host, static files under the theme folder are NOT
        // served over HTTP — the request falls through to WordPress (returns
        // the blog/404 page) even though the file exists on disk. Embedding
        // sidesteps that entirely. PHP reads the file server-side (works), so
        // the image always renders. ~4.5KB, negligible inline.
        // Native size is 201x50; render 1:1 so the facsimile mark isn't
        // distorted.
        $data_uri = 'data:image/png;base64,' . base64_encode(file_get_contents($img_path));
        printf(
            '<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="ANPC - Solutionarea Alternativa a Litigiilor"><img src="%s" alt="ANPC - Solutionarea Alternativa a Litigiilor" width="201" height="50" loading="lazy" class="block"></a>',
            esc_url($sal_url),
            $data_uri
        );
    } else {
        printf(
            '<a href="%s" target="_blank" rel="noopener noreferrer" class="text-foreground-subtle hover:text-white transition-colors">ANPC &middot; Solutionarea Alternativa a Litigiilor</a>',
            esc_url($sal_url)
        );
    }
}

/**
 * The three consumer-protection text links shown next to the SAL
 * pictogram, identical to the React app footer (ANPC / SAL / ODR).
 * Kept in sync with src/components/layout/Footer.tsx and translations.ts.
 */
function revizie_render_anpc_links() {
    $links = array(
        'ANPC'                                  => 'https://anpc.ro',
        'ANPC — SAL Reclamatii'                 => 'https://reclamatiisal.anpc.ro/',
        'Solutionarea Online a Litigiilor (UE)' => 'https://ec.europa.eu/consumers/odr/',
    );
    $out = array();
    foreach ($links as $label => $url) {
        $out[] = '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer" class="text-foreground-subtle hover:text-white transition-colors">' . esc_html($label) . '</a>';
    }
    echo implode('<span class="text-white/20" aria-hidden="true">·</span>', $out);
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
    <nav class="hidden md:flex items-center gap-5 lg:gap-6">
        <a href="<?php echo home_url('/functii/garaj-digital/'); ?>" class="text-foreground-muted hover:text-foreground transition-colors text-sm font-medium whitespace-nowrap">Garaj Digital</a>
        <a href="https://app.revizie.ro/anunturi" class="text-foreground-muted hover:text-foreground transition-colors text-sm font-medium">Anunturi</a>
        <a href="https://app.revizie.ro/asigurari/rca" class="text-foreground-muted hover:text-foreground transition-colors text-sm font-medium">Asigurari</a>
        <a href="<?php echo home_url('/functii/remindere/'); ?>" class="text-foreground-muted hover:text-foreground transition-colors text-sm font-medium">Reminder-e</a>
        <span class="w-px h-4 bg-border" aria-hidden="true"></span>
        <a href="<?php echo home_url('/despre-noi/'); ?>" class="text-foreground-muted hover:text-foreground transition-colors text-sm font-medium whitespace-nowrap">Despre Noi</a>
        <a href="<?php echo home_url('/cum-functioneaza/'); ?>" class="text-foreground-muted hover:text-foreground transition-colors text-sm font-medium whitespace-nowrap">Cum Functioneaza</a>
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
 * action `revizie_waitlist_signup`. The handler:
 *   1. Forwards the signup to Supabase via the `upsert_waitlist_signup`
 *      RPC (anon key, public-allowed RLS). Supabase is the source of truth.
 *   2. Also mirrors the entry to `wp_options.revizie_waitlist` as a local
 *      cache + fallback if the Supabase call fails.
 *
 * Admin page reads from Supabase via the service_role key (defined as a
 * `SUPABASE_SERVICE_ROLE_KEY` constant in wp-config.php — never in repo).
 * If the constant is missing, the page falls back to the wp_options cache.
 *
 * See revizie-app/supabase/migrations/20260527050000_060_waitlist_signups.sql
 * for the table + RLS + RPC definitions.
 * ============================================================================= */

// Public Supabase project info — same values as the React app uses. Safe to
// hardcode (anon key + URL are exposed in the React bundle anyway). RLS
// keeps the anon role to INSERT-only on waitlist_signups; no SELECT path.
define('REVIZIE_SUPABASE_URL',      'https://qciuaqezvpieohvgcmau.supabase.co');
define('REVIZIE_SUPABASE_ANON_KEY', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InFjaXVhcWV6dnBpZW9odmdjbWF1Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NzcwNDU1NjMsImV4cCI6MjA5MjYyMTU2M30.cOnCbaw7gs7o6JLGcuVGKHgpc_XgNelyOYEARI8IWMY');

/**
 * Service-role key — only used server-side from the WP Admin "Waitlist"
 * page to SELECT rows (bypasses RLS). MUST be set as a constant in
 * wp-config.php, never committed:
 *
 *   define('SUPABASE_SERVICE_ROLE_KEY', 'eyJ...');
 *
 * If not defined, the admin page falls back to the local wp_options cache.
 */
function revizie_supabase_service_role_key() {
    return defined('SUPABASE_SERVICE_ROLE_KEY') ? SUPABASE_SERVICE_ROLE_KEY : '';
}

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

/**
 * Forwards the signup to Supabase via the `upsert_waitlist_signup` RPC.
 * Returns true on success, false on any network / API error.
 */
function revizie_waitlist_push_to_supabase($email, $feature) {
    $url = REVIZIE_SUPABASE_URL . '/rest/v1/rpc/upsert_waitlist_signup';
    $response = wp_remote_post($url, array(
        'timeout' => 8,
        'headers' => array(
            'apikey'        => REVIZIE_SUPABASE_ANON_KEY,
            'Authorization' => 'Bearer ' . REVIZIE_SUPABASE_ANON_KEY,
            'Content-Type'  => 'application/json',
        ),
        'body' => wp_json_encode(array(
            'p_email'   => $email,
            'p_feature' => $feature,
            'p_source'  => 'wordpress-landing',
        )),
    ));

    if (is_wp_error($response)) {
        error_log('[revizie waitlist] Supabase RPC network error: ' . $response->get_error_message());
        return false;
    }
    $code = wp_remote_retrieve_response_code($response);
    if ($code < 200 || $code >= 300) {
        $body = wp_remote_retrieve_body($response);
        error_log("[revizie waitlist] Supabase RPC returned HTTP $code: " . substr($body, 0, 500));
        return false;
    }
    return true;
}

/**
 * Mirrors the signup to wp_options as a local cache. Independent of the
 * Supabase write — best-effort, never throws. Lets the admin page work
 * even if Supabase is unreachable.
 */
function revizie_waitlist_cache_locally($email, $feature) {
    $list = get_option('revizie_waitlist', array());
    if (!is_array($list)) $list = array();

    foreach ($list as $idx => $entry) {
        if (isset($entry['email'], $entry['feature']) && $entry['email'] === $email && $entry['feature'] === $feature) {
            $list[$idx]['ts'] = time();
            update_option('revizie_waitlist', $list, false);
            return;
        }
    }
    $list[] = array('email' => $email, 'feature' => $feature, 'ts' => time());
    update_option('revizie_waitlist', $list, false);
}

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

    // Primary write: Supabase (source of truth)
    revizie_waitlist_push_to_supabase($email, $feature);

    // Mirror to local cache regardless — keeps admin page usable even if
    // Supabase is briefly unreachable, and gives us recovery data if the
    // Supabase write silently regresses.
    revizie_waitlist_cache_locally($email, $feature);

    wp_send_json_success();
}
add_action('wp_ajax_revizie_waitlist_signup', 'revizie_handle_waitlist_signup');
add_action('wp_ajax_nopriv_revizie_waitlist_signup', 'revizie_handle_waitlist_signup');

/* =============================================================================
 * Waitlist admin page
 *
 * Renders a sortable table of every email collected via the Coming Soon
 * forms, with filter chips per feature and a CSV export. Lives at
 * /wp-admin/admin.php?page=revizie-waitlist (top-level "Waitlist" menu).
 *
 * Storage: wp_options.revizie_waitlist as JSON-encoded array of
 * `{ email, feature, ts }`. Fine up to a few thousand entries; if the
 * list grows past ~10k we should migrate to a proper custom table.
 * ============================================================================= */

function revizie_register_waitlist_admin_page() {
    add_menu_page(
        'Waitlist revizie.ro',
        'Waitlist',
        'manage_options',
        'revizie-waitlist',
        'revizie_render_waitlist_admin',
        'dashicons-email-alt',
        25
    );
}
add_action('admin_menu', 'revizie_register_waitlist_admin_page');

/**
 * Returns the waitlist as a normalized array of `{ email, feature, ts, source }`
 * sorted by ts desc. Tries Supabase first (source of truth); on any failure
 * falls back to the local wp_options cache so the admin UI never goes blank.
 */
function revizie_waitlist_fetch_all() {
    $service_key = revizie_supabase_service_role_key();
    if ($service_key) {
        $url = REVIZIE_SUPABASE_URL . '/rest/v1/waitlist_signups?select=email,feature,source,created_at&order=created_at.desc&limit=5000';
        $response = wp_remote_get($url, array(
            'timeout' => 8,
            'headers' => array(
                'apikey'        => $service_key,
                'Authorization' => 'Bearer ' . $service_key,
                'Accept'        => 'application/json',
            ),
        ));
        if (!is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200) {
            $rows = json_decode(wp_remote_retrieve_body($response), true);
            if (is_array($rows)) {
                $normalized = array();
                foreach ($rows as $r) {
                    $normalized[] = array(
                        'email'   => $r['email']   ?? '',
                        'feature' => $r['feature'] ?? '',
                        'source'  => $r['source']  ?? '',
                        'ts'      => isset($r['created_at']) ? strtotime($r['created_at']) : 0,
                    );
                }
                return array('rows' => $normalized, 'source' => 'supabase');
            }
        }
        // fall through to cache on any failure
    }

    $list = get_option('revizie_waitlist', array());
    if (!is_array($list)) $list = array();
    usort($list, function ($a, $b) { return ($b['ts'] ?? 0) - ($a['ts'] ?? 0); });
    $normalized = array();
    foreach ($list as $e) {
        $normalized[] = array(
            'email'   => $e['email']   ?? '',
            'feature' => $e['feature'] ?? '',
            'source'  => $e['source']  ?? 'wp-cache',
            'ts'      => $e['ts']      ?? 0,
        );
    }
    return array('rows' => $normalized, 'source' => 'wp_options');
}

function revizie_handle_waitlist_csv_export() {
    if (!isset($_GET['page'], $_GET['action']) || $_GET['page'] !== 'revizie-waitlist' || $_GET['action'] !== 'export_csv') {
        return;
    }
    if (!current_user_can('manage_options')) {
        wp_die('Nu ai permisiunea sa exporti.');
    }
    check_admin_referer('revizie_waitlist_export');

    $data = revizie_waitlist_fetch_all();

    $filename = 'revizie-waitlist-' . date('Y-m-d-His') . '.csv';
    nocache_headers();
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    $out = fopen('php://output', 'w');
    // BOM pentru Excel sa recunoasca UTF-8
    fwrite($out, "\xEF\xBB\xBF");
    fputcsv($out, array('Email', 'Feature', 'Source', 'Data inregistrarii (UTC)'));
    foreach ($data['rows'] as $entry) {
        fputcsv($out, array(
            $entry['email'],
            $entry['feature'],
            $entry['source'],
            $entry['ts'] ? gmdate('Y-m-d H:i:s', (int) $entry['ts']) : '',
        ));
    }
    fclose($out);
    exit;
}
add_action('admin_init', 'revizie_handle_waitlist_csv_export');

function revizie_render_waitlist_admin() {
    // Handle row deletion (Supabase + local cache, matched by email + feature)
    if (isset($_POST['revizie_delete_email'], $_POST['revizie_delete_feature']) && check_admin_referer('revizie_waitlist_delete')) {
        $del_email   = sanitize_email(wp_unslash($_POST['revizie_delete_email']));
        $del_feature = sanitize_key(wp_unslash($_POST['revizie_delete_feature']));

        // Delete from Supabase (best-effort)
        $service_key = revizie_supabase_service_role_key();
        if ($service_key) {
            wp_remote_request(
                REVIZIE_SUPABASE_URL . '/rest/v1/waitlist_signups?email=eq.' . rawurlencode($del_email) . '&feature=eq.' . rawurlencode($del_feature),
                array(
                    'method'  => 'DELETE',
                    'timeout' => 8,
                    'headers' => array(
                        'apikey'        => $service_key,
                        'Authorization' => 'Bearer ' . $service_key,
                    ),
                )
            );
        }
        // Delete from local cache
        $list = get_option('revizie_waitlist', array());
        if (!is_array($list)) $list = array();
        $list = array_values(array_filter($list, function ($e) use ($del_email, $del_feature) {
            return !(isset($e['email'], $e['feature']) && $e['email'] === $del_email && $e['feature'] === $del_feature);
        }));
        update_option('revizie_waitlist', $list, false);
        echo '<div class="notice notice-success is-dismissible"><p>Intrare stearsa.</p></div>';
    }

    $data = revizie_waitlist_fetch_all();
    $all = $data['rows'];
    $source_label = $data['source'] === 'supabase' ? 'Supabase (live)' : 'wp_options (fallback local)';

    // Per-feature counts for filter chips
    $counts = array();
    foreach ($all as $e) {
        $f = $e['feature'] ?: 'general';
        $counts[$f] = ($counts[$f] ?? 0) + 1;
    }
    ksort($counts);

    // Active filter
    $filter = isset($_GET['feature']) ? sanitize_key(wp_unslash($_GET['feature'])) : '';

    // Apply filter (already sorted desc by fetch_all)
    $list = $all;
    if ($filter !== '') {
        $list = array_values(array_filter($list, function ($e) use ($filter) {
            return $e['feature'] === $filter;
        }));
    }

    $base_url   = admin_url('admin.php?page=revizie-waitlist');
    $export_url = wp_nonce_url(add_query_arg(array('action' => 'export_csv'), $base_url), 'revizie_waitlist_export');
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Waitlist revizie.ro</h1>
        <a href="<?php echo esc_url($export_url); ?>" class="page-title-action">Exporta CSV</a>
        <hr class="wp-header-end">

        <p>
          Email-uri colectate de la userii care vor sa fie anuntati cand lansam fiecare functionalitate.
          Total: <strong><?php echo count($all); ?></strong> intrari.
          <span class="description" style="margin-left: 12px;">Sursa: <code><?php echo esc_html($source_label); ?></code></span>
        </p>
        <?php if ($data['source'] !== 'supabase'): ?>
        <div class="notice notice-warning inline" style="margin-bottom: 12px;">
          <p><strong>Atentie:</strong> Citesti din cache-ul local wp_options. Defineste <code>SUPABASE_SERVICE_ROLE_KEY</code> in <code>wp-config.php</code> pentru a vedea datele direct din Supabase.</p>
        </div>
        <?php endif; ?>

        <?php if (!empty($counts)): ?>
        <ul class="subsubsub">
            <li>
                <a href="<?php echo esc_url($base_url); ?>" class="<?php echo $filter === '' ? 'current' : ''; ?>">
                    Toate <span class="count">(<?php echo count($all); ?>)</span>
                </a>
                <?php if (!empty($counts)) echo ' |'; ?>
            </li>
            <?php $keys = array_keys($counts); $last_key = end($keys); foreach ($counts as $feat => $count): ?>
                <li>
                    <a href="<?php echo esc_url(add_query_arg('feature', $feat, $base_url)); ?>" class="<?php echo $filter === $feat ? 'current' : ''; ?>">
                        <code><?php echo esc_html($feat); ?></code> <span class="count">(<?php echo $count; ?>)</span>
                    </a>
                    <?php if ($feat !== $last_key) echo ' |'; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <br class="clear">
        <?php endif; ?>

        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th style="width: 35%;">Email</th>
                    <th style="width: 25%;">Functie</th>
                    <th style="width: 25%;">Data inregistrarii</th>
                    <th style="width: 15%;">Actiune</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($list)): ?>
                    <tr><td colspan="4"><em>Nicio intrare in lista pentru filtrul curent.</em></td></tr>
                <?php else: ?>
                    <?php foreach ($list as $entry): ?>
                        <tr>
                            <td><a href="mailto:<?php echo esc_attr($entry['email'] ?? ''); ?>"><?php echo esc_html($entry['email'] ?? ''); ?></a></td>
                            <td><code><?php echo esc_html($entry['feature'] ?? ''); ?></code></td>
                            <td><?php echo esc_html(isset($entry['ts']) ? date('Y-m-d H:i', (int) $entry['ts']) : '—'); ?></td>
                            <td>
                                <form method="post" style="display:inline;" onsubmit="return confirm('Sigur stergi intrarea pentru <?php echo esc_js($entry['email'] ?? ''); ?>?');">
                                    <?php wp_nonce_field('revizie_waitlist_delete'); ?>
                                    <input type="hidden" name="revizie_delete_email" value="<?php echo esc_attr($entry['email'] ?? ''); ?>">
                                    <input type="hidden" name="revizie_delete_feature" value="<?php echo esc_attr($entry['feature'] ?? ''); ?>">
                                    <button type="submit" class="button button-small button-link-delete">Sterge</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

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
    // Bypass with ?revizie_reprovision=1 (any logged-in user) when you need
    // to force a re-run without bumping the version constant.
    $force = isset($_GET['revizie_reprovision']) && is_user_logged_in();
    if (!$force && get_option('revizie_pages_provisioned_version') === REVIZIE_THEME_VERSION) {
        return;
    }
    if ($force) {
        delete_option('revizie_pages_provisioned_version');
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
// Fire on `init` (not `admin_init`) so the very first frontend pageview after
// a deploy also triggers provisioning. The option check makes subsequent
// pageviews zero-cost (single get_option call).
add_action('init', 'revizie_provision_pages');

