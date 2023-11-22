FROM php:7.1-cli-alpine3.9

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV PORT 8000

RUN pecl install redis-5.3.7 \
	&& docker-php-ext-enable redis

FROM composer:2.0.13

WORKDIR /usr/src/app

COPY . .

EXPOSE 8000

RUN chmod +x start.sh

CMD ["./start.sh"]
