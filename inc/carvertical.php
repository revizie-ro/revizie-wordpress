<?php
/**
 * carVertical affiliate link — single source of truth for the WP theme.
 *
 * Mirrors `revizie-app/src/lib/carVertical.ts` and
 * `revizie-mobile/lib/shared/carvertical.dart`. Change one, change all three.
 *
 * Since Sept 2026 carVertical tracks on Everflow (previously Post Affiliate
 * Pro): we link to their `carvertical.deal` tracking domain, which 302s to
 * carvertical.com and appends the partner params itself — including
 * `voucher=revizie`, which is why the "-20%" copy still holds even though we
 * no longer send a voucher param. `uid` selects the VIN/precheck offer and
 * `sub3` carries the VIN. Everflow overwrites any `utm_*` we send, so
 * per-surface attribution lives in `sub2` instead.
 *
 * Every carVertical-controlled value is a constant below, and each can be
 * overridden from wp-config.php without touching the theme — they have
 * migrated platforms once, assume they will again.
 */

if (!defined('ABSPATH')) {
    exit;
}

// Everflow tracking domain + our partner path.
if (!defined('REVIZIE_CARVERTICAL_TRACKING_URL')) {
    define('REVIZIE_CARVERTICAL_TRACKING_URL', 'https://www.carvertical.deal/3H3P48P/66RQ8Q/');
}
// Traffic source label, fixed for our account.
if (!defined('REVIZIE_CARVERTICAL_SOURCE_ID')) {
    define('REVIZIE_CARVERTICAL_SOURCE_ID', 'AFF');
}
// Partner identifier carVertical assigned us.
if (!defined('REVIZIE_CARVERTICAL_SUB1')) {
    define('REVIZIE_CARVERTICAL_SUB1', 'revizie');
}
// Offer id that switches the link to the VIN/precheck deep-link variant.
if (!defined('REVIZIE_CARVERTICAL_VIN_OFFER_UID')) {
    define('REVIZIE_CARVERTICAL_VIN_OFFER_UID', '69');
}
// Discount rate we advertise, in percent. carVertical sets the real rate; we
// only state it. Configurable because the rate is quoted across several pages,
// and advertising a discount the partner no longer applies is a
// consumer-protection problem, not a cosmetic one.
if (!defined('REVIZIE_CARVERTICAL_DISCOUNT_PERCENT')) {
    define('REVIZIE_CARVERTICAL_DISCOUNT_PERCENT', 20);
}
// Discount code shown in our copy. carVertical applies it on the redirect;
// this value only has to MATCH what they apply, it does not cause it.
if (!defined('REVIZIE_CARVERTICAL_DISCOUNT_CODE')) {
    define('REVIZIE_CARVERTICAL_DISCOUNT_CODE', 'REVIZIE');
}

/**
 * Normalises a VIN or plate for `sub3`. carVertical's precheck reads this
 * straight into its search field, so anything that is not part of the
 * identifier (spaces from a copy-paste, dashes from a plate) would land in
 * the field and return no match.
 *
 * @param string $raw
 * @return string Alphanumerics only, uppercased, capped at 24 chars.
 */
function revizie_carvertical_normalize_vehicle_id($raw) {
    if (!is_string($raw) || $raw === '') {
        return '';
    }
    $cleaned = preg_replace('/[^A-Z0-9]/', '', strtoupper($raw));
    return substr($cleaned, 0, 24);
}

/**
 * Builds the affiliate URL for a surface, optionally deep-linking to a VIN.
 *
 * Parses the tracking URL rather than concatenating, so an override that
 * already carries query params (carVertical hands these out with params
 * attached) merges instead of producing a second `?`.
 *
 * Linking straight to carVertical is deliberate: routing through
 * app.revizie.ro first would lose the tracking cookie on this click.
 *
 * @param string $source Surface label, lands in `sub2` (e.g. 'wp_landing_promo').
 * @param string $vin    Optional VIN or plate.
 * @return string        Ready to pass through esc_url().
 */
function revizie_carvertical_url($source, $vin = '') {
    $base  = REVIZIE_CARVERTICAL_TRACKING_URL;
    $query = array();

    // Preserve anything already on the configured URL.
    $existing = wp_parse_url($base, PHP_URL_QUERY);
    if (!empty($existing)) {
        parse_str($existing, $query);
        $base = strstr($base, '?', true);
    }

    $query['source_id'] = REVIZIE_CARVERTICAL_SOURCE_ID;
    $query['sub1']      = REVIZIE_CARVERTICAL_SUB1;
    $query['sub2']      = $source;

    $vehicle_id = revizie_carvertical_normalize_vehicle_id($vin);
    if ($vehicle_id !== '') {
        $query['uid']  = REVIZIE_CARVERTICAL_VIN_OFFER_UID;
        $query['sub3'] = $vehicle_id;
    }

    return $base . '?' . http_build_query($query);
}
