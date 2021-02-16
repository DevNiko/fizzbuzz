# FizzBuzz
A PHP 7.4 CLI program that prints numbers from 1 to n (default 100). For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz".

# Installation
run `composer install` at the root directory

# Usage
- run `php app.php` to start with default length of 100 lines.
- run `php app.php [NUMBER]` to start with n lines. Only numbers greater than 0 are accepted. Use high values (over 1,000,000) at your own risk ;-)
- run tests `./vendor/bin/phpunit tests`

# Requirements
- Composer
- PHP 7.4
