# バックエンドリプレイス

## 環境構築

```sh
$ cd ../infrastructure
// 初回
$ make init
// 以降
$ make up

$ open http://localhost:8081/

// keyがない場合は生成
$ make key-generate

// コンフィグ削除
make config-clear
```

## Laravel コマンド (後で make ファイルに移す)

### コントローラー作成

```sh
$ docker-compose exec backend php artisan make:controller TodoAPIController
```

### モデル作成(マイグレーションファイルも作成)

```sh
$ docker-compose exec backend php artisan make:model Todo --migration
```

### マイグレーション

```sh
$ make migrate
```

### マイグレーション\_testDB

```sh
$ make migrate-test
```

### テストデータ投入\_testDB

```sh
$ make seeds-init
```

### バリデーションファイル

```sh
$ docker-compose exec backend php artisan make:request StoreTodo
```

### ドキュメント生成

```sh
$ make doc-generate
```

### テスト

```sh
$ make test
```

### フォーマッター

```sh
make cf-fix
```

## Architecture
onlineprescribeのバックエンドでは[Clean Architecture](https://blog.cleancoder.com/uncle-bob/2012/08/13/the-clean-architecture.html) を採用しています。  
プロダクトの成長速度とチーム規模(6〜10名)を考え最小構成でもオーバースペックでもなくベストな構成を考えています。  
BEAR.Sundayから移行した為、 Repository関連は後追いで徐々に対応していく方針です。  

```
server
├── app
│    └── Console
│    │ └── Kernel
│    │
│    └── Domain
│    │ └── RepositoryInterface
│    │   └── AdminCheckinList
│    │     └── AdminCheckinListRepositoryInterface.php
│    │
│    └── Enums
│    └── Http
│    │ └── Controllers
│    │ │ └── AdminCheckinListController.php
│    │ │
│    │ └── Middleware
│    │ │
│    │ └── Request
│    │ │ └── AdminCheckinList
│    │ │   └── AdminCheckinListIndexRequest.php
│    │ │   └── AdminCheckinListUpdateRequest.php
│    │ │
│    │ └── Response
│    │ │ └── AdminCheckinList
│    │     └── AdminCheckinListIndexResponse.php
│    │     └── AdminCheckinListUpdateResponse.php
│    │
│    └── infrastructure
│    │ └── Repository
│    │   └── AdminCheckinList
│    │     └── AdminCheckinListRepository.php
│    │
│    └── Usecase
│      └── Checkin
│        └── Hotel
│          └── AdminCheckinListIndexUsecase.php
│          └── AdminCheckinListUpdateUsecase.php
│
├── resources
├── database
│    └── factories
│    └── migrations
│    └── seeders
├── public
└── tests
│    └── Feature
│      └── snapshot
│      └── e2e
│    └── seeders
```
| クリーンアーキテクチャ(本家)                                  | クリーンアーキテクチャ(レイヤー分参考                                 | onlineprescribeでのクリーンアーキテクチャ                                  | 
| --------------------------------------- | -------------------------------------- | --------------------------------------- | 
|![ca1](https://user-images.githubusercontent.com/6016273/157372546-6358fd28-f3a7-4bdc-8a64-126c9bd9d6b8.png) |　![ca2](https://user-images.githubusercontent.com/6016273/157372564-be60e8d2-3c36-40ec-93a9-80bc1a7c8c2a.png) | ![onlineprescribe-ca](https://user-images.githubusercontent.com/6016273/157372641-f19d810e-084e-4324-a4b1-8820dfbf8610.png) |


### Laravelの方針について
Laravelの機能をしっかり使用出来る方針にする為、 `packages` は今回は作成しません。
BEAR.Sundayの時と違い、Laravelに関するOSSはチームでしっかり議論し有効活用してく。

### orm 
ORM(Object-Relational Mapping)及びEloquentに関しては売上データ、予約データ、チェックインデータ共に膨大なデータ量が予測される為、今回は使用しない方針です。  
SQLに関しては属人化しやすい為、Repositoryを採用しています。  
これに伴いチームのSQLレベルがある程度高いレベルである事を必須にしています。

### Controllers
- Application層 (Controllers)
- Request、Response、Usecase、をオーケストレーションしてます。

### Request
- Application層 (Controllers)
- APIのRequestを定義しています。

### Response
- Application層 (Controllers)
- APIのResponseを定義しています。

### Usecase
- DomainService層 (Use Cases)
- メイン(ビジネス)ロジック。ここでビジネスに関するロジックを作り上げていきます。

### infrastructure
- infrastructure層 (DB & Gateways)
- Repositoryを定義します。ここでのRepositoryはDBとの接続を責務としています。
- RepositoryはGatewaysの役割を担い、DBとユースケースのアダプターとしての役割になります。
- DomaiModelで定義したRepositoryの具象クラスとなります。

### Domain
- DomainModel層 (Entities)
- 今回のチーム規模ではDomainまでは定義しません。ここではRepositoryInterfaceのみの定義していきます。
- ユースケースで必要なDBの関心事は全てDomainModelでRepositoryInterfaceとして定義していきます。

### tests
- e2e、snapshot
