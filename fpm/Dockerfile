FROM php:7.0-fpm
MAINTAINER Kenan Rhoton
RUN apt-get update
RUN apt-get install -y xvfb ttf-freefont fontconfig dbus
RUN apt-get install -y wkhtmltopdf
RUN mv /usr/bin/wkhtmltopdf /usr/bin/wkhtmltopdf-origin
COPY scripts/wkhtmlwrapper.sh /usr/bin/wkhtmltopdf
RUN chmod +x /usr/bin/wkhtmltopdf
COPY web/ /var/www/html/
RUN mkdir /var/www/html/pdfs && chmod -R 777 /var/www/html/pdfs
