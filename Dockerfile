FROM justintime50/nginx-php:7.4

COPY --chown=www-data:www-data ./src /var/www/html
COPY ./src/cupsd.conf /etc/cups/cupsd.conf

RUN apk add --no-cache cups-client
