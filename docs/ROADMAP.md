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

```text
blog/
```

Responsabilités :

- design ;
- templates ;
- styles ;
- responsive ;
- composants ;
- patterns ;
- affichage du portfolio.

## Plugin

```text
portfolio-core/
```

Responsabilités :

- Custom Post Type Projet ;
- taxonomies ;
- champs SCF ;
- logique métier.

---

# Phases de développement

## ✅ Phase 1 — Fondations

Objectif : mettre en place une architecture propre et maintenable.

### Tâches

- [x] Initialisation Git
- [x] Dépôt GitHub
- [x] Structure du thème
- [x] Templates principaux
- [x] Organisation des assets
- [x] Dossier `inc`
- [x] README
- [x] ROADMAP
- [x] `.editorconfig`
- [x] Nettoyage de `theme.json`
- [x] Chargement CSS et JavaScript
- [x] Nettoyage de `functions.php`

---

## ✅ Phase 2 — Design System

Objectif : créer une identité graphique cohérente.

### Tâches

- [x] Palette de couleurs
- [x] Typographie
- [x] Polices locales
- [x] Espacements
- [x] Largeurs de contenu
- [x] Boutons
- [x] Liens
- [x] Formulaires
- [x] Cartes
- [x] Badges et catégories
- [x] Métadonnées
- [x] Pagination
- [x] Icônes de réseaux sociaux
- [ ] Traitement global des images

---

## ✅ Phase 3 — Structure du site

### Header

- [x] Titre du site
- [x] Navigation principale
- [x] Menu responsive
- [x] Réseaux sociaux
- [x] État du lien actif
- [x] Focus clavier
- [x] Ombre et finitions
- [x] Breakpoint du menu burger
- [x] Pas de bouton de recherche

### Footer

- [x] Identité
- [x] Navigation secondaire
- [x] Ressources
- [x] Contact
- [x] Réseaux sociaux
- [x] Copyright
- [x] Responsive

---

## ✅ Phase 4 — Blog

### Modèles

- [x] `home.html` — page principale du blog
- [x] `single.html` — article individuel
- [x] `archive.html` — archives
- [x] `search.html` — résultats de recherche
- [x] `404.html` — page introuvable

### Articles

- [x] Métadonnées
- [x] Catégories
- [x] Image mise en avant
- [x] Temps de lecture
- [x] Navigation entre articles
- [x] Commentaires
- [x] Pagination
- [x] Grille responsive
- [x] Barre de catégories parentes sur la page Blog

### Amélioration prévue

- [ ] Filtrage dynamique des articles par catégorie
- [ ] Chargement AJAX ou solution interactive équivalente
- [ ] Mise à jour de l'URL et gestion du bouton Retour
- [ ] État de chargement et gestion des erreurs

---

## ⏳ Phase 5 — Patterns

Objectif : créer des compositions de blocs réutilisables.

### Patterns prévus

- [ ] Hero
- [ ] Présentation
- [ ] Services / compétences
- [ ] Derniers articles
- [ ] Appel à l'action
- [ ] Contact

---

## Phase 6 — Pages générales

- [ ] Finaliser `page.html`
- [ ] Finaliser `front-page.html`
- [ ] Concevoir la page d'accueil
- [ ] Concevoir la page Contact
- [ ] Mentions légales
- [ ] Politique de confidentialité
- [ ] Plan du site

---

## Phase 7 — Plugin Portfolio

Création du plugin :

```text
portfolio-core/
```

### Fonctionnalités

- [ ] Custom Post Type Projet
- [ ] Taxonomie Type de projet
- [ ] Taxonomie Technologies
- [ ] Champs SCF
- [ ] Organisation du plugin
- [ ] Séparation claire entre logique métier et présentation

---

## Phase 8 — Portfolio

### Templates

- [ ] Archive Projet
- [ ] Single Projet

### Fonctionnalités

- [ ] Grille
- [ ] Filtres
- [ ] Galerie
- [ ] Technologies
- [ ] Projet suivant / précédent
- [ ] Responsive
- [ ] État vide

---

## Phase 9 — Responsive global

- [ ] Audit mobile
- [ ] Audit tablette
- [ ] Audit desktop
- [ ] Vérification des grands écrans
- [ ] Vérification des espacements et largeurs
- [ ] Vérification des menus et formulaires

---

## Phase 10 — Optimisation

- [ ] Accessibilité
- [ ] Performance
- [ ] SEO
- [ ] Nettoyage CSS
- [ ] Nettoyage JavaScript
- [ ] Optimisation des images
- [ ] Vérification du chargement des assets
- [ ] Vérification des contrastes
- [ ] Tests clavier

---

## Phase 11 — Version 1.0

### Vérifications

- [ ] Tests complets
- [ ] Documentation finale
- [ ] Nettoyage du dépôt
- [ ] Release GitHub
- [ ] Tag `v1.0.0`

---

# Prochaines étapes recommandées

1. Créer les premiers Patterns du thème.
2. Finaliser les modèles généraux `page.html` et `front-page.html`.
3. Concevoir la page d'accueil.
4. Créer le plugin `portfolio-core`.
5. Développer les templates du portfolio.
6. Ajouter le filtrage dynamique du blog et du portfolio.
7. Réaliser l'audit responsive et accessibilité global.

---

# Conventions de développement

## Git

Chaque fonctionnalité importante est développée dans une branche dédiée et fait l'objet de commits ciblés.

Exemples :

```text
Crée la page principale du blog
Crée le modèle des articles
Crée le modèle des archives
Crée les pages système de recherche et 404
```

Workflow recommandé :

```text
main
└── feature/nom-de-la-fonctionnalite
```

Une fois la fonctionnalité validée :

1. commit ;
2. push ;
3. fusion dans `main` ;
4. suppression de la branche devenue inutile.

## PHP

- Respect des WordPress Coding Standards
- Une responsabilité par fichier
- Fonctions documentées
- Logique métier indépendante du thème lorsque nécessaire

## CSS

Organisation actuelle :

```text
assets/css/
├── base.css
├── fonts.css
├── layout.css
└── components/
    ├── badges.css
    ├── buttons.css
    ├── cards.css
    ├── footer.css
    ├── forms.css
    ├── header.css
    ├── hero.css
    ├── metadata.css
    ├── navigation.css
    └── pagination.css
```

Les styles globaux doivent être privilégiés dans `theme.json` lorsque cela est pertinent.

## JavaScript

Le JavaScript doit rester léger.

Aucune bibliothèque externe ne sera ajoutée sans justification.

Les fonctionnalités interactives doivent conserver, lorsque cela est possible, un fonctionnement de base sans JavaScript.

---

# Idées futures

- Mode sombre
- Recherche instantanée
- Filtrage AJAX du blog
- Portfolio filtrable
- Animations légères
- Support multilingue
- Export du thème sur WordPress.org

---

# Historique indicatif

| Version | Description |
|----------|-------------|
| 0.1 | Initialisation du projet |
| 0.2 | Architecture du thème |
| 0.3 | Design System |
| 0.4 | Header / Footer |
| 0.5 | Blog et pages système |
| 0.6 | Patterns et pages générales |
| 0.7 | Portfolio |
| 0.8 | Responsive et optimisations |
| 0.9 | Pré-release |
| 1.0 | Première version stable |
