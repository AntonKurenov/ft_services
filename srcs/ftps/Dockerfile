FROM alpine:latest

RUN apk update && apk upgrade
RUN apk add vim openssl vsftpd

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj \
			'/C=RU/ST=RT/L=Kazan/O=21_school/CN=elovegoo' \
			-keyout /etc/ssl/private/vsftpd.key \
			-out /etc/ssl/certs/vsftpd.crt
			
RUN adduser -D elovegoo
RUN echo 'elovegoo:admin' | chpasswd

# WORKDIR /tmp

COPY ./srcs/vsftpd.conf /etc/vsftpd/

# RUN ./setup.sh

EXPOSE 20 21 30000

# vsftpd /etc/vsftpd/vsftpd.conf
ENTRYPOINT ["vsftpd", "/etc/vsftpd/vsftpd.conf"]
