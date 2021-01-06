FROM alpine:latest

RUN apk update && apk upgrade && \
	apk add nginx vim supervisor

RUN	apk add php7 php7-json php7-mysqli php7-fpm php7-iconv \
	php7-session php7-mbstring php7-phar

RUN mkdir -p /run/nginx

WORKDIR /tmp

COPY ./srcs/supervisord.conf /etc/
COPY ./srcs/phpMyAdmin-5.0.4-all-languages.tar.gz .
COPY ./srcs/nginx.conf /etc/nginx/
RUN tar -xzf phpMyAdmin-5.0.4-all-languages.tar.gz
RUN mv ./phpMyAdmin-5.0.4-all-languages /var/www/
COPY ./srcs/config.inc.php /var/www/phpMyAdmin-5.0.4-all-languages/

RUN mkdir /var/www/phpMyAdmin-5.0.4-all-languages/tmp
RUN chmod 777 /var/www/phpMyAdmin-5.0.4-all-languages/tmp

ENTRYPOINT [ "/usr/bin/supervisord", "-c", "/etc/supervisord.conf" ]
