# Publicarea temei cu diacritice — pașii rămași pe VPS

Commitul `78e5dba` („Diacriticele in tema de pe revizie.ro") e **deja pe
GitHub, pe `main`**. Mai rămâne pasul de pe server, care e cel care ajunge
efectiv la vizitatori.

Toate cele 23 de fișiere au fost verificate cu `php -l` (PHP 8.3.6, chiar
interpretorul de pe VPS): zero erori de sintaxă. Numărul de `<?php`, `?>`,
ghilimele, paranteze și puncte-și-virgulă e identic cu înainte, fișier cu
fișier — s-a schimbat doar textul dintre taguri și din atributele `alt`,
`title`, `placeholder`, `content`.

## De rulat pe VPS (root)

```bash
cd /opt/wp-render/public_html/wp-content/themes/revizie-theme

FISIERE="footer.php front-page.php functions.php header.php index.php \
functii/page-anvelope.php functii/page-garaj-digital.php \
functii/page-piese-auto.php functii/page-remindere.php \
functii/page-servicii-auto.php functii/page-tractari.php \
page-cum-functioneaza.php page-descarca.php page-despre-noi.php \
page-home-preview.php page-intrebari-frecvente.php \
page-politica-cookies.php page-politica-de-anulare.php \
page-politica-de-confidentialitate.php page-politica-de-livrare.php \
page-politica-gdpr.php page-produse-si-preturi.php \
page-termeni-si-conditii.php"

# 1. plasa de siguranță
T=/var/tmp/tema-inainte-de-diacritice-$(date -u +%Y%m%d%H%M)
mkdir -p "$T"
for f in $FISIERE; do mkdir -p "$T/$(dirname "$f")"; cp -a "$f" "$T/$f"; done
echo "copie în $T"

# 2. doar fișierele schimbate (clona de pe server e murdară intenționat)
git fetch origin
git checkout origin/main -- $FISIERE
chown www-data:www-data $FISIERE

# 3. oglinda — asta e ce văd vizitatorii
ORIGIN_IP=127.0.0.2 /root/bin/wp-mirror.sh
tail -3 /var/log/wp-mirror.log          # „OK: 29 pagini html"
```

## Verificare

```bash
curl -s https://revizie.ro/ | grep -o 'Termeni și Condiții'
curl -s https://revizie.ro/termeni-si-conditii/ | grep -c 'și'
```

Pe `revizie.ro`, nu pe `89.42.218.38` — ăla îți arată ce-ai urcat prin FTP,
nu ce vede lumea.

## Întoarcere, dacă e nevoie

Copia veche a oglinzii rămâne în `/var/www/wp-mirror.prev`, iar fișierele
temei în `$T` de mai sus. `wp-mirror.sh` construiește în temp și înlocuiește
doar dacă homepage-ul iese întreg, deci o rulare eșuată nu strică nimic.

## ⚠️ Un lucru care NU e diacritică

`page-intrebari-frecvente.php` e **netracked** pe server (`??`) — o rămășiță
din copia de pe RomArg, mai veche decât repo-ul. Versiunea de pe server încă
are întrebarea „Oferiti si CASCO?" și scrie „20%" în loc de constanta
`REVIZIE_CARVERTICAL_DISCOUNT_PERCENT`. Checkout-ul o aduce la zi.

Nu se vede nicăieri: `/intrebari-frecvente/` nu e în oglindă (cele 29 de
pagini), deci URL-ul cade pe aplicația React, nu pe pagina PHP. Dar merită
știut că fișierul de pe server era în urmă.
