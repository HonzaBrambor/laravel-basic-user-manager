# Go to project folder
cd "$(cd -P -- "$(dirname -- "$0")" && pwd -P)/.."

# Compile docker images
docker compose up -d --build

# Create missing log file
docker compose exec laravel-php bash -c \
    "mkdir -p /var/www/storage/logs \
    && touch /var/www/storage/logs/laravel.log"

# Set permissions
docker compose exec laravel-php bash -c \
    "chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache"

# Setup project
docker compose exec laravel-php bash -c "composer setup"
