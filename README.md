# API de Gestion de Location de Véhicules

Ce projet consiste à développer une API REST robuste et sécurisée avec Laravel, destinée à faciliter la gestion des locations de véhicules pour les entreprises de mobilité.

## Contexte du Projet

Dans le secteur en pleine expansion de la mobilité, les services de location de véhicules nécessitent des solutions numériques efficaces pour automatiser et simplifier la gestion. Cette API vise à répondre à ce besoin en fournissant une interface pour les applications mobiles et web.

## Objectifs d'Apprentissage

* Créer une API RESTful avec Laravel.
* Mettre en place une architecture Laravel adaptée aux API.
* Gérer l'authentification et l'autorisation avec Laravel Sanctum.
* Manipuler les requêtes CRUD avec Eloquent ORM.
* Assurer la validation des données et la gestion des erreurs.
* Implémenter la pagination et la gestion des filtres.
* Rédiger une documentation API avec Swagger (Laravel OpenAPI).
* Tester les endpoints avec Postman.

## Technologies Utilisées

* Laravel
* Laravel Sanctum
* Eloquent ORM
* Swagger (Laravel OpenAPI)
* Postman
* MySQL (ou autre base de données compatible)
* Git / GitHub

## Prérequis

* PHP >= 8.0
* Composer
* Node.js et npm (si vous utilisez des assets front-end)
* Une base de données (MySQL, PostgreSQL, etc.)

## Installation

1.  Clonez le dépôt :

    ```bash
    git clone <URL_DU_DÉPÔT>
    cd <NOM_DU_PROJET>
    ```

2.  Installez les dépendances Composer :

    ```bash
    composer install
    ```

3.  Copiez le fichier `.env.example` en `.env` et configurez les paramètres de la base de données :

    ```bash
    cp .env.example .env
    ```

4.  Générez la clé d'application :

    ```bash
    php artisan key:generate
    ```

5.  Effectuez les migrations de la base de données :

    ```bash
    php artisan migrate
    ```

6.  Installez les dépendances npm (si nécessaire) :

    ```bash
    npm install
    ```

7.  Compilez les assets front-end (si nécessaire) :

    ```bash
    npm run dev
    ```

8.  Démarrez le serveur de développement :

    ```bash
    php artisan serve
    ```

## Documentation de l'API

La documentation de l'API est générée avec Swagger (Laravel OpenAPI). Vous pouvez y accéder en naviguant vers `/api/documentation` dans votre navigateur après avoir démarré le serveur de développement.

## Tests

Les tests unitaires et fonctionnels peuvent être exécutés avec :

```bash
php artisan test