#!/bin/sh

ssh-keygen -A

adduser -D elovegoo
echo "elovegoo:admin" | chpasswd
/usr/bin/ssh-keygen -A

/usr/bin/supervisord -c /etc/supervisord.conf
