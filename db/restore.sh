#!/usr/bin/sh
mariadb gamedb -uroot -ptiti < /root/init.sql
echo "Restauration terminée"