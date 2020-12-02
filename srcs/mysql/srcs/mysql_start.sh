#!/bin/sh

openrc default
/etc/init.d/mariadb setup
rc-service mariadb start

mysql < /tmp/init_db.sql
mysql wordpress < /tmp/wordpress.sql

rc-service mariadb stop

/usr/bin/mysqld_safe
# exec /usr/bin/mysqld --user=root --console
