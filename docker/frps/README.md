```
[centos@ip-172-26-19-76 ~]$ docker build -f ${HOME}/reverse-proxy/docker/frps/Dockerfile -t frps:latest
[centos@ip-172-26-19-76 ~]$ docker run -d \
 --hostname frps \
 --name frps \
 --network reverse-proxy \
 --restart always \
 --volume ${HOME}/reverse-proxy/config/frp:/etc/frp \
 frps:latest
```
