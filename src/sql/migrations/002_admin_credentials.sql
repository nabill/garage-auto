-- Migration 002: Set admin username and password
--
-- IMPORTANT: Replace BCRYPT_HASH_HERE with a real bcrypt hash.
-- To generate the hash, run this PHP command:
--   php -r "echo password_hash('your_password', PASSWORD_BCRYPT);"
-- Or use the temporary script: /set-password.php (delete it after use)
--
-- Example for password "admin123":
--   $2y$10$... (generate with php command above)

USE garage_auto;

-- Update existing admin
UPDATE admins
SET username = 'admin',
    password = 'BCRYPT_HASH_HERE'
WHERE username = 'admin';

-- Or insert if not exists
INSERT INTO admins (username, password)
SELECT 'admin', 'BCRYPT_HASH_HERE'
WHERE NOT EXISTS (SELECT 1 FROM admins WHERE username = 'admin');
