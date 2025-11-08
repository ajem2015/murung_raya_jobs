# Gunakan image PHP + Apache
FROM php:8.2-apache

# Install ekstensi yang dibutuhkan Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer (alat instalasi Laravel)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set folder kerja di dalam container
WORKDIR /var/www/html

# Copy semua file project kamu ke dalam container
COPY . .

# Install semua dependensi Laravel
RUN composer install --no-dev --optimize-autoloader

# Generate key Laravel
RUN php artisan key:generate

# Port default Apache
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]
