FROM php:7.4.2-fpm-alpine
RUN apk --update upgrade \
    && apk add --no-cache autoconf automake make gcc g++ icu-dev rabbitmq-c rabbitmq-c-dev tzdata postgresql-dev \
    && pecl install amqp-1.9.4 \
    && pecl install apcu-5.1.18 \
    && pecl install xdebug-2.9.1 \
    && pecl install redis-5.1.1 \
    && docker-php-ext-install -j$(nproc) \
        bcmath \
        opcache \
        intl \
        pdo_mysql \
        pdo_pgsql \
        sockets \
        sysvsem \
    && docker-php-ext-enable \
        amqp \
        apcu \
        opcache \
        pdo_pgsql \
        redis \
        sysvsem

WORKDIR /var/www
RUN chmod 777 /var/www -R
RUN chown www-data:www-data /var/www -R

RUN apk --update add wget \ 
		     curl \
		     git \
		     php7 \
		     php7-curl \
		     php7-openssl \
		     php7-iconv \
		     php7-json \
		     php7-mbstring \
		     php7-phar \
		     php7-dom --repository http://nl.alpinelinux.org/alpine/edge/testing/ && rm /var/cache/apk/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
RUN wget https://github.com/elastic/apm-agent-php/releases/download/v1.2/apm-agent-php_1.2_all.apk \
    && apk add --allow-untrusted apm-agent-php_1.2_all.apk && rm apm-agent-php_1.2_all.apk

WORKDIR /var/www/design-patterns

#RUN composer install
RUN chmod -R 777 /var/www/design-patterns

#TIMEZONE#
RUN cp /usr/share/zoneinfo/Europe/Madrid /etc/localtime
RUN echo "Europe/Madrid" > /etc/timezone

RUN apk add --no-cache shadow && usermod -u 1000 www-data && groupmod -g 1000 www-data

USER www-data

WORKDIR /var/www/design-patterns

EXPOSE 9000