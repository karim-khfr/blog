# Blog

Thème WordPress personnalisé développé avec les **Block Themes** (Full Site Editing).

## Technologies

- WordPress 6.x
- PHP 8.x
- HTML (Block Templates)
- CSS
- JavaScript
- Git & GitHub

---

## Structure du projet

```text
blog/
├── assets/
│   ├── css/
│   │   ├── base.css
│   │   ├── layout.css
│   │   └── components.css
│   ├── images/
│   └── js/
│       └── main.js
├── inc/
│   └── enqueue.php
├── parts/
│   ├── header.html
│   └── footer.html
├── patterns/
├── styles/
├── templates/
│   ├── 404.html
│   └── archive.html
│   └── front-page.html
│   └── home.html
│   └── index.html
│   └── page.html
│   └── search.html
│   └── single.html
├── .gitignore
├── functions.php
├── README.md
├── style.css
└── theme.json
```

---

## Description des dossiers

| Dossier / Fichier | Description |
|-------------------|-------------|
| `templates/` | Modèles de pages du thème (accueil, article, archive, recherche, etc.). |
| `parts/` | Éléments réutilisables (en-tête, pied de page…). |
| `patterns/` | Compositions de blocs réutilisables dans l'éditeur. |
| `styles/` | Variations de styles du thème. |
| `assets/css/` | Feuilles de style du thème. |
| `assets/js/` | Scripts JavaScript. |
| `assets/images/` | Images du thème. |
| `inc/` | Fonctions PHP organisées par domaine. |
| `functions.php` | Point d'entrée du thème. Charge les fichiers du dossier `inc/`. |
| `theme.json` | Configuration globale du thème (couleurs, typographie, espacements, styles des blocs…). |
| `style.css` | Déclaration du thème et styles principaux. |

---

## Développement

Le thème est développé localement avec :

- Local
- Visual Studio Code
- Git
- GitHub

---

## Auteur

Karim Khenifer