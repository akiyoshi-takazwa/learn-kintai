up:
	docker-compose up -d
build:
	docker-compose build
install:
	docker-compose up -d --build
	docker-compose exec laravel.test composer install
	docker-compose exec laravel.test cp .env.example .env
	docker-compose exec laravel.test php artisan key:generate
	docker-compose exec laravel.test php artisan migrate:fresh --seed
down:
	docker-compose down
ps:
	docker-compose ps
laravel:
	docker-compose exec laravel.test bash
fresh:
	docker-compose exec laravel.test php artisan migrate:fresh --seed
seed:
	docker-compose exec laravel.test php artisan db:seed
tinker:
	docker-compose exec laravel.test php artisan tinker
test:
	docker-compose exec laravel.test php ./vendor/bin/phpunit
cache:
	docker-compose exec laravel.test composer dump-autoload -o
	docker-compose exec laravel.test php artisan optimize:clear
	docker-compose exec laravel.test php artisan optimize
cache-clear:
	docker-compose exec laravel.test php artisan optimize:clear
db:
	docker-compose exec mysql bash
sql:
	docker-compose exec mysql bash -c 'mysql -u root -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
