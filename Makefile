lint:
	php/vendor/bin/phpcs -- --standard=PSR2 src bin tests
test:
	php/vendor/bin/phpunit tests/
