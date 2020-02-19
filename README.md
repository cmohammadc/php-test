# php-test

# ok , how use it

## first install docker and docker-compose
```

git clone https://github.com/cmohammadc/php-test.git
cd php-test/
docker-compose up -d
docker exec -it lemp-php sh
cd website/test
composer install
exit
./vendor/bin/phpunit src/AddTwoNumbersTest.php
```
