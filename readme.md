# gis-sample

「docker-compose up -d」で立ち上げると「FATAL:  password authentication failed for user "postgres"」のエラーが出る為下記対処が必要です。

```
$ docker-compose exec postgresql bash
postgres@a79631b31069:/$ psql
psql (14.5 (Debian 14.5-1.pgdg110+1))
Type "help" for help.

postgres=# ALTER ROLE postgres WITH PASSWORD 'passw0rd';
ALTER ROLE
```