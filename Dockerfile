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

FROM dunglas/frankenphp:1-php8.3-alpine
WORKDIR /app

COPY . .
COPY --from=vendor /app/vendor /app/vendor


CMD ["frankenphp", "run", "--config", "/app/Caddyfile"]
