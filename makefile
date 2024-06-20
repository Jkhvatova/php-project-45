install: # установить зависимости
	composer install
	chmod +x bin/brain-games

brain-games: # запустить игру
	php bin/brain-games

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

fix: 
	composer exec --verbose phpcbf -- --standard=PSR12 src bin