FROM debian:buster

RUN apt-get update
RUN apt-get install -y nginx openssl

COPY ./nginx.crt /etc/ssl/certs/nginx.crt
COPY ./nginx.key /etc/ssl/certs/nginx.key
COPY ./default.conf /etc/nginx/conf.d/default.conf
COPY ./default.conf /etc/nginx/default.conf

RUN chmod 600 /etc/ssl/certs/nginx.crt /etc/ssl/certs/nginx.key


CMD [ "nginx", "-g", "daemon off;" ]