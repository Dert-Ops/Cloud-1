#!/bin/bash

if [ ! -f /etc/ssl/certs/nginx.crt ]; then
openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=TR/ST=Marmara/L=Istanbul/O=42istanbul/CN=${WP_URL}";
echo "Nginx: ssl done.";
fi

exec "$@"
