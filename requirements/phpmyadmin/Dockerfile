FROM phpmyadmin/phpmyadmin:latest
# Environment variables for phpMyAdmin
ENV PMA_ARBITRARY=1
ENV PMA_HOST=${PMA_HOST}
ENV PMA_USER=${PMA_USER}
ENV PMA_PASSWORD=${PMA_PASSWORD}

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf