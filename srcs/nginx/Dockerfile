FROM alpine:latest

RUN apk update && apk upgrade
RUN	apk add nginx openssl openssh supervisor

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
			-subj '/C=RU/ST=RT/L=Kazan/O=21_school/CN=elovegoo' \
			 -keyout /etc/ssl/private/nginx-selfsigned.key  \
			 -out /etc/ssl/certs/nginx-selfsigned.crt

RUN mkdir -p /run/nginx

COPY ./default /etc/nginx/conf.d/default.conf
COPY ./supervisor.conf /etc/supervisord.conf
COPY ./start_server.sh ./start_server.sh
RUN chmod +x ./start_server.sh

EXPOSE 80 443

CMD [ "./start_server.sh" ]
