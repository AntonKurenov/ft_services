FROM alpine:latest

RUN apk update && apk upgrade && \
	apk add mariadb mariadb-common mariadb-client\
	openrc vim 

VOLUME [ "/var/lib/mysql" ]

WORKDIR /tmp

COPY ./srcs/mysql_start.sh .
COPY ./srcs/my.cnf /etc/mysql/
COPY ./srcs/init_db.sql .
COPY ./srcs/wordpress.sql .

RUN chmod 600 /etc/mysql/my.cnf
RUN chmod +x mysql_start.sh

ENTRYPOINT [ "./mysql_start.sh" ] 
