#!/bin/bash

eval $(minikube docker-env)

docker build -t nginx_image ./srcs/nginx/
docker build -t phpmyad_image ./srcs/phpmyad/
docker build -t mysql_image ./srcs/mysql
docker build -t wordpress_image ./srcs/wordpress
docker build -t grafana_image ./srcs/grafana
docker build -t ftps_image ./srcs/ftps
docker build -t influxdb_image ./srcs/influxdb

minikube addons enable metallb
kubectl apply -f configmap.yaml

kubectl apply -f ./srcs/volumes/persistent_vol.yaml

kubectl apply -f ./srcs/phpmyad/phpmyad.yaml
kubectl apply -f ./srcs/wordpress/wordpress.yaml
kubectl apply -f ./srcs/ftps/ftps.yaml
kubectl apply -f ./srcs/nginx/nginx.yaml
kubectl apply -f ./srcs/influxdb/influxdb.yaml
kubectl apply -f ./srcs/mysql/mysql.yaml
kubectl apply -f ./srcs/grafana/grafana.yaml

# minikube dashboard
