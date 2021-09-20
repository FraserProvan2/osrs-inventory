
up:
	./vendor/bin/sail up

down:
	./vendor/bin/sail down

share:
	./vendor/bin/sail share

build:
	./vendor/bin/sail build --no-cache

clear_cache:
	php artisan route:clear
	php artisan config:clear
	php artisan view:clear