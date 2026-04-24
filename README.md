# Tema WordPress revizie.ro

Tema oficiala pentru site-ul de prezentare revizie.ro.

## Instalare

### Metoda 1: Upload folder

1. Conecteaza-te prin FTP sau File Manager la hosting (Romarg)
2. Navigheaza la: `public_html/wp-content/themes/`
3. Incarca intregul folder `revizie-theme/`
4. In WordPress Admin, mergi la **Appearance -> Themes**
5. Activeaza tema **Revizie.ro Theme**

### Metoda 2: Upload ZIP

1. Creeaza un ZIP al folderului `revizie-theme`
2. In WordPress Admin, mergi la **Appearance -> Themes -> Add New -> Upload Theme**
3. Selecteaza fisierul ZIP si instaleaza
4. Activeaza tema

## Configurare dupa activare

### 1. Adauga logo-ul

1. Mergi la **Appearance -> Customize -> Site Identity**
2. Click pe **Select Logo**
3. Incarca fisierul `logo.png` (din folderul temei sau al tau)
4. Salveaza

### 2. Creeaza paginile

Creeaza urmatoarele pagini in WordPress (**Pages -> Add New**) si atribuie template-ul corespunzator:

| Titlu Pagina | Slug (URL) | Template de selectat |
|--------------|------------|---------------------|
| Acasa | `/` (front page) | Home Page |
| Despre Noi | `despre-noi` | Despre Noi |
| Cum Functioneaza | `cum-functioneaza` | Cum Functioneaza |
| Pentru Parteneri | `pentru-parteneri` | Pentru Parteneri |
| Termeni si Conditii | `termeni-si-conditii` | Termeni si Conditii |
| Politica de Confidentialitate | `politica-de-confidentialitate` | Politica de Confidentialitate |
| Politica Cookies | `politica-cookies` | Politica Cookies |
| Garaj Digital | `functii/garaj-digital` | Functie - Garaj Digital |
| Servicii Auto | `functii/servicii-auto` | Functie - Servicii Auto |
| Anvelope | `functii/anvelope` | Functie - Anvelope |
| Tractari | `functii/tractari` | Functie - Tractari |
| Piese Auto | `functii/piese-auto` | Functie - Piese Auto |
| Reminder-e | `functii/remindere` | Functie - Remindere |

**Nota:** Pentru a atribui un template, cand editezi pagina, gasesti in partea dreapta (sau in bara laterala) optiunea **Page Attributes -> Template**.

### 3. Seteaza Homepage

1. Mergi la **Settings -> Reading**
2. La "Your homepage displays" selecteaza **A static page**
3. La "Homepage" selecteaza pagina **Acasa** (cu template Home Page)
4. Salveaza

### 4. Configureaza meniul (optional)

Daca vrei sa modifici meniul principal:

1. Mergi la **Appearance -> Menus**
2. Creeaza un meniu nou numit "Main Menu"
3. Adauga paginile dorite (Despre Noi, Cum Functioneaza, Pentru Parteneri)
4. La "Menu Settings" selecteaza locatia **Main Menu**
5. Salveaza

**Nota:** Daca nu configurezi meniul, se va folosi automat meniul hardcodat din tema cu link-urile corecte.

## Structura fisiere

```
revizie-theme/
├── style.css              # Meta tema + import stiluri
├── functions.php          # Functii tema, enqueue, meniu
├── header.php             # Header comun
├── footer.php             # Footer comun
├── index.php              # Template default
├── page.php               # Template pagina default
├── front-page.php         # Homepage (acasa)
├── page-despre-noi.php    # Despre Noi
├── page-cum-functioneaza.php
├── page-pentru-parteneri.php
├── page-termeni-si-conditii.php
├── page-politica-de-confidentialitate.php
├── page-politica-cookies.php
├── assets/
│   ├── css/
│   │   └── main.css       # Stiluri principale
│   └── img/
│       └── logo.png       # Logo (placeholder)
└── functii/
    ├── page-garaj-digital.php
    ├── page-servicii-auto.php
    ├── page-anvelope.php
    ├── page-tractari.php
    ├── page-piese-auto.php
    └── page-remindere.php
```

## Link-uri aplicatie

Toate link-urile de Login si Inregistrare duc catre:
- Login: `https://app.revizie.ro/login`
- Register: `https://app.revizie.ro/register`

## Contact

Pentru probleme tehnice: contact@revizie.ro
