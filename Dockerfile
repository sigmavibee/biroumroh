# Use the official PHP image with Apache
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Copy project files to the container
COPY . /var/www/html

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable mysqli pdo pdo_mysql

# Set proper permissions for Apache
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]