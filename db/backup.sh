#!/usr/bin/sh
mariadb-dump gamedb -uroot -ptiti > /root/Backup-`(date -I)`.sql
echo "Sauvegarde terminée"