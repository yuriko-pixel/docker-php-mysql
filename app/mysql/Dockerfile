FROM mysql:8.0

COPY init.sql /docker-entrypoint-initdb.d/init.sql

ENV MYSQL_ROOT_PASSWORD=password
ENV MYSQL_DATABASE=test_db
ENV MYSQL_USER=root
ENV MYSQL_PASSWORD=password

VOLUME ./data:/var/lib/mysql