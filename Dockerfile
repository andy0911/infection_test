FROM httpd:alpine
# php7.3
RUN apk --update add php
# laravel6.xの必須条件
RUN apk --update add php-curl
RUN apk --update add php-zip
RUN apk --update add php-tokenizer
RUN apk --update add php-fileinfo
RUN apk --update add php-dom
RUN apk --update add php-xmlwriter
RUN apk --update add php-xml
RUN apk --update add php-mbstring
RUN apk --update add php-session
RUN apk --update add composer
RUN apk --update add php-pdo
RUN apk --update add php-json
RUN apk --update add php-openssl
RUN apk --update add php-ctype
RUN apk --update add php-mysqlnd
RUN apk --update add php7-pdo_mysql
RUN apk --update add php7-pecl-xdebug
RUN apk --update add php7-pdo_sqlite
RUN echo "zend_extension=xdebug.so" >> /etc/php7/php.ini
RUN composer config -g repos.packagist composer https://packagist.jp && \
    composer global require hirak/prestissimo
COPY ./test_works /data/webapp
WORKDIR /data/webapp
## inspectionの実行
RUN composer install
RUN vendor/bin/infection --min-msi=40 --threads=4