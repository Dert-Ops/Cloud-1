FROM phpmyadmin/phpmyadmin:latest
# Environment variables for phpMyAdmin
ENV PMA_ARBITRARY=1
ENV PMA_HOST=${PMA_HOST}
ENV PMA_USER=${MYSQL_USER}
ENV PMA_PASSWORD=${MYSQL_PASSWORD}

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf