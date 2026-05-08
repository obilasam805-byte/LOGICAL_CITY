# syntax=docker/dockerfile:1

FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --prefer-dist \
    --optimize-autoloader \
    --classmap-authoritative

FROM php:8.3-apache
WORKDIR /app

COPY . .
COPY --from=vendor /app/vendor /app/vendor
COPY docker/apache-vhost.conf.template /etc/apache2/sites-available/000-default.conf.template
COPY docker/start.sh /usr/local/bin/start-render

RUN chmod +x /usr/local/bin/start-render \
    && a2dismod mpm_event mpm_worker \
    && a2enmod mpm_prefork rewrite \
    && mkdir -p /app/frontend/uploads \
    && chown -R www-data:www-data /app/frontend/uploads

CMD ["start-render"]
