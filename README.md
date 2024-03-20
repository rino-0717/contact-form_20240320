# contact-form_20240320
お問い合わせフォーム

・環境構築
Dockerビルド
1,git cloneリンク：https://github.com/rino-0717/contact-form_20240320.git
2,docker-compose up -d -build
※MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせて docker-compose.ymlファイルを編集してください。

・Laravel環境構築
1,docker-compose exec php bash
2,composer install
3,.env.exampleファイルから.envを作成し、環境変数を変更
4,php artisan key:generate
5,php artisan migrate
6,php artisan db:seed

・使用技術
PHP：8.3.2
Laravel：8
MySQL：8.0.26

・URL
1,環境構築：http://localhost:89/
2,phpMyAdmin：http://localhost:8080/
