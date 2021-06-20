# learn_kintai

laravelの知識を高めるため学習用アプリkintai

## Overview

## 環境

-   Laravel 8.*
-   MySQL 8.0
-   Redis 
-   Docker 20.10.2
-   docker-compose 1.27.4

## Installation

-   clone

```bash
$ git clone git@github.com:akiyoshi-takazwa/learn-kintai.git
$ cd learn-kintai
```

- install

```
$ make install
```

-   ローカル開発用 URL を開き動作確認

ユーザー URL: http://at-kintai.test
admin URL: http://admin.at-kintai.test

## How to

-   コンテナの状態を確認

```bash
$ make ps
```

-   コンテナにアタッチする

```bash
$ make laravel
$ make db
$ make cache
```

-   キャッシュクリア

```bash
$ make cache
```


