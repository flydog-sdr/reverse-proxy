```
[centos@ip-172-26-19-76 ~]$ docker run -d \
 --hostname php \
 --name php \
 --network reserve-proxy \
 --restart always \
 --volume ${HOME}/reserve-proxy/htdocs:/var/www \
 php:7.4-fpm-alpine
```
