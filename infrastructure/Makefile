up:
	docker-compose -p onlineprescribe up -d
build:
	docker-compose -p onlineprescribe build --no-cache --force-rm
init:
	docker-compose -p onlineprescribe up -d --build
	docker-compose -p onlineprescribe exec server cp .env.example .env
	docker-compose -p onlineprescribe exec server composer install
	@make migrate
	@make seeds
setup:
	docker-compose -p onlineprescribe exec app composer setup
stop:
	docker-compose -p onlineprescribe stop
down:
	docker-compose -p onlineprescribe down
restart:
	@make down
	@make up
ps:
	docker-compose -p onlineprescribe ps
logs:
	docker-compose -p onlineprescribe logs
logs-watch:
	docker-compose -p onlineprescribe logs --tail=500 --follow
web:
	docker-compose -p onlineprescribe exec web ash
app:
	docker-compose -p onlineprescribe exec app bash
db:
	docker-compose -p onlineprescribe exec db bash
server:
	docker-compose -p onlineprescribe exec server bash
migrate:
	docker-compose -p onlineprescribe exec server php artisan migrate
migrate-rollback:
	docker-compose -p onlineprescribe exec server php artisan migrate:rollback
migrate-install:
	docker-compose -p onlineprescribe exec server php artisan migrate:install
seeds:
	docker-compose -p onlineprescribe exec server php artisan db:seed --database=mysql
cs-app:
	docker-compose -p onlineprescribe exec app composer cs
config-clear:
	docker-compose -p aipass exec server php artisan config:clear
cache-clear:
	docker-compose -p aipass exec server php artisan cache:clear
	docker-compose -p aipass exec server php artisan route:clear
opcache-clear:
	docker-compose -p aipass exec server php artisan opcache:clear
	docker-compose -p aipass exec server php artisan opcache:compile --force