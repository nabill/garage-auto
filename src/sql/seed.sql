USE garage_auto;

-- Admin default account (password: admin123)
-- IMPORTANT: After importing, run this to set the password:
--   php -r "require 'config/init.php'; \$h=password_hash('admin123',PASSWORD_BCRYPT); \$pdo->prepare('UPDATE admins SET password=? WHERE username=?')->execute([\$h,'admin']); echo 'Done';"
-- Or simply use the seed-password.php script
INSERT INTO admins (username, password) VALUES
('admin', 'CHANGE_ME');

-- Car brands
INSERT INTO car_brands (nom) VALUES
('Renault'), ('Peugeot'), ('Citroën'), ('Volkswagen'), ('Toyota'),
('Ford'), ('BMW'), ('Mercedes'), ('Audi'), ('Dacia');

-- Car models
INSERT INTO car_models (brand_id, nom) VALUES
-- Renault
(1, 'Clio'), (1, 'Mégane'), (1, 'Captur'), (1, 'Kadjar'), (1, 'Twingo'),
-- Peugeot
(2, '208'), (2, '308'), (2, '3008'), (2, '5008'), (2, '2008'),
-- Citroën
(3, 'C3'), (3, 'C4'), (3, 'C5 Aircross'), (3, 'Berlingo'), (3, 'C3 Aircross'),
-- Volkswagen
(4, 'Golf'), (4, 'Polo'), (4, 'Tiguan'), (4, 'T-Roc'), (4, 'Passat'),
-- Toyota
(5, 'Yaris'), (5, 'Corolla'), (5, 'RAV4'), (5, 'C-HR'), (5, 'Aygo'),
-- Ford
(6, 'Fiesta'), (6, 'Focus'), (6, 'Puma'), (6, 'Kuga'), (6, 'Mustang'),
-- BMW
(7, 'Série 1'), (7, 'Série 3'), (7, 'X1'), (7, 'X3'), (7, 'Série 5'),
-- Mercedes
(8, 'Classe A'), (8, 'Classe C'), (8, 'GLA'), (8, 'GLC'), (8, 'Classe E'),
-- Audi
(9, 'A1'), (9, 'A3'), (9, 'A4'), (9, 'Q3'), (9, 'Q5'),
-- Dacia
(10, 'Sandero'), (10, 'Duster'), (10, 'Logan'), (10, 'Spring'), (10, 'Jogger');

-- Weekly closures (0=Dim, 1=Lun, ..., 6=Sam)
INSERT INTO weekly_closures (day_of_week, is_closed) VALUES
(0, 1), (1, 0), (2, 0), (3, 0), (4, 0), (5, 0), (6, 0);

-- Opening hours
INSERT INTO opening_hours (day_of_week, open_time, close_time) VALUES
(0, NULL, NULL),
(1, '08:00:00', '18:00:00'),
(2, '08:00:00', '18:00:00'),
(3, '08:00:00', '18:00:00'),
(4, '08:00:00', '18:00:00'),
(5, '08:00:00', '18:00:00'),
(6, '09:00:00', '13:00:00');

-- Closed days (public holidays)
INSERT INTO closed_days (date_jour, motif) VALUES
('2026-01-01', 'Jour de l\'An'),
('2026-05-01', 'Fête du Travail'),
('2026-12-25', 'Noël');

-- Sample news
INSERT INTO news (titre, contenu, image, published_at) VALUES
('Bienvenue sur notre nouveau site', 'Nous sommes ravis de vous présenter notre nouveau site web ! Découvrez nos services et prenez rendez-vous en ligne facilement.', NULL, '2026-02-01 10:00:00'),
('Promotion pneumatiques hiver', 'Profitez de notre offre spéciale sur les pneumatiques hiver. Montage et équilibrage inclus pour tout achat de 4 pneus.', NULL, '2026-02-10 09:00:00'),
('Nouveau service de diagnostic', 'Notre garage s\'équipe d\'un nouvel outil de diagnostic électronique de dernière génération pour mieux servir vos véhicules.', NULL, '2026-02-15 14:00:00');
