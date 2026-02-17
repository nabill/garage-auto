-- Garage Auto - Database Schema
CREATE DATABASE IF NOT EXISTS garage_auto CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE garage_auto;

-- Admins
CREATE TABLE admins (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Car brands
CREATE TABLE car_brands (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(80) NOT NULL UNIQUE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Car models
CREATE TABLE car_models (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    brand_id INT UNSIGNED NOT NULL,
    nom VARCHAR(80) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY uq_brand_model (brand_id, nom),
    FOREIGN KEY (brand_id) REFERENCES car_brands(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Appointments
CREATE TABLE appointments (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    client_nom VARCHAR(100) NOT NULL,
    client_tel VARCHAR(20) NOT NULL,
    client_email VARCHAR(150) NOT NULL,
    brand_id INT UNSIGNED NOT NULL,
    model_id INT UNSIGNED NOT NULL,
    description TEXT NOT NULL,
    date_rdv DATE NOT NULL,
    statut ENUM('en_attente','confirme','termine','annule') DEFAULT 'en_attente',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_date_rdv (date_rdv),
    FOREIGN KEY (brand_id) REFERENCES car_brands(id),
    FOREIGN KEY (model_id) REFERENCES car_models(id)
) ENGINE=InnoDB;

-- Closed days (specific dates)
CREATE TABLE closed_days (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    date_jour DATE NOT NULL UNIQUE,
    motif VARCHAR(150) NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Weekly closures
CREATE TABLE weekly_closures (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    day_of_week TINYINT NOT NULL UNIQUE,
    is_closed TINYINT(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB;

-- Opening hours
CREATE TABLE opening_hours (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    day_of_week TINYINT NOT NULL UNIQUE,
    open_time TIME NULL,
    close_time TIME NULL
) ENGINE=InnoDB;

-- News
CREATE TABLE news (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(200) NOT NULL,
    contenu TEXT NOT NULL,
    image VARCHAR(255) NULL,
    published_at DATETIME NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Contact messages
CREATE TABLE contact_messages (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    sujet VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    is_read TINYINT(1) NOT NULL DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
