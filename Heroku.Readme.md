# Heroku Quickstart 

## Setup

Heroku toolbelt をインストール

https://toolbelt.heroku.com/

`heroku login` コマンドでログイン認証を有効に

````
$ heroku login
````

heroku のダッシュボード上でアプリを作成して、addon等の追加を行ってください。

## Steps

ここでは`taskun-demo`という名前のアプリケーションを作るものとします。

heroku コマンドを用いてgitのリモートにherokuを追加


````
$ heroku git:remote -a taskun-demo
````

`heroku config`コマンドで現在の環境設定一覧を確認します。

````
$ heroku config 
````

`heroku config:set`コマンドで環境設定を修正

````
$ heroku config:set APP_ENV=stating 
````

`heroku buildpacks:set`コマンドで環境設定を修正

````
$ heroku buildpacks:set heroku/php
````

Procfile を確認して、`git push`コマンドでデプロイ

````
$ git push heroku master
````

