# ---- Dockerfile pro PHP 8.2 + Apache + Composer ----

FROM php:8.2-apache

# 1) Nainstalujeme závislosti a Composer
RUN apt-get update \
    && apt-get install -y unzip git curl libzip-dev \
    && docker-php-ext-install zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /var/lib/apt/lists/*

# 2) Nastavíme pracovní adresář
WORKDIR /var/www/html

# 3) Zkopírujeme definice závislostí a nainstalujeme je
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# (Řádek COPY .env ./ smažeme – proměnné běží z ENV v prostředí Renderu)

# 4) Zkopírujeme zbytek kódu
COPY . .

# 5) Zapneme Apache mod_rewrite (pokud by bylo potřeba)
RUN a2enmod rewrite

# 6) Exponujeme port 80 a spustíme Apache
EXPOSE 80
CMD ["apache2-foreground"]
