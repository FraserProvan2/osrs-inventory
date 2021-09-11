
up:
	./vendor/bin/sail up

down:
	./vendor/bin/sail down

clear_cache:
	php artisan route:clear
	php artisan config:clear
	php artisan view:clear