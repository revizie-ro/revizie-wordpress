<?php
/**
 * Template Name: Pentru Parteneri
 *
 * PUNTE catre revizie.ro/parteneri. Nu mai are continut propriu.
 *
 * De ce (5 noiembrie 2026): pagina asta spunea vizitatorilor ca pentru
 * service-uri, anvelope si tractari programul „e in pregatire" si ca singura
 * optiune e un email la office@. Pagina noua din aplicatie ii inscrie pe loc,
 * cu preturi. Aceeasi firma primea doua raspunsuri opuse, dupa unde apasa.
 *
 * Redirectarea adevarata (301, ca sa treaca si valoarea din Google) o face
 * nginx pe VPS. Fisierul asta e plasa: daca cineva ajunge totusi aici — sau
 * daca regula din nginx lipseste — tot pleaca spre pagina buna, nu intr-un
 * 404. Il tinem si pentru ca `functions.php` creeaza pagina dupa template.
 *
 * ATENTIE la copia statica: site-ul se serveste din `/var/www/wp-mirror`, iar
 * oglinda se construieste cu wget. De-aia NU facem `wp_redirect()` aici —
 * wget ar urmari redirectarea catre o adresa pe care WordPress-ul local n-o
 * are si ar salva un 404 in oglinda. Un meta refresh se copiaza intact.
 */

$destinatie = 'https://revizie.ro/parteneri';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Programul de parteneri &ndash; revizie.ro</title>
  <link rel="canonical" href="<?php echo esc_url($destinatie); ?>">
  <meta http-equiv="refresh" content="0; url=<?php echo esc_url($destinatie); ?>">
  <style>
    body { margin:0; min-height:100vh; display:flex; align-items:center; justify-content:center;
           background:#0f0f11; color:#e8e8ea; font:16px/1.6 system-ui,-apple-system,Segoe UI,sans-serif; }
    .cutie { max-width:28rem; padding:2rem; text-align:center; }
    a { color:#ff7a2f; font-weight:600; }
  </style>
</head>
<body>
  <div class="cutie">
    <p>Programul de parteneri s-a mutat.</p>
    <p><a href="<?php echo esc_url($destinatie); ?>">Mergi la pagina de parteneri</a></p>
  </div>
  <script>location.replace(<?php echo wp_json_encode($destinatie); ?>);</script>
</body>
</html>
