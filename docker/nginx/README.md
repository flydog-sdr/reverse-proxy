```
[centos@ip-172-26-19-76 ~]$ docker run -d \
 --hostname nginx \
 --name nginx \
 --network reserve-proxy \
 --publish 80:80 \
 --restart always \
 --volume ${HOME}/reserve-proxy/config/nginx:/etc/nginx \
 --volume ${HOME}/reserve-proxy/htdocs:/var/www \
 --volume /var/log/nginx:/var/log/nginx \
 nginx:stable-alpine
```
