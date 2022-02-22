FROM debian:stable

MAINTAINER javier@zadiasoftware.com

RUN mkdir ~/Proxectos
WORKDIR ~/Proxectos
RUN apt update
RUN apt-get install curl -y
RUN curl -fsSL https://deb.nodesource.com/setup_17.x | bash -
RUN apt-get install -y nodejs -y
RUN npm install -g @angular/cli
RUN ng new Proxecto

WORKDIR ~/Proxectos/Proxecto
RUN cd ~/Proxectos/Proxecto && ng serve &

VOLUME /home/SANCLEMENTE/a15javierff/clases/clase/javier/Angular ~/Proxectos/Proxecto/src


EXPOSE 4200

