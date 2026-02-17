#!/bin/bash
set -e

# Wait a moment for DB to be fully ready
sleep 2

# Set admin password
php -r "
require '/var/www/html/config/database.php';
\$stmt = \$pdo->query(\"SELECT password FROM admins WHERE username = 'admin'\");
\$row = \$stmt->fetch();
if (\$row && \$row['password'] === 'CHANGE_ME') {
    \$hash = password_hash('admin123', PASSWORD_BCRYPT);
    \$pdo->prepare('UPDATE admins SET password = ? WHERE username = ?')->execute([\$hash, 'admin']);
    echo \"Admin password initialized.\n\";
} else {
    echo \"Admin password already set.\n\";
}
"

# Ensure uploads directory is writable
chown -R www-data:www-data /var/www/html/assets/uploads

# Start Apache
exec apache2-foreground
