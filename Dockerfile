FROM php:8.5

RUN apt-get update
RUN apt-get install -y git zip

RUN pecl install -o -f xdebug
RUN docker-php-ext-enable xdebug

RUN curl https://getcomposer.org/composer.phar -o /usr/bin/composer
RUN chmod +x /usr/bin/composer

WORKDIR /srv/kata-setup-php

CMD ["sh", "-c", "[ ! -d 'vendor' ] && composer install --no-interaction; composer test"]
