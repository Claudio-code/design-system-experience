seeds:
	docker exec -it backend-monolith bash -c  "php artisan db:seed"

migrate:
	docker exec -it backend-monolith bash -c  "php artisan migrate"

run-all-tests:
	docker exec -it backend-monolith bash -c  "vendor/bin/phpunit"

coverage:
	docker exec -it backend-monolith bash -c  "vendor/bin/phpunit --coverage-html storage/app/report"

list-all-routes:
	docker exec -it backend-monolith bash -c  "php artisan route:list"

start:
	docker-compose up -d

build:
	docker-compose up -d --build

down:
	docker-compose down

stop:
	docker-compose stop

rm:
	docker-compose rm
