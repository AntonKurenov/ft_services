FROM alpine:latest

RUN apk update && apk upgrade
RUN	apk add nginx openssl openssh supervisor vim

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
			-subj '/C=RU/ST=RT/L=Kazan/O=21_school/CN=elovegoo' \
			 -keyout /etc/ssl/private/nginx-selfsigned.key  \
			 -out /etc/ssl/certs/nginx-selfsigned.crt

RUN mkdir -p /run/nginx

WORKDIR /tmp

COPY ./srcs/nginx.conf /etc/nginx/nginx.conf
COPY ./srcs/supervisor.conf /etc/supervisord.conf
COPY ./srcs/start_server.sh .
COPY ./srcs/index.html /var/www/

RUN chmod +x ./start_server.sh
RUN rm -rf /etc/ssh/ssh_host_rsa_key /etc/ssh/ssh_host_dsa_key

EXPOSE 80 443 22

CMD [ "./start_server.sh" ]
