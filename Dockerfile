FROM debian:latest

# Install OpenLDAP
RUN apt update && DEBIAN_FRONTEND=noninteractive apt install -y slapd ldap-utils openssl ca-certificates
