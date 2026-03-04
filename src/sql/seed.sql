USE garage_auto;

SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;

-- Truncate all tables before seeding (safe re-run)
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE admins;
TRUNCATE TABLE car_models;
TRUNCATE TABLE car_brands;
TRUNCATE TABLE weekly_closures;
TRUNCATE TABLE opening_hours;
TRUNCATE TABLE closed_days;
TRUNCATE TABLE news;
TRUNCATE TABLE contact_messages;
TRUNCATE TABLE appointments;
SET FOREIGN_KEY_CHECKS = 1;

-- Admin default account (password: admin123)
-- IMPORTANT: After importing, run this to set the password:
--   php -r "require 'config/init.php'; \$h=password_hash('admin123',PASSWORD_BCRYPT); \$pdo->prepare('UPDATE admins SET password=? WHERE username=?')->execute([\$h,'admin']); echo 'Done';"
-- Or simply use the seed-password.php script
INSERT INTO admins (username, password) VALUES
('admin', 'CHANGE_ME');

-- Car brands (30 brands)
INSERT INTO car_brands (nom) VALUES
-- French
('Renault'),    -- 1
('Peugeot'),    -- 2
('Citroën'),    -- 3
('Dacia'),      -- 4
('DS'),         -- 5
('Alpine'),     -- 6
-- German
('Volkswagen'), -- 7
('BMW'),        -- 8
('Mercedes'),   -- 9
('Audi'),       -- 10
('Opel'),       -- 11
('Skoda'),      -- 12
('SEAT'),       -- 13
('Porsche'),    -- 14
-- Japanese
('Toyota'),     -- 15
('Honda'),      -- 16
('Nissan'),     -- 17
('Mazda'),      -- 18
('Mitsubishi'), -- 19
('Subaru'),     -- 20
('Suzuki'),     -- 21
('Lexus'),      -- 22
-- Korean
('Hyundai'),    -- 23
('Kia'),        -- 24
-- Italian
('Fiat'),       -- 25
('Alfa Romeo'), -- 26
-- Swedish/British
('Volvo'),      -- 27
('Land Rover'), -- 28
('Mini'),       -- 29
-- American/Other
('Ford'),       -- 30
('Jeep'),       -- 31
('Tesla'),      -- 32
('Autre');      -- 33

-- Car models
INSERT INTO car_models (brand_id, nom) VALUES
-- 1 Renault
(1, 'Clio'), (1, 'Mégane'), (1, 'Captur'), (1, 'Arkana'), (1, 'Twingo'),
(1, 'Zoé'), (1, 'Austral'), (1, 'Espace'), (1, 'Talisman'), (1, 'Kangoo'),
-- 2 Peugeot
(2, '108'), (2, '208'), (2, '308'), (2, '408'), (2, '508'),
(2, '2008'), (2, '3008'), (2, '5008'), (2, 'Partner'), (2, 'Expert'),
-- 3 Citroën
(3, 'C1'), (3, 'C3'), (3, 'C3 Aircross'), (3, 'C4'), (3, 'C4 X'),
(3, 'C5 Aircross'), (3, 'Berlingo'), (3, 'Jumpy'), (3, 'ë-C3'),
-- 4 Dacia
(4, 'Sandero'), (4, 'Logan'), (4, 'Duster'), (4, 'Jogger'), (4, 'Spring'),
(4, 'Dokker'), (4, 'Lodgy'),
-- 5 DS
(5, 'DS3'), (5, 'DS3 Crossback'), (5, 'DS4'), (5, 'DS7'), (5, 'DS9'),
-- 6 Alpine
(6, 'A110'), (6, 'A290'),
-- 7 Volkswagen
(7, 'Polo'), (7, 'Golf'), (7, 'Golf Sportsvan'), (7, 'T-Cross'), (7, 'T-Roc'),
(7, 'Tiguan'), (7, 'Touareg'), (7, 'Passat'), (7, 'Arteon'), (7, 'ID.3'),
(7, 'ID.4'), (7, 'Caddy'), (7, 'Transporter'),
-- 8 BMW
(8, 'Série 1'), (8, 'Série 2'), (8, 'Série 3'), (8, 'Série 4'), (8, 'Série 5'),
(8, 'Série 7'), (8, 'X1'), (8, 'X2'), (8, 'X3'), (8, 'X5'), (8, 'X6'), (8, 'iX1'),
-- 9 Mercedes
(9, 'Classe A'), (9, 'Classe B'), (9, 'Classe C'), (9, 'Classe E'), (9, 'Classe S'),
(9, 'GLA'), (9, 'GLB'), (9, 'GLC'), (9, 'GLE'), (9, 'Vito'), (9, 'Sprinter'),
-- 10 Audi
(10, 'A1'), (10, 'A3'), (10, 'A4'), (10, 'A5'), (10, 'A6'), (10, 'A7'),
(10, 'Q2'), (10, 'Q3'), (10, 'Q5'), (10, 'Q7'), (10, 'Q8'), (10, 'e-tron'),
-- 11 Opel
(11, 'Corsa'), (11, 'Astra'), (11, 'Crossland'), (11, 'Mokka'), (11, 'Grandland'),
(11, 'Insignia'), (11, 'Zafira'), (11, 'Combo'),
-- 12 Skoda
(12, 'Fabia'), (12, 'Scala'), (12, 'Octavia'), (12, 'Superb'), (12, 'Karoq'),
(12, 'Kodiaq'), (12, 'Kamiq'), (12, 'Enyaq'),
-- 13 SEAT
(13, 'Ibiza'), (13, 'Leon'), (13, 'Arona'), (13, 'Ateca'), (13, 'Tarraco'),
-- 14 Porsche
(14, '911'), (14, 'Cayenne'), (14, 'Macan'), (14, 'Panamera'), (14, 'Taycan'),
-- 15 Toyota
(15, 'Aygo X'), (15, 'Yaris'), (15, 'Yaris Cross'), (15, 'Corolla'), (15, 'C-HR'),
(15, 'RAV4'), (15, 'Prius'), (15, 'Camry'), (15, 'Land Cruiser'), (15, 'Proace'),
-- 16 Honda
(16, 'Jazz'), (16, 'Civic'), (16, 'HR-V'), (16, 'CR-V'), (16, 'ZR-V'),
-- 17 Nissan
(17, 'Micra'), (17, 'Juke'), (17, 'Qashqai'), (17, 'X-Trail'), (17, 'Leaf'),
(17, 'Ariya'), (17, 'Navara'),
-- 18 Mazda
(18, 'Mazda2'), (18, 'Mazda3'), (18, 'Mazda6'), (18, 'CX-3'), (18, 'CX-30'),
(18, 'CX-5'), (18, 'MX-5'),
-- 19 Mitsubishi
(19, 'ASX'), (19, 'Eclipse Cross'), (19, 'Outlander'), (19, 'L200'), (19, 'Space Star'),
-- 20 Subaru
(20, 'Impreza'), (20, 'Forester'), (20, 'Outback'), (20, 'XV'), (20, 'Levorg'),
-- 21 Suzuki
(21, 'Alto'), (21, 'Swift'), (21, 'Baleno'), (21, 'Ignis'), (21, 'Vitara'),
(21, 'S-Cross'), (21, 'Across'),
-- 22 Lexus
(22, 'CT'), (22, 'UX'), (22, 'NX'), (22, 'RX'), (22, 'ES'), (22, 'IS'),
-- 23 Hyundai
(23, 'i10'), (23, 'i20'), (23, 'i30'), (23, 'i30 N'), (23, 'Tucson'),
(23, 'Kona'), (23, 'Santa Fe'), (23, 'IONIQ 5'), (23, 'IONIQ 6'),
-- 24 Kia
(24, 'Picanto'), (24, 'Rio'), (24, 'Ceed'), (24, 'Proceed'), (24, 'Stonic'),
(24, 'Sportage'), (24, 'Niro'), (24, 'Sorento'), (24, 'EV6'),
-- 25 Fiat
(25, '500'), (25, '500X'), (25, '500e'), (25, 'Panda'), (25, 'Tipo'),
(25, 'Doblo'), (25, 'Ducato'),
-- 26 Alfa Romeo
(26, 'Giulietta'), (26, 'Giulia'), (26, 'Stelvio'), (26, 'Tonale'),
-- 27 Volvo
(27, 'V40'), (27, 'V60'), (27, 'V90'), (27, 'S60'), (27, 'S90'),
(27, 'XC40'), (27, 'XC60'), (27, 'XC90'), (27, 'C40'),
-- 28 Land Rover
(28, 'Defender'), (28, 'Discovery Sport'), (28, 'Discovery'), (28, 'Freelander'),
(28, 'Range Rover Evoque'), (28, 'Range Rover Sport'), (28, 'Range Rover'),
-- 29 Mini
(29, 'Mini Cooper'), (29, 'Mini Clubman'), (29, 'Mini Countryman'), (29, 'Mini Paceman'),
-- 30 Ford
(30, 'Fiesta'), (30, 'Focus'), (30, 'Puma'), (30, 'Kuga'), (30, 'Mondeo'),
(30, 'Mustang'), (30, 'Explorer'), (30, 'Transit'), (30, 'Transit Connect'),
-- 31 Jeep
(31, 'Renegade'), (31, 'Compass'), (31, 'Cherokee'), (31, 'Grand Cherokee'), (31, 'Wrangler'),
-- 32 Tesla
(32, 'Model 3'), (32, 'Model Y'), (32, 'Model S'), (32, 'Model X'),
-- 33 Autre
(33, 'Autre');

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
