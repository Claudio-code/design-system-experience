composer-install:
	docker exec -it backend-monolith bash -c  "composer install"

start:
	docker-compose up -d && docker exec -it backend-monolith bash -c  "composer install"

build:
	docker-compose up -d --build && docker exec -it backend-monolith bash -c  "composer install"

down:
	docker-compose down

stop:
	docker-compose stop

rm:
	docker-compose rm

run-all-tests:
	docker exec -it backend-monolith bash -c  "vendor/bin/phpunit"
