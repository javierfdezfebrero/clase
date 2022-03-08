# Instalar Moodle

- cd /opt
-sudo git clone git://git.moodle.org/moodle.git
-cd moodle/

-cp -R /opt/moodle /var/www/html/
-mkdir /var/moodledata
-chown -R www-data /var/moodledata

-sudo mysql -u root -p 

-CREATE DATABASE moodle
-create user 'moodle'@'localhost' IDENTIFIED BY 'pass'
-GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,CREATE TEMPORARY TABLES,DROP,INDEX,ALTER ON moodle.* TO moodledude@localhost IDENTIFIED BY 'passwordformoodledude';

-sudo chmod -R 777 /var/www/html/moodle


-configurar Moodle desde web localhost/moodle