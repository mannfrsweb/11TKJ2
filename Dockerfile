# Gunakan image PHP resmi + Apache
FROM php:8.2-apache

# Install ekstensi yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    curl \
    && docker-php-ext-install pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Salin semua file project Laravel ke folder kerja Docker
COPY . /var/www/html

# Atur working directory
WORKDIR /var/www/html

# Set file permission
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Jalankan composer install
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Generate APP_KEY
RUN php artisan key:generate

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy file konfigurasi Apache agar URL Laravel bisa diakses
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Expose port
EXPOSE 80