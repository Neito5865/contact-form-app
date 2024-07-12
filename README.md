# お問い合わせフォーム
お客様からのお問い合わせフォーム送信と、お問い合わせ内容やお客様情報を管理する管理画面を表示するアプリケーションとなっています。

## 環境構築
1. リポジトリのクローン
```
git clone git@github.com:Neito5865/contact-form-app.git
docker-compose up -d --build
```
＊MySQLは、OSによって起動しない場合があるので、それぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

2. Dockerのビルド
```
cd contact-form app
docker-compose up -d --build
```

### Laravel環境構築
1. PHPコンテナへログイン
```
docker-compose exec php bash
```

2. パッケージのインストール
```
composer install
```

3. .env.exampleファイルから.envファイルを作成する
```
cp .env.example .env
```

4. 環境変数を変更する
.envファイルの11行目以降を以下のように編集する
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

5. キーを作成する
```
php artisan key:generate
```

6. マイグレーションの実行
```
php artisan migrate
```

7. シーディングの実行
```
php artisan db:seed
```

## 使用技術
- PHP 8.3.8
- Laravel 10.0
- MySQL 8.0.26

## ER図

## URL
### 開発環境
- お問い合わせフォーム： http://localhost/
- 管理画面： http://localhost/admin
＊管理画面へアクセスするとログイン認証機能によりログイン画面へ遷移します。

### phpMyAdmin
http://localhost:8080
