# Roadmap - Thème WordPress Blog

## Vision du projet

Créer un thème WordPress moderne, basé sur les Block Themes (Full Site Editing), destiné à alimenter un blog personnel et un portfolio professionnel.

Le thème doit être :

- simple à maintenir ;
- performant ;
- responsive ;
- accessible ;
- évolutif ;
- conforme aux bonnes pratiques WordPress.

---

# Objectifs fonctionnels

Le thème devra permettre :

- la création de pages ;
- la publication d'articles ;
- la création d'un header personnalisable ;
- la création d'un footer personnalisable ;
- la gestion d'un portfolio de projets ;
- l'utilisation de compositions de blocs (Patterns) ;
- plusieurs variantes graphiques (Styles) ;
- une personnalisation complète via l'Éditeur du site.

Les projets seront gérés par un plugin indépendant utilisant SCF (Secure Custom Fields).

---

# Architecture

## Thème

```
blog/
```

Responsabilités :

- design
- templates
- styles
- responsive
- composants
- patterns
- affichage du portfolio

---

## Plugin

```
portfolio-core/
```

Responsabilités :

- Custom Post Type Projet
- Taxonomies
- Champs SCF
- Logique métier

---

# Phases de développement

## ✅ Phase 1 — Fondations

Objectif :

Mettre en place une architecture propre et maintenable.

### Tâches

- [x] Initialisation Git
- [x] Dépôt GitHub
- [x] Structure du thème
- [x] Templates principaux
- [x] Organisation des assets
- [x] Dossier `inc`
- [x] README
- [x] ROADMAP
- [ ] .editorconfig
- [ ] Nettoyage final de `theme.json`

---

## ⏳ Phase 2 — Design System

Objectif :

Créer une identité graphique cohérente.

### À réaliser

- [ ] Palette de couleurs
- [ ] Typographie
- [ ] Espacements
- [ ] Largeurs de contenu
- [ ] Boutons
- [ ] Liens
- [ ] Formulaires
- [ ] Images
- [ ] Cartes
- [ ] Icônes

---

## Phase 3 — Structure du site

### Header

- [ ] Logo
- [ ] Navigation
- [ ] Menu responsive
- [ ] Bouton CTA

### Footer

- [ ] Navigation secondaire
- [ ] Réseaux sociaux
- [ ] Mentions légales
- [ ] Copyright

---

## Phase 4 — Blog

### Pages

- [ ] Accueil
- [ ] Articles
- [ ] Archives
- [ ] Recherche
- [ ] 404

### Articles

- [ ] Métadonnées
- [ ] Catégories
- [ ] Image mise en avant
- [ ] Navigation entre articles
- [ ] Pagination

---

## Phase 5 — Patterns

Création de compositions de blocs.

- [ ] Hero
- [ ] Présentation
- [ ] Services
- [ ] Derniers articles
- [ ] Appel à l'action
- [ ] Contact

---

## Phase 6 — Plugin Portfolio

Création du plugin :

```
portfolio-core
```

Fonctionnalités :

- [ ] Custom Post Type Projet
- [ ] Taxonomie Type de projet
- [ ] Taxonomie Technologies
- [ ] Champs SCF

---

## Phase 7 — Portfolio

Templates :

- [ ] Archive Projet
- [ ] Single Projet

Fonctionnalités :

- [ ] Grille
- [ ] Filtres
- [ ] Galerie
- [ ] Technologies
- [ ] Projet suivant / précédent

---

## Phase 8 — Responsive

- [ ] Mobile
- [ ] Tablette
- [ ] Desktop

---

## Phase 9 — Optimisation

- [ ] Accessibilité
- [ ] Performance
- [ ] SEO
- [ ] Nettoyage CSS
- [ ] Nettoyage JavaScript
- [ ] Optimisation des images

---

## Phase 10 — Version 1.0

### Vérifications

- [ ] Tests complets
- [ ] Documentation
- [ ] Release GitHub
- [ ] Tag v1.0.0

---

# Conventions de développement

## Git

Chaque fonctionnalité fait l'objet d'un commit dédié.

Exemple :

```
Ajoute le header
Améliore le template des articles
Ajoute les patterns Hero
Corrige le responsive du footer
```

---

## PHP

- Respect des WordPress Coding Standards
- Une responsabilité par fichier
- Fonctions documentées

---

## CSS

Organisation :

```
base.css
layout.css
components.css
```

Les styles globaux doivent être privilégiés dans `theme.json`.

---

## JavaScript

Le JavaScript doit rester léger.

Aucune bibliothèque externe ne sera ajoutée sans justification.

---

# Idées futures

- Mode sombre
- Recherche instantanée
- Portfolio filtrable en AJAX
- Animations légères
- Support multilingue
- Export du thème sur WordPress.org

---

# Historique

| Version | Description |
|----------|-------------|
| 0.1 | Initialisation du projet |
| 0.2 | Architecture du thème |
| 0.3 | Design System |
| 0.4 | Header / Footer |
| 0.5 | Blog |
| 0.6 | Portfolio |
| 0.7 | Responsive |
| 0.8 | Optimisations |
| 0.9 | Pré-release |
| 1.0 | Première version stable |