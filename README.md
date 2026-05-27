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

Creeaza urmatoarele pagini si atribuie template-ul corespunzator din **Page Attributes → Template**:

| Titlu pagina | Slug (URL) | Template |
|--------------|------------|----------|
| Acasa | `/` (front page) | Home Page |
| Despre Noi | `despre-noi` | Despre Noi |
| Cum Functioneaza | `cum-functioneaza` | Cum Functioneaza |
| Pentru Parteneri | `pentru-parteneri` | Pentru Parteneri |
| Termeni si Conditii | `termeni-si-conditii` | Termeni si Conditii |
| Politica de Confidentialitate | `politica-de-confidentialitate` | Politica de Confidentialitate |
| Politica Cookies | `politica-cookies` | Politica Cookies |
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

## Link-uri aplicatie

Toate Login si Inregistrare duc la:
- Login: `https://app.revizie.ro/login`
- Register: `https://app.revizie.ro/register`

Cardurile features active duc direct in app:
- Anunturi masini: `https://app.revizie.ro/anunturi`
- Asigurari RCA: `https://app.revizie.ro/asigurari/rca`
- Istoric VIN: `https://app.revizie.ro` (carVertical via in-app card)

## Update tema dupa schimbari

Cand modifici fisiere pe local + push pe main:

1. Pe Romarg, fie:
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
├── page-despre-noi.php
├── page-cum-functioneaza.php
├── page-pentru-parteneri.php
├── page-termeni-si-conditii.php
├── page-politica-de-confidentialitate.php
├── page-politica-cookies.php
├── assets/
│   ├── css/main.css       # Gradients + prose + scrollbar
│   └── img/logo.png       # Logo placeholder
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
