# Tema WordPress revizie.ro

Tema oficiala pentru site-ul de prezentare revizie.ro. Companion la React app de pe `app.revizie.ro` — paleta de culori, mesajul si lista de functionalitati sunt sincronizate manual cu app-ul.

## Instalare initiala

### Metoda 1: Upload folder (FTP / cPanel File Manager)

1. Conecteaza-te prin FTP sau File Manager la hosting (Romarg)
2. Navigheaza la: `public_html/wp-content/themes/`
3. Incarca intregul folder al temei
4. In WordPress Admin: **Appearance → Themes** → activeaza tema "Revizie.ro Theme"

### Metoda 2: Upload ZIP

1. Creeaza un ZIP al folderului (din `revizie-wordpress/` selectezi tot, fara folder-ul `.git`)
2. WP Admin: **Appearance → Themes → Add New → Upload Theme** → incarca ZIP-ul
3. Activeaza tema

## Configurare dupa activare

### 1. Logo

**Appearance → Customize → Site Identity** → Select Logo → urca PNG (se foloseste si in header si footer).

### 2. Pagini

⚠️ **Nu mai trebuie create de mana.** Tema le creeaza singura la prima incarcare
de dupa un deploy (`revizie_provision_pages`, legat de `REVIZIE_THEME_VERSION`):
creeaza ce lipseste, atribuie template-ul si pune „Acasa" ca homepage. Paginile
existente nu sunt rescrise, doar li se corecteaza template-ul.

Daca adaugi un sablon nou, adauga-l in `revizie_page_manifest()` **si urca
versiunea temei** — altfel provizionarea nu reruleaza si pagina nu apare.
Reluare fortata, fara sa urci versiunea: `?revizie_reprovision=1`, logat.

Tabelul de mai jos e deci o referinta a ce exista, nu o lista de facut:

| Titlu pagina | Slug (URL) | Template |
|--------------|------------|----------|
| Acasa | `/` (front page) | Home Page |
| Descarca aplicatia | `descarca` | Descarca aplicatia |
| Intrebari Frecvente | `intrebari-frecvente` | Intrebari Frecvente |
| Despre Noi | `despre-noi` | Despre Noi |
| Cum Functioneaza | `cum-functioneaza` | Cum Functioneaza |
| Pentru Parteneri | `pentru-parteneri` | Pentru Parteneri |
| Produse si Preturi | `produse-si-preturi` | Produse si Preturi |
| Termeni si Conditii | `termeni-si-conditii` | Termeni si Conditii |
| Politica de Confidentialitate | `politica-de-confidentialitate` | Politica de Confidentialitate |
| Politica GDPR | `politica-gdpr` | Politica GDPR |
| Politica Cookies | `politica-cookies` | Politica Cookies |
| Politica de livrare | `politica-de-livrare` | Politica de livrare |
| Politica de anulare | `politica-de-anulare` | Politica de anulare |
| Garaj Digital | `functii/garaj-digital` | Functie - Garaj Digital |
| Reminder-e | `functii/remindere` | Functie - Remindere |
| Programari Service *(Coming Soon)* | `functii/servicii-auto` | Functie - Servicii Auto |
| Tractari *(Coming Soon)* | `functii/tractari` | Functie - Tractari |
| Anvelope *(Coming Soon)* | `functii/anvelope` | Functie - Anvelope |
| Piese Auto *(Coming Soon)* | `functii/piese-auto` | Functie - Piese Auto |

### 3. Homepage

**Settings → Reading** → "A static page" → Homepage = pagina "Acasa".

### 4. Meniu (optional)

**Appearance → Menus** → meniu "Main Menu" cu link-uri spre Despre Noi / Cum Functioneaza / Pentru Parteneri. Daca nu configurezi, foloseste fallback-ul hardcodat din tema.

⚠️ **In acest moment ruleaza fallback-ul din cod** (`revizie_main_menu_fallback`
in `functions.php`), nu un meniu WordPress — verificat pe site dupa clasele
`gap-5 lg:gap-6`. Deci modificarile facute in Appearance → Menus **nu se vad**
pana cand cineva asigneaza efectiv un meniu la locatia `main-menu`. Daca vrei sa
schimbi meniul azi, schimba-l in cod.

## Aliniere cu app.revizie.ro

Aceasta tema partajeaza identitate vizuala si lista de features cu React app-ul de la `app.revizie.ro`. Schimbarile pe care le faci aici trebuie corelate cu app-ul:

- **Culori**: paleta accent tan (`#B89063`) + neutrals e definita ca `tailwind.config` inline in `functions.php`. Trebuie sa ramana sincronizata cu `revizie-app/src/index.css` `:root` palette.
- **Status features**: lista de "Functii disponibile" din front-page reflecta `FEATURES` din `revizie-app/src/lib/features.ts`. Cand activezi un feature flag in React, muta pagina aici din "In dezvoltare" in lista principala (vezi front-page.php).
- **Email contact**: `office@revizie.ro` (sincronizat cu app-ul).

## Coming Soon waitlist

Toate formularele Coming Soon (homepage + 4 pagini feature) trimit email-urile la **Supabase** in tabela `public.waitlist_signups` (vezi migration `revizie-app/supabase/migrations/20260527050000_060_waitlist_signups.sql`).

**Storage path:**
1. Primary: Supabase `waitlist_signups` table via RPC `upsert_waitlist_signup` (anon key, RLS INSERT-only public)
2. Mirror local: `wp_options.revizie_waitlist` ca fallback cache in caz ca Supabase e unreachable

**Vezi lista:** WP Admin → **Waitlist** (meniu top-level). Tabel sortabil + filtre + export CSV.

### Configurare `SUPABASE_SERVICE_ROLE_KEY` (necesara pentru a citi din Supabase)

Adauga in `wp-config.php` (in `public_html/`, niciodata in repo):

```php
define('SUPABASE_SERVICE_ROLE_KEY', 'eyJ...');
```

Cheia o iei din **Supabase Dashboard → Project Settings → API → service_role (secret)**. Fara ea, pagina admin afiseaza datele din wp_options cache (mai vechi, doar ce a trecut prin acest WordPress).

**De ce service_role:** RLS pe `waitlist_signups` blocheaza SELECT pentru anon. Admin-ul trebuie sa bypasseze RLS via cheia de service. Nu pune cheia in cod sau in wp_options — doar in `wp-config.php` ca constanta PHP.

## Pagina de descarcare (`/descarca`) — o adresa unica pentru reclame

`revizie.ro/descarca` (aliasuri `/app`, `/aplicatie`) trimite fiecare vizitator
unde trebuie, fara ca cel care pune linkul sa stie ce telefon are omul:

| Cine deschide | Unde ajunge |
|---|---|
| Android | aplicatia Magazin Play |
| iPhone / iPad | App Store |
| Calculator | pagina de prezentare, cu cod QR |
| Robot de previzualizare (WhatsApp, Facebook) | pagina, ca sa ia titlul si imaginea |

Totul in `functions.php`, sub comentariul „o singura adresa de pus in reclame".
`?vezi=1` opreste redirectarea — singurul fel de a vedea pagina de pe telefon.

### ⚠️ De ce Android primeste o pagina si nu o redirectare

Android preda un link catre aplicatia care il revendica **doar la CLIC**. O
adresa tastata, sau ajunsa printr-o redirectare de server, nu se preda
niciodata — deci un 302 catre `play.google.com` deschidea magazinul **in
browser**. (Se vedea clar: insignele de pe pagina duceau in aplicatie, iar
redirectarea nu. Aceeasi adresa, alt fel de a ajunge la ea.)

Solutia e `intent://` cu `scheme=market`. Dar nici `intent://` nu merge dintr-un
302 — Chrome refuza schemele straine din redirectari de server. De aceea Android
primeste o pagina de ~1,4 KB (`revizie_render_play_launcher`) care incearca
`location.replace` inainte de primul desen si pastreaza un buton mare daca
browserul a blocat plecarea. Nu e mai lenta: WordPress e deja pornit acolo.

### Trei lucruri de pastrat daca atingi codul

1. **`nocache_headers()`** — fara el, un cache pastreaza PRIMUL raspuns si il da
   tuturor: un om cu Android ajunge in App Store fiindca inaintea lui a venit
   cineva cu iPhone. Esecul e tacut, se vede abia in cifrele de instalari.
2. **Robotii nu se redirecteaza** (`revizie_is_crawler`) — altfel
   previzualizarea linkului ar arata pagina Apple in loc de revizie.ro.
3. **302, nu 301** — un 301 ramane in memoria browserului pentru totdeauna.

### Linkuri pentru reclame

`revizie.ro/descarca?sursa=facebook`. **`sursa` nu schimba destinatia**, e doar o
eticheta care calatoreste mai departe: `referrer=utm_source=…` la Play (apare in
Play Console → rapoarte de achizitie) si `ct=…` la Apple. Curatata server-side la
`[A-Za-z0-9_.-]`, maximum 40 de caractere. Codul QR tipareste
`?sursa=qr`.

⏳ Apple numara `ct` doar impreuna cu `pt`, simbolul de furnizor din App Store
Connect → App Analytics → Campaigns. Cat timp `REVIZIE_APPLE_PROVIDER_TOKEN` e
gol, linkurile catre Apple pleaca curate si instalarile iOS se vad doar la
gramada.

### ⚠️ `og:` pe pagina asta trece printr-un tampon

Pe site e un plugin de SEO neidentificat (nu incarca nimic in pagina) care scrie
si el `og:`, **inaintea oricarei prioritati** pe care i-ai da-o temei, si gresit:
`og:description` un spatiu gol, `og:locale` = `en_US`, fara `og:image`. Cand o
proprietate apare de doua ori, cine citeste o ia pe prima.

De aceea `wp_head` se strange intr-un tampon (prioritatile -100 si 9999), se scot
toate etichetele `og:`/`twitter:` si se pun ale noastre. Doar pe pagina asta.
Daca mai ai nevoie de `og:` corecte pe alta pagina, refoloseste mecanismul —
**nu incerca cu prioritati**, nu se poate castiga asa.

## Link-uri aplicatie

Magazinele (constante in `functions.php`, folosite de insigne, de bara de pe
telefon si de pagina de descarcare):
- App Store: `https://apps.apple.com/ro/app/revizie-ro/id6803194044`
- Google Play: `https://play.google.com/store/apps/details?id=ro.revizie.revizie_mobile`

Pagina de descarcare e legata din patru locuri: meniul de sus, meniul de pe
telefon, footer, si homepage **doar pe calculator** („Scaneaza codul QR cu
telefonul" — pe telefon e ascunsa, acolo insignele fac treaba; pe calculator o
insigna deschide magazinul in browser, de unde aplicatia tot nu ajunge pe
telefon).

Toate Login si Inregistrare duc la:
- Login: `https://app.revizie.ro/login`
- Register: `https://app.revizie.ro/register`

Cardurile features active duc direct in app:
- Anunturi masini: `https://app.revizie.ro/anunturi`
- Asigurari RCA: `https://app.revizie.ro/asigurari/rca`
- Istoric VIN: `https://app.revizie.ro` (carVertical via in-app card)

## Update tema dupa schimbari

Cand modifici fisiere pe local + push pe main:

⚠️ **In practica, singura cale e FTP.** Butonul cPanel „Deploy HEAD" nu e
accesibil, iar contul FTP vede doar folderul temei. Credentialele si comenzile
gata de folosit: `secrets/README.md`, sectiunea „FTP tema WordPress".
**Nu exista staging: upload = LIVE pe revizie.ro.**

Inainte sa suprascrii un fisier, descarca-l si compara-l cu `git show HEAD:<fisier>`
— pe server pot fi modificari care nu sunt in repo. Dupa upload: `revizie.ro` = 200,
fara „Fatal error" / „Parse error".

Variantele de mai jos raman documentate pentru cand se schimba gazduirea:
   - **cPanel Git Version Control** (daca e setat): trigger automat la push
   - **Manual**: ssh → `cd /var/www/wp-content/themes/<tema> && git pull`
   - **FTP**: re-upload fisierele schimbate
2. WP Admin → Themes → vezi noua versiune. Tema se refresheaza automat la urmatoarea cerere.

**Cache busting**: bump `Version: X.Y.Z` in `style.css` + constanta `REVIZIE_THEME_VERSION` in `functions.php` la fiecare release vizibil. Forteaza re-descarcarea CSS-urilor.

## Structura fisiere

```
revizie-wordpress/
├── style.css              # Meta tema + import stiluri
├── functions.php          # Functii tema, enqueue, Tailwind config, waitlist AJAX
├── header.php             # Header comun (logo + nav + Login/Register)
├── footer.php             # Footer comun (links + ANPC + Netopia)
├── index.php              # Template default
├── page.php               # Template pagina default
├── front-page.php         # Homepage
├── page-descarca.php      # Pagina de descarcare (vezi sectiunea dedicata)
├── page-intrebari-frecvente.php
├── page-home-preview.php  # Sablon de proba pentru redesign; fara pagina WP, deci inaccesibil
├── page-despre-noi.php
├── page-cum-functioneaza.php
├── page-pentru-parteneri.php
├── page-termeni-si-conditii.php
├── page-politica-de-confidentialitate.php
├── page-politica-cookies.php
├── inc/
│   ├── carvertical.php    # Config + revizie_carvertical_url() (partajat cu web + mobil)
│   ├── carvertical-asset.php
│   └── logo-data.php
├── assets/
│   ├── css/main.css       # Gradients + prose + scrollbar
│   ├── img/logo.png       # Logo placeholder
│   └── img/qr-descarca.svg # Cod QR spre /descarca?sursa=qr (generat, nu-l edita de mana)
└── functii/
    ├── page-garaj-digital.php   # Live
    ├── page-remindere.php       # Live
    ├── page-servicii-auto.php   # Coming Soon + waitlist
    ├── page-tractari.php        # Coming Soon + waitlist
    ├── page-anvelope.php        # Coming Soon + waitlist
    └── page-piese-auto.php      # Coming Soon + waitlist
```

## Contact

Pentru probleme tehnice: office@revizie.ro
