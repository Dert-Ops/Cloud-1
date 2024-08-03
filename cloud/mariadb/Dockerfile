FROM debian:buster

RUN apt-get update
RUN apt-get install -y mariadb-server

COPY ./50-server.conf /etc/mysql/mariadb.conf.d/
COPY ./initial_db.sql /var/www/

RUN service mysql start && mysql < /var/www/initial_db.sql

CMD ["mysqld"]