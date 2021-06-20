```
[centos@ip-172-26-19-76 ~]$ docker build -f ${HOME}/reserve-proxy/docker/frps/Dockerfile -t frps:latest
[centos@ip-172-26-19-76 ~]$ docker run -d \
 --hostname frps \
 --name frps \
 --network reserve-proxy \
 --restart always \
 --volume ${HOME}/reserve-proxy/config/frp:/etc/frp \
 frps:latest
```
