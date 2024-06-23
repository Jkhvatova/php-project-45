install: # установить зависимости
	composer install
	chmod +x bin/brain-games
	chmod +x bin/brain-even

brain-games:
	php bin/brain-games

brain-even: 
	php bin/brain-even

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

fix: 
	composer exec --verbose phpcbf -- --standard=PSR12 src bin