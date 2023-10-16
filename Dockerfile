FROM php:8.0-apache

RUN docker-php-ext-install mysqli

COPY htdocs/ /var/www/html/
COPY underwear /var/www/underwear
COPY configuration.example.php /var/www/underwear/environment_variables/configuration.php

RUN chown -R www-data:www-data /var/www/underwear

RUN sed -i "s/\$db_host = 'localhost';/\$db_host = \$_ENV['MYSQL_HOST'];/; s/\$db_user = 'root';/\$db_user = \$_ENV['MYSQL_USER'];/; s/\$db_password = 'root';/\$db_password = \$_ENV['MYSQL_PASSWORD'];/; s/\$db_db = 'we_expire';/\$db_db = \$_ENV['MYSQL_DATABASE'];/" /var/www/underwear/environment_variables/configuration.php

RUN sed -i "s/\$SMTP_host        = '';/\$SMTP_host        = \$_ENV['SMTP_HOST'];/; s/\$SMTP_username    = '';/\$SMTP_username    = \$_ENV['SMTP_USER'];/; s/\$SMTP_password    = '';/\$SMTP_password    = \$_ENV['SMTP_PASSWORD'];/; s/\$SMTP_port        = '';/\$SMTP_port        = \$_ENV['SMTP_PORT'];/; s/\$SMTP_sender_name = '';/\$SMTP_sender_name = \$_ENV['SMTP_NAME'];/" /var/www/underwear/environment_variables/configuration.php

RUN sed -i "s/\$base_path = 'http:\/\/localhost:8888';/\$base_path = \$_ENV['URL'];/" /var/www/underwear/environment_variables/configuration.php

ENV MYSQL_DATABASE=we_expire \
	MYSQL_HOST=db \
	MYSQL_PASSWORD=Password123 \
	MYSQL_USER=we_expire \
	SMTP_HOST="" \
	SMTP_NAME="" \
	SMTP_PASSWORD="" \
	SMTP_PORT="" \
	SMTP_USER="" \
	URL=http://your.domain.com

EXPOSE 80

ENTRYPOINT ["apache2-foreground"]