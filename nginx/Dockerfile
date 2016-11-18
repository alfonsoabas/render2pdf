FROM nginx:alpine
MAINTAINER Kenan Rhoton
RUN rm -rf /var/cache/apk/*
COPY conf/nginx.conf /etc/nginx/nginx.conf
COPY conf/nginx.vh.default.conf /etc/nginx/conf.d/default.conf
