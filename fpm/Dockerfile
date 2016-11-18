FROM php:7.0-fpm-alpine
MAINTAINER Kenan Rhoton
RUN echo http://nl.alpinelinux.org/alpine/edge/testing >> /etc/apk/repositories
RUN apk add --no-cache wkhtmltopdf
RUN apk add --no-cache xvfb ttf-freefont fontconfig dbus
RUN mv /usr/bin/wkhtmltopdf /usr/bin/wkhtmltopdf-origin
COPY scripts/wkhtmlwrapper.sh /usr/bin/wkhtmltopdf
RUN chmod +x /usr/bin/wkhtmltopdf
RUN rm -rf /var/cache/apk/*
COPY web/ /var/www/html/
RUN mkdir /var/www/html/pdfs && chmod -R 777 /var/www/html/pdfs
