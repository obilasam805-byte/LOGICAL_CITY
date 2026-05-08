#!/bin/sh
set -eu
PORT="${PORT:-80}"
case "$PORT" in
    *[!0-9]*)
        echo "Invalid PORT value: $PORT" >&2
        exit 1
        ;;
esac
sed -i "s/^Listen 80$/Listen ${PORT}/" /etc/apache2/ports.conf
sed "s/__PORT__/${PORT}/g" /etc/apache2/sites-available/000-default.conf.template > /etc/apache2/sites-available/000-default.conf

# Fix MPM conflict
a2dismod mpm_event mpm_worker 2>/dev/null || true
a2enmod mpm_prefork 2>/dev/null || true

exec apache2-foreground
