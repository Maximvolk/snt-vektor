Snt-vector based on Joomla Framework
====================================

[Настройка окружения для PHP разработчиков](https://habr.com/post/314032/)

[Как сверстать шаблон для Joomla](https://habr.com/post/256635/)

Проблема при настройке окружения для docker-machine. 
Сделал image и собрал его на новом Mac и разместил его в [Docker Hub](https://hub.docker.com/)
```bash
# init environment for docker-machine
eval $(docer-machine env default)
docker login
docker tag snt-vector_joomla_web sv99/snt-vector_joomla_web
docker push sv99/snt-vector_joomla_web
```

Размер snt-vector_joomla_web 164Mb

mysql
-----

У провайдер sprinthost.ru MySQL version 5.7.22-22
```sql
SELECT VERSION();
# Create if not exists
CREATE DATABASE IF NOT EXISTS a0236142_app_joomla_0 CHARACTER SET utf8 COLLATE utf8_unicode_ci;
```
База данных a0236142_app_joomla_0

Если монтировать каталог для хранения баз в /var/lib/mysql
то не создается база, указанная в MYSQL_DATABASE.
Если его не монтировать, то база создается.
Выяснил, что в docker-machine mysql не работает с примонтированной
через VirtualBox папкой - ругается на права.
Пришлось отказаться от сохранения данных и сделать два скрипта для
оперативной загрузки данных в рабочий образ через примонтированную папку backup.
```bash
# file name optional - default /backup/a0236142_app_joomla_0.sql
./restore_db.sh <backup/backup_name.sql>
./dump_db.sh <backup/dump_name.sql>
```

Для работы с локальным apache нужно расшарить порт 3306, после этого к базе можно
подкючиться, например Navicat.

Выбор сервера для локальной разработки
--------------------------------------

Попрбовали docker-machine - проблемы производительности при работе через 
volumes. Mysql вообще не запустился, Web сервер запустился, но страницу получаем
через 10 секунд, работать невозможно.

Несколько улучшилась ситуация когда начали копировать файлы в docker контейнер.

Последний вариант сервера - разворачивание на установленном в системе apache.

joomla
------
Deployment by FTP


```bash

```
