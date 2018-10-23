#!/usr/bin/env bash
# default value for first comand line argument - dump destination
BACKUP_FILE=${1:-/backup/a0236142_app_joomla_0.sql}
CMD="exec mysqldump -uroot -p\"\$MYSQL_ROOT_PASSWORD\" a0236142_app_joomla_0 > $BACKUP_FILE"
# echo $CMD

RES=`docker-machine status default`
if [[ $RES == Running ]] ;
then
    echo docker-machine running
    eval $(docker-machine env default)
fi

echo Dump to $BACKUP_FILE
docker exec snt-vector_joomla_mysql_1 sh -c "$CMD"