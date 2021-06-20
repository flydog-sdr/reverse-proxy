FROM alpine:3.5

RUN apk add --no-cache --virtual .build-deps ca-certificates curl \
  && curl -L -H "Cache-Control: no-cache" -o /tmp/frp.tar.gz https://github.com/fatedier/frp/releases/download/v0.34.0/frp_0.34.0_linux_amd64.tar.gz \
  && tar -zxvf /tmp/frp.tar.gz frp_0.34.0_linux_amd64/frps \
  && mv frp_0.34.0_linux_amd64/frps /usr/bin \
  && mkdir -p /etc/frp \
  && rm -rf /tmp/frp.tar.gz frp_0.34.0_linux_amd64 \
  && apk del .build-deps

CMD ["frps", "-c", "/etc/frp/frps.ini"]
