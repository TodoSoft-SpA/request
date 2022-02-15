FROM trafex/php-nginx:latest

# Install composer from the official image
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Run composer install to install the dependencies
# RUN composer install --optimize-autoloader --no-interaction --no-progress