# お問い合わせフォーム

## 環境構築
- Dockerビルド
  1. git clone git@github.com:taku0127/coachtech-test.git
  2. docker-compose up -d --build
  ※MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて docker-compose.yml ファイルを編集してください。
- Laravel環境構築
  1. docker-compose exec php bash
  2. composer install
  3. .env.exampleファイルから.envを作成し、環境変数を設定
  4. php artisan key:generate
  5. php artisan migrate
  6. php artisan db:seed
## 使用技術(実行環境)
- Laravel 8.83
- PHP 7.4
- MySQL 8.0

## ER図
![test2](https://github.com/user-attachments/assets/9efaf141-8b2b-443f-beaa-2ef5c4f645df)

## URL
- 開発環境：http://localhost/
- 開発環境(phpmyadmin)：http://localhost:8080/
