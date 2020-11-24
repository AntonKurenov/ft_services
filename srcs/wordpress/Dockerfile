FROM alpine:latest

RUN apk update && apk upgrade && \
	apk add nginx vim 

RUN mkdir -p /run/nginx

CMD ["nginx", "-g", "daemon off;"]
