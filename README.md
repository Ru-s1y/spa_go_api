# PHP Go API

```
$ cd /path/to/project && touch .env
```

ENVファイルの中身
```
POSTGRES_USER=
POSTGRES_PASSWORD=
POSTGRES_DB=

MYSQL_ROOT_PASSWORD=
MYSQL_DATABASE=
MYSQL_USER=
MYSQL_PASSWORD=

REDIS_PORT=
REDIS_PASSWORD=
```

Dockerの起動
```
$ docker-compose up -d
```

```
$ docker-compose exec php bash
# composer install
```

|Container|Port|
|--|:--:|
|PHP|8080|
|MySQL|3306|
|Go|23450|
|PostgreSQL|5432|
|PhpMyAdmin|8888|

## mysqlがつながらない時
https://codeaid.jp/blog/docker-mysql-php/
