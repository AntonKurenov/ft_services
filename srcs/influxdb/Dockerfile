FROM alpine:latest

RUN apk update && apk upgrade
RUN	apk	add supervisor wget vim

RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub
RUN wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.28-r0/glibc-2.28-r0.apk
RUN apk add glibc-2.28-r0.apk
RUN wget https://dl.influxdata.com/telegraf/releases/telegraf-1.16.1_linux_amd64.tar.gz &&\
	tar -xvf telegraf-1.16.1_linux_amd64.tar.gz

RUN wget https://dl.influxdata.com/influxdb/releases/influxdb-1.8.3-static_linux_amd64.tar.gz &&\
    tar -xvf influxdb-1.8.3-static_linux_amd64.tar.gz &&\
    rm -rf influxdb-1.8.3-static_linux_amd64.tar.gz

RUN mkdir -p /var/lib/influxdb

RUN mv influxdb-1.8.3-1 /etc/influxdb

RUN mkdir -p /etc/telegraf
# RUN tar -xvf influxdb-1.8.3-static_linux_amd64.tar.gz
RUN cp -r /telegraf-1.16.1/* / 
RUN rm -rf /telegraf-1.16.1/ telegraf-1.16.1_linux_amd64.tar.gz

RUN ./usr/bin/telegraf -sample-config --input-filter docker \
	--output-filter influxdb > /etc/telegraf/telegraf.conf

# COPY ./srcs/telegraf.conf etc/telegraf/telegraf.conf


COPY ./srcs/supervisor.conf /etc/supervisor.conf

VOLUME [ "/var/lib/influxdb" ]

EXPOSE 8086

ENTRYPOINT [ "/usr/bin/supervisord", "-c", "/etc/supervisor.conf" ]
# CMD [ "/bin/sh" ]
