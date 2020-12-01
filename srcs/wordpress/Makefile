build:
	docker build -t wordpress_image .

apply:
	kubectl apply -f wordpress.yaml

run:
	docker run -p 80:80 -p 443:443 -p 21:21 -d --name nginx nginx_test

runit:
	docker run -p 80:80 -p 443:443 -p 21:21 -it nginx_test sh

rm:
	docker rm $$(docker ps -aq)

exec: run
	docker exec -it nginx sh
