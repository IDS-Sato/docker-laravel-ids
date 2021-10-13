FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=laravel_local \
  MYSQL_USER=phper \
  MYSQL_PASSWORD=Idssapwd01 \
  MYSQL_ROOT_PASSWORD=Idssapwd01 \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf