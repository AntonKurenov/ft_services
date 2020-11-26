build:
	docker build -t nginx_test .

run:
	docker run -p 80:80 -p 443:443 -p 21:21 -d --name nginx nginx_test

runit:
	docker run -p 80:80 -p 443:443 -p 21:21 -it nginx_test sh

rm:
	docker rm $$(docker ps -aq)

exec: run
	docker exec -it nginx sh
