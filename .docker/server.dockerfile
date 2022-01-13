# Base image
FROM php:8.0-apache-buster

# Maintainer
LABEL maintainer="paulo.xcco@gmail.com"

# Work directory
WORKDIR /var/www/html

# Copy all from host locale to image locale
COPY . /var/www/html
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# # Arguments defined in docker-compose.yml
# ARG user
# ARG uid

SHELL ["/bin/bash", "--login", "-c"]

# # Create system user to run Composer and Artisan Commands
# RUN useradd -G www-data,root -u $uid -d /home/$user $user
# # Enable web server accesses
# RUN chown -R www-data:www-data /var/www/html

# Update repositories
RUN apt update 
# Libs 
RUN apt install -y libpng-dev zlib1g-dev libxml2-dev libzip-dev libonig-dev 
# Programs 
RUN apt install -y git zip unzip curl 
# Docker-PHP extensions 
RUN apt install -y \ 
    && docker-php-ext-configure gd \ 
    && docker-php-ext-install -j$(nproc) gd \ 
    && docker-php-ext-install pdo_mysql \ 
    && docker-php-ext-install mysqli \ 
    && docker-php-ext-install zip \ 
    && docker-php-source delete

# Install composer 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Install composer dependencies 
RUN composer install

# Install nvm 
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash
RUN nvm install 10.24.0
# Install npm dependencies 
RUN npm install 
RUN npm audit fix 

# Enable apache2 rewrite URL 
RUN a2enmod rewrite 

# RUN chmod +x /var/www/html/commands.sh 

# Ports 
EXPOSE 80 

# ENTRYPOINT ["/var/www/html/commands.sh"] 
# ENTRYPOINT ["/bin/bash", "-c", "chmod 777 commands.sh && ./commands.sh && chmod -R 664 storage] 
# ENTRYPOINT ["/bin/bash", "-c", "chmod -R 664 storage"]

# Users 
# USER $user 

# NOTES: 
# FROM: specify image base 
# LABEL: metadata 
# WORKDIR: work directory 
# COPY: copy files 
# ARG: variable 
# RUN: executes command(s) in a new layer and creates a new image 
# CMD: execute default command(s)/parameter(s) when container is starting (can be override) 
# ENTRYPOINT: execute command(s)/parameter(s) when container is starting (cannot be override) 
# EXPOSE: expose container port 
# VOLUME: expose data