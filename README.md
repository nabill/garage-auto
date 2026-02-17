# Garage Auto — Site Web PHP/MySQL

Site web complet pour un garage automobile comprenant un site vitrine public et un back-office d'administration.

## Fonctionnalités

### Site public
- **Accueil** avec présentation du garage et actualités récentes
- **6 pages services** : Mécanique générale, Entretien/Vidange, Pneumatiques, Diagnostic électronique, Carrosserie/Peinture, Climatisation
- **Contact** avec informations, horaires dynamiques et formulaire de contact
- **Prise de rendez-vous en ligne** avec sélection dynamique marque/modèle et blocage des jours fermés

### Back-office admin
- **Tableau de bord** avec compteurs (RDV du jour, en attente, messages non lus) et prochains rendez-vous
- **Gestion des rendez-vous** : liste avec filtres (statut, date), détail, changement de statut
- **Gestion des marques et modèles** de véhicules (CRUD complet)
- **Gestion des jours fermés** ponctuels (CRUD) et fermeture hebdomadaire (checkboxes)
- **Gestion des horaires** d'ouverture par jour de la semaine
- **Gestion des actualités** avec upload d'images
- **Gestion des messages** de contact (lecture, suppression)

## Technologies

- PHP 8.x procédural (pas de framework)
- MySQL 8.0 avec PDO + prepared statements
- Bootstrap 5.3 via CDN
- Bootstrap Icons via CDN
- JavaScript vanilla (fetch API pour AJAX)

## Structure du projet

```
garage-auto/
├── docker-compose.yml
├── Dockerfile
├── docker-entrypoint.sh
└── src/
    ├── index.php                    # Accueil
    ├── actualite.php                # Détail d'une actualité
    ├── contact.php                  # Page contact + formulaire
    ├── rendez-vous.php              # Formulaire de prise de RDV
    ├── rendez-vous-confirmation.php # Confirmation RDV
    ├── config/
    │   ├── database.php             # Connexion PDO
    │   └── init.php                 # Bootstrap (session, includes)
    ├── includes/
    │   ├── header.php               # En-tête + navbar
    │   ├── footer.php               # Pied de page + horaires
    │   ├── functions.php            # Utilitaires (h, redirect, flash, csrf)
    │   └── auth.php                 # Fonctions login/logout
    ├── services/
    │   ├── index.php                # Liste des services
    │   ├── mecanique-generale.php
    │   ├── entretien-vidange.php
    │   ├── pneumatiques.php
    │   ├── diagnostic.php
    │   ├── carrosserie-peinture.php
    │   └── climatisation.php
    ├── admin/
    │   ├── login.php / logout.php
    │   ├── index.php                # Tableau de bord
    │   ├── rendez-vous.php          # Liste RDV + filtres
    │   ├── rendez-vous-detail.php   # Détail + changement statut
    │   ├── marques.php / marques-form.php / marques-delete.php
    │   ├── modeles.php / modeles-form.php / modeles-delete.php
    │   ├── jours-fermes.php / jours-fermes-form.php / jours-fermes-delete.php
    │   ├── jours-hebdo.php          # Fermeture hebdomadaire
    │   ├── horaires.php             # Horaires d'ouverture
    │   ├── actualites.php / actualites-form.php / actualites-delete.php
    │   ├── messages.php / messages-detail.php / messages-delete.php
    │   └── includes/
    │       ├── header.php / footer.php
    │       └── auth-check.php
    ├── api/
    │   ├── closed-days.php          # JSON jours fermés
    │   └── models.php               # JSON modèles par marque
    ├── assets/
    │   ├── css/style.css            # Styles public
    │   ├── css/admin.css            # Styles admin
    │   ├── js/main.js               # JS public
    │   ├── js/admin.js              # JS admin
    │   └── uploads/                 # Images uploadées
    └── sql/
        ├── schema.sql               # Création des tables
        ├── seed.sql                 # Données initiales
        └── setup-admin.php          # Script pour hasher le mot de passe admin
```

## Base de données

8 tables : `admins`, `car_brands`, `car_models`, `appointments`, `closed_days`, `weekly_closures`, `opening_hours`, `news`, `contact_messages`.

### Données initiales (seed)

- **10 marques** avec 5 modèles chacune (Renault, Peugeot, Citroën, Volkswagen, Toyota, Ford, BMW, Mercedes, Audi, Dacia)
- **Horaires** : Lun-Ven 8h-18h, Sam 9h-13h, Dim fermé
- **Jours fermés** : 1er Janvier, 1er Mai, 25 Décembre
- **3 actualités** exemples
- **Compte admin** : `admin` / `admin123`

---

## Installation avec Docker (recommandé)

### Prérequis

- [Docker](https://docs.docker.com/get-docker/) et [Docker Compose](https://docs.docker.com/compose/install/)

### Lancement

```bash
cd garage-auto
docker-compose up --build
```

Au premier lancement, Docker va :
1. Construire l'image PHP 8.2 + Apache
2. Démarrer MySQL 8.0 et importer automatiquement le schéma et les données
3. Hasher le mot de passe admin au démarrage du conteneur web

### Accès

| Service        | URL                                      |
|----------------|------------------------------------------|
| Site public    | http://localhost:8080                     |
| Admin          | http://localhost:8080/admin/login.php     |
| phpMyAdmin     | http://localhost:8081                     |

### Identifiants

| Service     | Utilisateur | Mot de passe |
|-------------|-------------|--------------|
| Admin site  | `admin`     | `admin123`   |
| MySQL       | `root`      | `root`       |

### Commandes utiles

```bash
# Démarrer en arrière-plan
docker-compose up -d --build

# Voir les logs
docker-compose logs -f

# Arrêter
docker-compose down

# Arrêter et supprimer les données MySQL
docker-compose down -v

# Reconstruire après modification du Dockerfile
docker-compose up --build
```

### Remarques Docker

- Le dossier `src/` est monté en volume : les modifications de code sont reflétées instantanément sans rebuild
- Les données MySQL persistent dans un volume Docker (`db_data`) entre les redémarrages
- Utilisez `docker-compose down -v` pour repartir d'une base vierge

---

## Installation sur serveur web (LAMP/WAMP/XAMPP/MAMP)

### Prérequis

- PHP 8.0 ou supérieur
- MySQL 8.0 ou MariaDB 10.5+
- Apache ou Nginx
- Extensions PHP : `pdo`, `pdo_mysql`

### Étapes

1. **Cloner le projet** dans le répertoire web :

   ```bash
   git clone https://github.com/votre-utilisateur/garage-auto.git
   cd garage-auto
   ```

2. **Créer la base de données** — importer les fichiers SQL dans MySQL :

   ```bash
   mysql -u root -p < src/sql/schema.sql
   mysql -u root -p garage_auto < src/sql/seed.sql
   ```

   Ou via phpMyAdmin : importer `schema.sql` puis `seed.sql`.

3. **Configurer la connexion** — éditer `src/config/database.php` si nécessaire :

   ```php
   $db_host = 'localhost';
   $db_name = 'garage_auto';
   $db_user = 'root';
   $db_pass = ''; // votre mot de passe MySQL
   ```

4. **Hasher le mot de passe admin** :

   ```bash
   cd src
   php sql/setup-admin.php
   ```

   Vous devriez voir : `Admin password set successfully.`

5. **Permissions** — s'assurer que le dossier uploads est accessible en écriture :

   ```bash
   chmod 755 src/assets/uploads
   ```

   Sous Windows (XAMPP/WAMP), ce dossier est accessible en écriture par défaut.

6. **Lancer le serveur** :

   Avec le serveur intégré PHP :
   ```bash
   cd src
   php -S localhost:8000
   ```

   Ou configurer un VirtualHost Apache pointant vers le dossier `src/`.

7. **Accéder au site** :
   - Site public : http://localhost:8000
   - Admin : http://localhost:8000/admin/login.php
   - Identifiants : `admin` / `admin123`

### Configuration Apache (VirtualHost)

```apache
<VirtualHost *:80>
    ServerName garage-auto.local
    DocumentRoot /chemin/vers/garage-auto/src

    <Directory /chemin/vers/garage-auto/src>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

### Configuration Nginx

```nginx
server {
    listen 80;
    server_name garage-auto.local;
    root /chemin/vers/garage-auto/src;
    index index.php;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

---

## Sécurité

- **CSRF** : jetons de sécurité sur tous les formulaires (génération + vérification via `$_SESSION`)
- **XSS** : échappement HTML systématique via `htmlspecialchars()` (fonction `h()`)
- **SQL Injection** : requêtes préparées PDO exclusivement
- **Authentification** : `password_hash()` / `password_verify()` avec bcrypt
- **Upload** : validation du type MIME (JPEG, PNG, WebP uniquement) et taille max 2 Mo
- **Sessions** : authentification admin par session PHP
- **Accès admin** : guard sur toutes les pages admin (`auth-check.php`)

---

## Personnalisation

### Modifier les informations du garage

- **Adresse, téléphone, email** : éditer `src/includes/footer.php` et `src/contact.php`
- **Nom du garage** : éditer `src/includes/header.php` (navbar) et `src/includes/footer.php`
- **Horaires** : via le back-office admin (Planning > Horaires)

### Modifier le mot de passe admin

Via phpMyAdmin ou en ligne de commande :

```bash
php -r "echo password_hash('nouveau_mot_de_passe', PASSWORD_BCRYPT);"
```

Puis mettre à jour dans la table `admins`.

### Ajouter un service

1. Créer un fichier `src/services/nouveau-service.php` (copier un existant comme modèle)
2. Ajouter le lien dans `src/includes/header.php` (menu dropdown Services)
3. Ajouter la carte dans `src/services/index.php` et `src/index.php`

### Email de contact

Le formulaire de contact utilise la fonction `mail()` de PHP. Pour que l'envoi fonctionne, le serveur doit avoir un SMTP configuré. En développement, les messages sont quand même stockés en base de données et visibles dans l'admin.
