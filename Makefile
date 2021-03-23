container=php

up:
	docker-compose up -d

down:
	docker-compose down

rebuild:
	docker-compose down -v --remove-orphans
	docker-compose rm -vsf
	docker-compose build
	docker-compose up -d

install:
	docker-compose exec -T --user=www-data ${container} composer install

jumpin:
	docker-compose exec --user=www-data ${container} sh
