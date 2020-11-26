FROM alpine:latest

RUN apk update && apk upgrade && \
	apk add nginx vim supervisor

RUN apk add php7 php7-fpm php7-mysqli php7-json
RUN mkdir -p /run/nginx && touch /run/nginx/nginx.pid
RUN rm -rf /etc/nginx/conf.d/default.conf 

WORKDIR /tmp

COPY ./srcs/supervisor.conf /etc/
COPY ./srcs/latest.tar.gz .
COPY ./srcs/nginx.conf /etc/nginx/
RUN tar -xzf latest.tar.gz
RUN mv ./wordpress /var/www/

EXPOSE 5050

CMD [ "/usr/bin/supervisord", "-c", "/etc/supervisor.conf" ]
# CMD ["nginx", "-g", "daemon off;"]
#CMD [ "/bin/sh" ]
