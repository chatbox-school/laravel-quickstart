# Heroku Quickstart 

## Setup

Heroku toolbelt をインストール

https://toolbelt.heroku.com/

`heroku login` コマンドでログイン認証を有効に

````
$ heroku login
````

heroku のダッシュボード上でアプリを作成して、addon等の追加を行ってください。

## First Deploy

ここでは`taskun-demo`という名前のアプリケーションを作るものとします。

heroku コマンドを用いてgitのリモートにherokuを追加


````
$ heroku git:remote -a taskun-demo
````

`heroku buildpacks:set`コマンドで環境設定を修正

````
$ heroku buildpacks:set heroku/php
````

Procfile を確認して、`git push`コマンドでデプロイ

````
$ git push heroku master
````

`heroku open`コマンドでアプリケーションを起動

````
$ heroku open
````

## Setting up

データベースの接続設定を行う。
heorku postgresを接続し、`heroku config`コマンドで接続情報の確認を行う。

````
$ heroku config 
=== taskun-demo Config Vars
DATABASE_URL: postgres://{DB_USERNAME}:{DB_PASSWORD}@{DB_HOST}:{DB_PORT}/{DB_DATABASE}
````

`heroku config:set `で`.env`ファイル相当の設定を追記していく。

````
$ heroku config:set DB_CONNECTION=pgsql
$ heroku config:set DB_HOST=
$ heroku config:set DB_DATABASE=
$ heroku config:set DB_USERNAME=
$ heroku config:set DB_PASSWORD=
````

Herokuのone-off dynoを起動して、  
Herokuにログインし、データベースを作成する。

````
$ heroku run bash
Running bash on taskun-demo... up, run.8257
~ $ php artisan migrate
Migration table created successfully.
Migrated: 2014_10_12_000000_create_users_table
Migrated: 2014_10_12_100000_create_password_resets_table
Migrated: 2015_10_27_141258_create_tasks_table
~ $ 
````

## Mail配信機能の追加

## ログ管理機能の追加



