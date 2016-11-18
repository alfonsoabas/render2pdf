FROM nginx:alpine
MAINTAINER Kenan Rhoton
RUN echo http://nl.alpinelinux.org/alpine/edge/testing >> /etc/apk/repositories
RUN apk add --no-cache wkhtmltopdf
RUN rm -rf /var/cache/apk/*
COPY web/ /usr/share/nginx/html
