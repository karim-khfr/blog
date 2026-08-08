# ROADMAP — Thème WordPress Blog

## Vision

Créer un thème WordPress Block/FSE moderne pour un blog personnel et un portfolio professionnel, avec une architecture maintenable et une séparation nette entre présentation (thème) et logique métier (plugin Portfolio).

## ✅ Phase 1 — Fondations
- [x] Git et dépôt GitHub
- [x] Structure du thème
- [x] Templates de base
- [x] Assets
- [x] `inc/`
- [x] `theme.json`
- [x] chargement CSS/JS
- [x] documentation initiale

## ✅ Phase 2 — Design System
- [x] couleurs
- [x] typographie
- [x] polices locales
- [x] espacements
- [x] largeurs
- [x] boutons
- [x] liens
- [x] formulaires
- [x] cartes
- [x] badges/catégories
- [x] métadonnées
- [x] pagination
- [x] réseaux sociaux
- [ ] traitement global des images

## ✅ Phase 3 — Structure globale

### Header
- [x] identité
- [x] navigation
- [x] responsive
- [x] réseaux sociaux
- [x] focus clavier
- [x] finitions

### Footer
- [x] identité
- [x] navigation
- [x] ressources
- [x] contact
- [x] réseaux sociaux
- [x] copyright
- [x] responsive

## ✅ Phase 4 — Blog et pages système
- [x] `home.html`
- [x] `single.html`
- [x] `archive.html`
- [x] `search.html`
- [x] `404.html`
- [x] cartes et grille responsive
- [x] catégories
- [x] métadonnées
- [x] image mise en avant
- [x] temps de lecture
- [x] navigation entre articles
- [x] commentaires
- [x] pagination
- [x] retour vers le blog depuis un article
- [x] état sans résultat

### Reporté
- [ ] filtrage dynamique des articles
- [ ] mise à jour URL/historique
- [ ] état de chargement/erreurs

## ✅ Phase 5 — Patterns et page d'accueil

### Patterns
- [x] Hero principal
- [x] Présentation
- [x] Derniers articles
- [x] Appel à l'action
- [x] Contact

Les patterns sont enregistrés explicitement dans `inc/patterns.php`.

### Page d'accueil
- [x] test des patterns ensemble dans l'Éditeur du site
- [x] valider l'enchaînement visuel global
- [x] finaliser `front-page.html`
- [x] vérifier responsive de la page d'accueil
- [x] finaliser `page.html`
- [x] élargir le modèle de page générique par rapport aux articles
- [x] corriger le hover des boutons principaux
- [x] corriger le débordement des cartes qui interceptait le CTA
- [x] sauvegarder proprement les modifications dans les fichiers du thème
- [x] commit et fusion

## ✅ Phase 6 — Plugin `portfolio-core`

### Structure et dépôt
- [x] créer le plugin
- [x] créer un dépôt Git indépendant
- [x] organiser `portfolio-core.php` et `inc/`
- [x] séparation logique métier / présentation

### CPT Projet
- [x] CPT `project`
- [x] interface d'administration
- [x] Gutenberg
- [x] REST
- [x] archive `/portfolio/`
- [x] URL individuelle `/portfolio/nom-du-projet/`
- [x] image mise en avant
- [x] extrait
- [x] révisions

### Taxonomies
- [x] taxonomie Type de projet
- [x] taxonomie Technologies
- [x] intégration dans Gutenberg
- [x] colonnes d'administration

### Champs SCF
- [x] année
- [x] statut
- [x] rôle
- [x] client / organisation
- [x] URL du projet
- [x] URL du dépôt
- [x] champs facultatifs lorsque pertinent
- [x] définition versionnée dans le plugin

### Cycle de vie du plugin
- [x] flush des règles de réécriture à l'activation
- [x] flush à la désactivation
- [x] test désactivation / réactivation
- [x] fusion de la branche fonctionnelle dans `main`

## 🟡 Phase 7 — Portfolio

### Templates
- [ ] `archive-project.html`
- [ ] `single-project.html`

### Archive Projet
- [ ] en-tête de portfolio
- [ ] grille des projets
- [ ] image mise en avant
- [ ] type de projet
- [ ] technologies utiles
- [ ] extrait
- [ ] état vide
- [ ] pagination si nécessaire

### Projet individuel
- [ ] lien « Retour au portfolio »
- [ ] titre
- [ ] image mise en avant
- [ ] type de projet
- [ ] technologies
- [ ] année
- [ ] statut
- [ ] rôle
- [ ] client / organisation si renseigné
- [ ] URL du projet si renseignée
- [ ] URL du dépôt si renseignée
- [ ] contenu Gutenberg
- [ ] projet précédent / suivant

### Responsive
- [ ] mobile
- [ ] tablette
- [ ] desktop / grands écrans

### À décider pendant la phase
- [ ] galerie éventuelle
- [ ] filtres du portfolio
- [ ] pagination ou chargement alternatif
- [ ] présentation des champs facultatifs

## Phase 8 — Interactivité

### Blog
- [ ] filtrage dynamique par catégorie
- [ ] URL et bouton Retour
- [ ] chargement/erreurs

### Portfolio
- [ ] filtrage dynamique si pertinent
- [ ] mise à jour URL/historique si filtres
- [ ] états de chargement/erreurs si nécessaire

## Phase 9 — Pages générales
- [ ] Contact définitif
- [ ] Mentions légales
- [ ] Politique de confidentialité
- [ ] Plan du site

## Phase 10 — Audit global
- [ ] mobile
- [ ] tablette
- [ ] desktop/grands écrans
- [ ] accessibilité
- [ ] navigation clavier
- [ ] contrastes
- [ ] performance
- [ ] SEO
- [ ] optimisation images
- [ ] traitement global des images
- [ ] nettoyage CSS
- [ ] nettoyage JavaScript
- [ ] vérification des assets

## Phase 11 — Version 1.0
- [ ] tests complets
- [ ] documentation finale
- [ ] nettoyage du dépôt
- [ ] release GitHub
- [ ] tag `v1.0.0`

## Prochaine action

Démarrer la Phase 7 dans le dépôt du thème sur la branche :

```text
feature/portfolio
```

Commencer par `archive-project.html`, puis construire `single-project.html` en réutilisant le design system et les composants déjà validés.
