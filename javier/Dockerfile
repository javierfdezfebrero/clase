FROM debian:stable

MAINTAINER javier@zadiasoftware.com

RUN mkdir /opt/tomcat/

ENV VERSION_TOM 5.5.23

WORKDIR /opt/tomcat
RUN curl -O https://archive.apache.org/dist/tomcat/tomcat-5/v$VERSION_TOM/bin/apache-tomcat-$VERSION_TOM.tar.gz
RUN tar xvfz apache*.tar.gz
RUN mv apache-tomcat-8.5.40/* /opt/tomcat/.
RUN apt install default-jre default-jdk 
RUN java -version

WORKDIR /opt/tomcat/webapps
RUN curl -O -L <<archivo de proxecto>>

EXPOSE 8080

CMD ["/opt/tomcat/bin/catalina.sh", "run"]