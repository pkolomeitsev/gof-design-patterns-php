# (GoF) Design Patterns examples in PHP
This is mini workshop to build & test Design Patterns examples 

Install dependencies
```
composer install
```
Run application
```
php index.php --type=structural --pattern=bridge

php index.php --help
```

Run unit test

```
vendor/phpunit/phpunit/phpunit
```

Test coverage

```
vendor/phpunit/phpunit/phpunit --coverage-text --coverage-html tests/report
```
See test coverage results in `tests/report` directory.
