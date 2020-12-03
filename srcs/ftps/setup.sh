#!/bin/sh

openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj\
			'/C=RU/ST=RT/L=Kazan/O=21_school/CN=elovegoo'\
			-keyout /etc/ssl/private/vsftpd.key\
			-out /etc/ssl/certs/vsftpd.crt
