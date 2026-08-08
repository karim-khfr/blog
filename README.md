# Blog

Thème WordPress personnalisé basé sur les **Block Themes / Full Site Editing**, destiné à un blog personnel et à un portfolio professionnel.

## Technologies

- WordPress
- PHP 8.x
- Block Templates HTML
- CSS
- JavaScript
- Git / GitHub
- SCF (Secure Custom Fields)
- plugin personnalisé `portfolio-core`

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
- responsive de la page d’accueil validé sur desktop, tablette et mobile ;
- prise en charge du portfolio via le plugin indépendant `portfolio-core`.

## Patterns disponibles

Les patterns sont enregistrés explicitement dans `inc/patterns.php`.

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
├── docs/
│   └── ROADMAP.md
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
├── screenshot.png
├── style.css
└── theme.json
```

## Architecture

Le thème est responsable de la présentation : templates, styles, responsive, patterns et affichage du portfolio.

La logique métier du portfolio est placée dans un plugin indépendant :

```text
portfolio-core/
```

Le plugin gère notamment :

- CPT `project` / Projet ;
- taxonomie `project_type` / Type de projet ;
- taxonomie `project_technology` / Technologies ;
- champs SCF du projet ;
- règles de réécriture et cycle d'activation du plugin.

Cette séparation permet au contenu du portfolio de rester indépendant du thème actif.

## Développement

Workflow Git du thème :

```text
main
└── feature/nom-de-la-fonctionnalite
```

La phase `feature/patterns` est terminée et fusionnée dans `main`.

Le plugin `portfolio-core` possède son propre dépôt Git. Son socle fonctionnel est terminé et fusionné dans sa branche `main`. Lien vers le dépôt Github du plugin : https://github.com/karim-khfr/portfolio-core

La prochaine branche de travail du thème est :

```text
feature/portfolio
```

Chaque fonctionnalité est testée et commitée avant fusion dans `main`.

## Create Block Theme

L'extension **Create Block Theme** est installée comme outil de développement. Elle peut aider à transférer certaines modifications réalisées dans l'Éditeur du site vers les fichiers du thème.

Les fichiers locaux versionnés avec Git restent cependant la source de vérité.

## État du plugin `portfolio-core`

Le plugin est installé et activé dans l'environnement local.

Fonctionnalités validées :

- CPT Projet ;
- Gutenberg / REST ;
- archive publique `/portfolio/` ;
- URLs individuelles `/portfolio/nom-du-projet/` ;
- taxonomie Type de projet ;
- taxonomie Technologies ;
- champs SCF : année, statut, rôle, client / organisation, URL du projet, URL du dépôt ;
- flush des règles de réécriture à l'activation et à la désactivation.

Les champs Client / organisation, URL du projet et URL du dépôt peuvent rester vides.

## Prochaine étape

La Phase 6 — `portfolio-core` — est terminée.

La prochaine étape est la **Phase 7 — Portfolio** dans le thème, sur la branche :

```text
feature/portfolio
```

Priorités :

1. créer `archive-project.html` ;
2. créer `single-project.html` ;
3. construire la grille des projets ;
4. afficher les taxonomies et champs utiles ;
5. gérer la navigation entre projets ;
6. vérifier le responsive et l'état vide.

Consulter [`docs/ROADMAP.md`](docs/ROADMAP.md) pour le détail.
