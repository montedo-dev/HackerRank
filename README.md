# HackerRank
HackerRank challenges with unit test for practicing and for teaching other dev's

# Configuration
Run: composer install

# List available scripts
Run: Composer list

# Scripts to help:
composer verify-php-standards
composer fix-php-standards
composer tests

Raw commands:
Check for errors in your code related to PSR ( PHP Standard recommendations )
vendor/bin/phpcs --standard=PSR12 ./src

Fix errors in your code related to PSR ( PHP Standard recommendations )
vendor/bin/phpcbf --standard=PSR12 ./src"

Run test scripts:
vendor/bin/phpunit tests"