#!/bin/sh
set -eu

PORT="${PORT:-80}"
case "$PORT" in
    ''|*[!0-9]*)
        echo "Invalid PORT value: $PORT" >&2
        exit 1
        ;;
esac

sed -i "s/^Listen 80$/Listen ${PORT}/" /etc/apache2/ports.conf
sed "s/__PORT__/${PORT}/g" /etc/apache2/sites-available/000-default.conf.template > /etc/apache2/sites-available/000-default.conf

exec apache2-foreground
