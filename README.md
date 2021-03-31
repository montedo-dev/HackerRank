# HackerRank
HackerRank challenges with unit test for practicing and for teaching other dev's

# Configuration
Run: composer install

# List available scripts
Run: Composer list

# Scripts to help:
composer verify-php-standards <br>
composer fix-php-standards <br>
composer tests

Raw commands:
Check for errors in your code related to PSR ( PHP Standard recommendations ) <br>
vendor/bin/phpcs --standard=PSR12 ./src <br><br>

Fix errors in your code related to PSR ( PHP Standard recommendations ) <br>
vendor/bin/phpcbf --standard=PSR12 ./src" <br><br>

Run test scripts:<br>
vendor/bin/phpunit tests"
