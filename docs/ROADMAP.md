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
- [x] sauvegarder proprement les modifications dans les fichiers du thème
- [x] commit et fusion

## 🟡 Phase 6 — Plugin `portfolio-core`
- [ ] créer le plugin
- [ ] CPT Projet
- [ ] taxonomie Type de projet
- [ ] taxonomie Technologies
- [ ] champs SCF
- [ ] organisation du plugin
- [ ] séparation logique métier / présentation

## Phase 7 — Portfolio
- [ ] archive Projet
- [ ] single Projet
- [ ] grille
- [ ] filtres
- [ ] galerie
- [ ] technologies
- [ ] projet suivant/précédent
- [ ] responsive
- [ ] état vide

## Phase 8 — Interactivité
### Blog
- [ ] filtrage dynamique par catégorie
- [ ] URL et bouton Retour
- [ ] chargement/erreurs

### Portfolio
- [ ] filtrage dynamique si pertinent

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

Démarrer la Phase 6 : créer une branche dédiée au développement de `portfolio-core`, définir la structure minimale du plugin, puis enregistrer le CPT Projet et ses taxonomies avant l’intégration des champs SCF.
