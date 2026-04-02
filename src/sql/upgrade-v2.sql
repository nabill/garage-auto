-- ============================================================
-- Garage Auto — Upgrade v2
-- Run this script once on the production database.
-- Safe to run: uses IF NOT EXISTS / IF EXISTS guards.
-- ============================================================

USE garage_auto;

SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ------------------------------------------------------------
-- 1. Opening hours: second shift columns (safe for MySQL 8.0)
-- ------------------------------------------------------------
SET @add_open2 = IF(
    (SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
     WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'opening_hours' AND COLUMN_NAME = 'open_time2') = 0,
    'ALTER TABLE opening_hours ADD COLUMN open_time2 TIME NULL AFTER close_time',
    'SELECT 1'
);
PREPARE stmt FROM @add_open2; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @add_close2 = IF(
    (SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
     WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'opening_hours' AND COLUMN_NAME = 'close_time2') = 0,
    'ALTER TABLE opening_hours ADD COLUMN close_time2 TIME NULL AFTER open_time2',
    'SELECT 1'
);
PREPARE stmt FROM @add_close2; EXECUTE stmt; DEALLOCATE PREPARE stmt;

-- ------------------------------------------------------------
-- 2. Devis services list
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS devis_services (
    id    INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom   VARCHAR(120) NOT NULL,
    ordre TINYINT UNSIGNED NOT NULL DEFAULT 0,
    actif TINYINT(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Seed services (skip if already present)
INSERT IGNORE INTO devis_services (nom, ordre) VALUES
    ('Entretien / Vidange',        1),
    ('Révision complète',          2),
    ('Mécanique générale',         3),
    ('Freins / Plaquettes',        4),
    ('Courroie de distribution',   5),
    ('Embrayage',                  6),
    ('Suspension / Amortisseurs',  7),
    ('Batterie',                   8),
    ('Climatisation',              9),
    ('Diagnostic électronique',   10),
    ('Contrôle technique',        11),
    ('Pneumatiques',              12),
    ('Carrosserie / Peinture',    13),
    ('Autre',                     14);

-- ------------------------------------------------------------
-- 3. Devis requests
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS devis_requests (
    id           INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    client_nom   VARCHAR(100) NOT NULL,
    client_tel   VARCHAR(20)  NOT NULL,
    client_email VARCHAR(150) NOT NULL,
    brand_id     INT UNSIGNED NOT NULL,
    model_id     INT UNSIGNED NOT NULL,
    notes        TEXT NULL,
    statut       ENUM('en_attente','traite','annule') DEFAULT 'en_attente',
    created_at   DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (brand_id) REFERENCES car_brands(id),
    FOREIGN KEY (model_id) REFERENCES car_models(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ------------------------------------------------------------
-- 4. Devis request ↔ services pivot
-- ------------------------------------------------------------
CREATE TABLE IF NOT EXISTS devis_request_services (
    devis_id   INT UNSIGNED NOT NULL,
    service_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (devis_id, service_id),
    FOREIGN KEY (devis_id)   REFERENCES devis_requests(id)  ON DELETE CASCADE,
    FOREIGN KEY (service_id) REFERENCES devis_services(id)  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ------------------------------------------------------------
SET FOREIGN_KEY_CHECKS = 1;
-- ============================================================
-- Done. Upgrade v2 applied successfully.
-- ============================================================
