#!/bin/sh
# Wuba Local

###########################################################
# Variables
###########################################################

DOMAIN='192.168.27.14.xip.io'

###########################################################
# Apache2 Virtual Hosts
###########################################################

wuba_apache2_vhost() {
    if [ ! -e "/etc/apache2/sites-available/$1.conf" ]; then
        mkdir -p /var/www/$1/public_html
        mkdir -p /var/www/$1/logs
    fi

    echo "<VirtualHost *:80>" > /etc/apache2/sites-available/$1.conf
    echo "  ServerName $1" >> /etc/apache2/sites-available/$1.conf
    echo "  DocumentRoot /var/www/$1/public_html/" >> /etc/apache2/sites-available/$1.conf
    echo "  SetEnv APPLICATION_ENV \"development\"" >> /etc/apache2/sites-available/$1.conf
    echo "  <Directory /var/www/$1/public_html/>" >> /etc/apache2/sites-available/$1.conf
    echo "    AllowOverride All" >> /etc/apache2/sites-available/$1.conf
    echo "    Order allow,deny" >> /etc/apache2/sites-available/$1.conf
    echo "    Allow from all" >> /etc/apache2/sites-available/$1.conf
    echo "  </Directory>" >> /etc/apache2/sites-available/$1.conf
    echo "  ErrorLog /var/www/$1/logs/error.log" >> /etc/apache2/sites-available/$1.conf
    echo "  CustomLog /var/www/$1/logs/access.log combined" >> /etc/apache2/sites-available/$1.conf
    echo "</VirtualHost>" >> /etc/apache2/sites-available/$1.conf

    a2ensite $1.conf
}

wuba_apache2_vhost "$DOMAIN"
wuba_apache2_vhost "www.$DOMAIN"
wuba_apache2_vhost "admin.$DOMAIN"

###########################################################
# MySQL Databases
###########################################################

wuba_mysql_createdb() {
    echo "CREATE DATABASE IF NOT EXISTS $1;" | mysql -u root -proot@secret
    echo "GRANT ALL PRIVILEGES ON $1.* TO $1@localhost IDENTIFIED BY '$1@secret';" | mysql -u root -proot@secret
}

wuba_mysql_createdb 'wuba'

###########################################################
# 301 Redirect
###########################################################

echo "Options +FollowSymLinks" > "/var/www/$DOMAIN/public_html/.htaccess"
echo "RewriteEngine on" >> "/var/www/$DOMAIN/public_html/.htaccess"
echo "RewriteCond %{HTTP_HOST} ^$DOMAIN$ [NC]" >> "/var/www/$DOMAIN/public_html/.htaccess"
echo "RewriteRule ^(.*)$ http://www.$DOMAIN/\$1 [R=301,L]" >> "/var/www/$DOMAIN/public_html/.htaccess"

###########################################################
# Apache2 under vagrant user
###########################################################

sed -ri 's/^(export APACHE_RUN_USER=)(.*)$/\1vagrant/' /etc/apache2/envvars
sed -ri 's/^(export APACHE_RUN_GROUP=)(.*)$/\1vagrant/' /etc/apache2/envvars

chown -R vagrant:vagrant /var/lock/apache2
chown -R vagrant:vagrant /var/log/apache2
chown -R vagrant:vagrant /var/www

###########################################################
# Service Restart
###########################################################

service apache2 restart
