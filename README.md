# Blog

Thème WordPress personnalisé basé sur les **Block Themes / Full Site Editing**, destiné à un blog personnel et à un futur portfolio professionnel.

## Technologies

- WordPress
- PHP 8.x
- Block Templates HTML
- CSS
- JavaScript
- Git / GitHub
- SCF (Secure Custom Fields), prévu pour le futur plugin Portfolio

## Fonctionnalités actuelles

- design system personnalisé ;
- polices locales General Sans et Khand ;
- header et footer responsive ;
- page principale du blog ;
- article individuel ;
- archives ;
- recherche et état sans résultat ;
- page 404 ;
- catégories et métadonnées ;
- commentaires ;
- pagination ;
- cartes d'articles responsive ;
- patterns réutilisables ;
- page d’accueil finalisée à partir des cinq patterns ;
- modèle de page générique élargi et distinct de la largeur éditoriale des articles ;
- responsive de la page d’accueil validé sur desktop, tablette et mobile.

## Patterns disponibles

Les patterns sont actuellement enregistrés dans `inc/patterns.php`.

- Hero principal
- Présentation
- Derniers articles
- Appel à l'action
- Contact

## Structure principale

```text
blog/
├── assets/
│   ├── css/
│   │   ├── components/
│   │   │   ├── badges.css
│   │   │   ├── buttons.css
│   │   │   ├── cards.css
│   │   │   ├── contact.css
│   │   │   ├── cta.css
│   │   │   ├── footer.css
│   │   │   ├── forms.css
│   │   │   ├── header.css
│   │   │   ├── hero.css
│   │   │   ├── metadata.css
│   │   │   ├── navigation.css
│   │   │   ├── pagination.css
│   │   │   └── presentation.css
│   │   ├── base.css
│   │   ├── fonts.css
│   │   └── layout.css
│   ├── fonts/
│   ├── images/
│   └── js/
│       └── main.js
├── inc/
│   ├── enqueue.php
│   └── patterns.php
├── parts/
│   ├── footer.html
│   └── header.html
├── templates/
│   ├── 404.html
│   ├── archive.html
│   ├── front-page.html
│   ├── home.html
│   ├── index.html
│   ├── page.html
│   ├── search.html
│   └── single.html
├── functions.php
├── README.md
├── ROADMAP.md
├── style.css
└── theme.json
```

Il n'existe actuellement pas de `assets/css/utilities.css`.

## Architecture

Le thème est responsable de la présentation.

La logique métier du portfolio sera placée dans un plugin indépendant :

```text
portfolio-core/
```

Le plugin gérera notamment :
- CPT Projet ;
- taxonomies ;
- champs SCF ;
- logique métier.

## Développement

Workflow Git :

```text
main
└── feature/nom-de-la-fonctionnalite
```

La phase `feature/patterns` est terminée et fusionnée dans `main`.

La prochaine phase de développement sera consacrée au plugin :

```text
portfolio-core
```

Chaque fonctionnalité est testée et commitée avant fusion dans `main`.

## Create Block Theme

L'extension **Create Block Theme** est installée comme outil de développement. Elle peut aider à transférer certaines modifications réalisées dans l'Éditeur du site vers les fichiers du thème.

Les fichiers locaux versionnés avec Git restent cependant la source de vérité.

## Prochaine étape

La phase Patterns et page d’accueil est terminée et fusionnée dans `main`.

Prochaine étape : démarrer la Phase 6 et créer le plugin `portfolio-core`, avec une séparation stricte entre logique métier et présentation.

Ensuite :
1. enregistrer le CPT Projet ;
2. créer les taxonomies Type de projet et Technologies ;
3. intégrer les champs SCF ;
4. développer les templates Portfolio dans le thème ;
5. ajouter l’interactivité et réaliser l’audit global ;
6. préparer la version 1.0.

Consulter `ROADMAP.md` et `CONTEXTE.md` pour le détail.
