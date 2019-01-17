FROM mysql
ENV MYSQL_DATABASE webdb
COPY ./sql-scripts/ /docker-entrypoint-initdb.d/
EXPOSE 3306