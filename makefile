install: # установить зависимости
	composer install

brain-games: # запустить игру
	php bin/brain-games

validate:
	composer validate