FROM alpine:latest

WORKDIR /server_srcs

RUN apk update && apk upgrade
RUN	apk add nginx openssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
			-subj '/C=RU/ST=75/L=Kazan/O=21school/CN=elovegoo' \
			 -keyout /etc/ssl/private/nginx-selfsigned.key  \
			 -out /etc/ssl/certs/nginx-selfsigned.crt

RUN mkdir -p /run/nginx

COPY ./default /etc/nginx/conf.d/default.conf

EXPOSE 80 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]
