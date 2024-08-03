FROM debian:buster
RUN apt-get update
RUN apt-get -y install php7.3
RUN apt-get -y install php-mysqli
RUN apt-get -y install php-mysql
RUN apt-get -y install php-fpm
RUN apt-get -y install wget
RUN apt-get -y install sendmail

COPY ./www.conf /etc/php/7.3/fpm/pool.d/
COPY ./wp-config.php /var/www/
COPY ./wordpress_start.sh /var/www/
RUN chmod +x /var/www/wordpress_start.sh
ENTRYPOINT [ "/var/www/wordpress_start.sh" ]
CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
