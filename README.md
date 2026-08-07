# Blog

Thème WordPress personnalisé développé avec les **Block Themes** (Full Site Editing), destiné à un blog personnel et à un portfolio professionnel.

## Technologies

- WordPress
- PHP 8.x
- HTML (Block Templates)
- CSS
- JavaScript
- Git & GitHub
- SCF (Secure Custom Fields) pour le futur plugin Portfolio

---

## Fonctionnalités actuelles

- thème de blocs WordPress ;
- design system personnalisé ;
- polices locales General Sans et Khand ;
- header responsive avec navigation et réseaux sociaux ;
- footer responsive ;
- page principale du blog ;
- archives ;
- affichage des articles ;
- catégories et métadonnées ;
- commentaires ;
- pagination ;
- recherche avec état sans résultat ;
- page 404 ;
- composants CSS organisés par domaine.

---

## Structure du projet

```text
blog/
├── assets/
│   ├── css/
│   │   ├── components/
│   │   │   ├── badges.css
│   │   │   ├── buttons.css
│   │   │   ├── cards.css
│   │   │   ├── footer.css
│   │   │   ├── forms.css
│   │   │   ├── header.css
│   │   │   ├── hero.css
│   │   │   ├── metadata.css
│   │   │   ├── navigation.css
│   │   │   └── pagination.css
│   │   ├── base.css
│   │   ├── fonts.css
│   │   └── layout.css
│   ├── fonts/
│   │   ├── general-sans/
│   │   └── khand/
│   ├── images/
│   └── js/
│       └── main.js
├── inc/
│   └── enqueue.php
├── parts/
│   ├── footer.html
│   └── header.html
├── patterns/
├── styles/
├── templates/
│   ├── 404.html
│   ├── archive.html
│   ├── front-page.html
│   ├── home.html
│   ├── index.html
│   ├── page.html
│   ├── search.html
│   └── single.html
├── .editorconfig
├── .gitignore
├── functions.php
├── README.md
├── ROADMAP.md
├── style.css
└── theme.json
```

---

## Description des dossiers

| Dossier / Fichier | Description |
|-------------------|-------------|
| `templates/` | Modèles principaux du thème : accueil, page, blog, article, archive, recherche et 404. |
| `parts/` | Parties de modèles réutilisables : header et footer. |
| `patterns/` | Compositions de blocs réutilisables dans l'éditeur. |
| `styles/` | Variations de styles du thème. |
| `assets/css/` | Styles globaux et composants CSS du thème. |
| `assets/css/components/` | Styles spécialisés : cartes, navigation, formulaires, métadonnées, pagination, etc. |
| `assets/js/` | Scripts JavaScript publics du thème. |
| `assets/fonts/` | Polices locales utilisées par le design system. |
| `assets/images/` | Images propres au thème. |
| `inc/` | Fonctions PHP organisées par domaine. |
| `functions.php` | Point d'entrée PHP du thème. |
| `theme.json` | Configuration globale : couleurs, typographie, espacements, largeurs et styles des blocs. |
| `style.css` | Métadonnées du thème et feuille de style principale WordPress. |
| `ROADMAP.md` | Plan de développement du thème et du futur plugin Portfolio. |

---

## Modèles disponibles

### `home.html`

Page principale du blog avec :

- grille responsive ;
- cartes d'articles ;
- catégories parentes ;
- pagination.

### `single.html`

Affichage d'un article avec :

- catégories ;
- titre ;
- date ;
- temps de lecture ;
- image mise en avant ;
- contenu ;
- navigation entre articles ;
- commentaires.

### `archive.html`

Affichage des archives WordPress avec titre et description dynamiques.

### `search.html`

Affichage des résultats de recherche et gestion du cas sans résultat.

### `404.html`

Page d'erreur avec retour à l'accueil et recherche.

---

## Installation

1. Copier le dossier `blog` dans :

```text
wp-content/themes/
```

2. Activer le thème depuis :

```text
Apparence → Thèmes
```

---

## Développement

Le thème est développé localement avec :

- Local ;
- Visual Studio Code ;
- Git ;
- GitHub.

Le développement suit un workflow par branches :

```text
main
└── feature/nom-de-la-fonctionnalite
```

Chaque fonctionnalité est testée avant fusion dans `main`.

---

## Prochaines étapes

- créer les Patterns du thème ;
- finaliser les pages génériques et la page d'accueil ;
- créer le plugin `portfolio-core` ;
- ajouter le Custom Post Type Projet et les champs SCF ;
- créer les templates du portfolio ;
- ajouter les filtres dynamiques du blog et du portfolio ;
- réaliser les audits responsive, accessibilité, performance et SEO.

---

## Portfolio

La logique métier du portfolio sera séparée du thème dans un plugin dédié :

```text
portfolio-core/
```

Ce plugin aura pour responsabilités :

- Custom Post Type Projet ;
- taxonomies ;
- champs SCF ;
- logique métier.

Le thème conservera uniquement la responsabilité de l'affichage.

---

## Roadmap

Consulter [`ROADMAP.md`](ROADMAP.md) pour le détail des phases de développement.

---

## Auteur

Karim Khenifer
