
kubectl delete -f ./srcs/phpmyad/phpmyad.yaml
kubectl delete -f ./srcs/wordpress/wordpress.yaml
kubectl delete -f ./srcs/nginx/nginx.yaml
kubectl delete -f ./srcs/mysql/mysql.yaml
kubectl delete -f ./srcs/grafana/grafana.yaml
kubectl delete -f ./srcs/ftps/ftps.yaml
kubectl delete -f ./srcs/influxdb/influxdb.yaml

kubectl delete -f ./srcs/volumes/persistent_vol.yaml
kubectl delete -f ./srcs/mysql/mysql.yaml

# ssh-keygen -R 192.168.99.101 # for ssh key cleaning
