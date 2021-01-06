FROM alpine:latest

RUN apk update && apk upgrade
RUN apk add vim openssl vsftpd

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj \
			'/C=RU/ST=RT/L=Kazan/O=21_school/CN=elovegoo' \
			-keyout /etc/ssl/private/vsftpd.key \
			-out /etc/ssl/certs/vsftpd.crt
			
RUN echo 'root:root' | chpasswd

COPY ./srcs/vsftpd.conf /etc/vsftpd/
COPY ./srcs/start.sh .

RUN chmod +x start.sh

EXPOSE 20 21 

ENTRYPOINT [ "./start.sh" ]
