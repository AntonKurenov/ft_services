FROM alpine:latest

RUN apk update && apk upgrade && \
	apk add nginx vim supervisor 

RUN apk add php7 php7-fpm php7-mysqli php7-json
RUN mkdir -p /run/nginx 

WORKDIR /tmp

COPY ./srcs/supervisord.conf /etc/
COPY ./srcs/latest.tar.gz .
COPY ./srcs/nginx.conf /etc/nginx/

RUN tar -xzf latest.tar.gz
RUN mv ./wordpress /var/www/
COPY ./srcs/wp-config.php /var/www/wordpress/

EXPOSE 5050

ENTRYPOINT [ "/usr/bin/supervisord", "-c", "/etc/supervisord.conf" ]
