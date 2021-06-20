```
[centos@ip-172-26-19-76 ~]$ docker run -d \
 --hostname php \
 --name php \
 --network reverse-proxy \
 --restart always \
 --volume ${HOME}/reverse-proxy/htdocs:/var/www \
 php:7.4-fpm-alpine
```
