up:
	docker-compose up -d
build:
	docker-compose build --no-cache --force-rm
init:
	docker-compose up -d --build
	docker-compose exec app composer install
	docker-compose exec app cp .env.dist .env
	@make setup
	@make migrate
	@make seeds
setup:
	docker-compose exec app composer setup
serve:
	docker-compose exec app composer compile
	docker-compose exec app composer serve
deploy:
	@make stop
	@make up
	docker-compose exec app composer compile
	sudo chmod -R 777 ../backend/var/tmp/
migrate:
	docker-compose exec app composer migrate
seeds:
	docker-compose exec app composer seeds
cs:
	docker-compose exec app composer cs
cs-fix:
	docker-compose exec app composer cs-fix
remake:
	@make destroy
	@make init
stop:
	docker-compose stop
down:
	docker-compose down
restart:
	@make down
	@make up
destroy:
	docker-compose down --rmi all --volumes
destroy-volumes:
	docker-compose down --volumes
ps:
	docker-compose ps
logs:
	docker-compose logs
logs-watch:
	docker-compose logs --tail=500 --follow
web:
	docker-compose exec web ash
app:
	docker-compose exec app bash
db:
	docker-compose exec db bash
