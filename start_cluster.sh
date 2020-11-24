#!/bin/bash

eval $(minikube docker-env)
minikube addons enable metallb
kubectl apply -f configmap.yaml

