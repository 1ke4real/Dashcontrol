FROM php:8.2-fpm

LABEL maintainer="Mike Leman"

# Met à jour les paquets et installe les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip unzip git \
    iputils-ping \
    && docker-php-ext-install \
    pdo_pgsql \
    zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installe Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définit le répertoire de travail par défaut
WORKDIR /var/www

# Expose le port PHP-FPM
EXPOSE 9000

# Commande par défaut
CMD ["php-fpm"]