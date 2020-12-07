FROM alpine:latest

RUN apk update && apk upgrade
RUN	apk	add supervisor wget vim

RUN wget https://dl.grafana.com/oss/release/grafana-7.3.1.linux-amd64.tar.gz
RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub
RUN wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.28-r0/glibc-2.28-r0.apk
RUN apk add glibc-2.28-r0.apk

RUN tar -zxvf grafana-7.3.1.linux-amd64.tar.gz && \
		rm -rf grafana-7.3.1.linux-amd64.tar.gz 

RUN mv grafana-7.3.1 /grafana
COPY ./supervisor.conf /etc/

EXPOSE 3000

ENTRYPOINT [ "/usr/bin/supervisord", "-c", "/etc/supervisor.conf" ]
