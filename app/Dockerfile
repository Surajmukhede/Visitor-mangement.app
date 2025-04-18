FROM php:8.0-apache
COPY . /var/www/html/
RUN docker-php-ext-install pdo pdo_mysql
# Expose port 80 (default HTTP port for Apache)
EXPOSE 80

# Entrypoint to start Apache in the foreground
CMD ["apache2-foreground"]
