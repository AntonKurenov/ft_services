FROM alpine:latest

RUN apk update && apk upgrade
RUN apk add vim openssl vsftpd

WORKDIR /tmp

EXPOSE 20 21 30000

# CMD ["/tmp/setup.sh"]
CMD ["/bin/sh"]
