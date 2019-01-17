FROM mysql
RUN apt-get update && apt-get install mysql-server -y
ENV MYSQL_DATABASE webdb
COPY ./sql-scripts/ /docker-entrypoint-initdb.d/
EXPOSE 3306