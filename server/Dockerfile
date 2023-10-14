FROM yiisoftware/yii2-php:8.2-apache

RUN apt-get update

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV YII_DEBUG=false
ENV YII_ENV=prod

EXPOSE 80

CMD ["apache2-foreground"]