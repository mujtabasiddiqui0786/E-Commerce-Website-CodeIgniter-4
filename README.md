# CodeIgniter 4 Application Starter

## The Directory Flow ?

The Repository contains both the assignments. There is a folder named assignment on the top for the Two IQ questions. Both questions contains the solution with the commands to run it inside the file. 


## Setup

`git clone https://github.com/mujtabasiddiqui0786/mnasati-assignment.git` 


`composer install`


`create a database`


`update the env file, and the app/config/Database.php/` with the database name


`php spark migrate`


`php spark db:seed CategorySeeder; php spark db:seed ProductSeeder; php spark db:seed ProductSubSeeder; php spark db:seed UserSeeder; php spark db:seed ProductSalesSeeder;`


`php spark serve`

## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
# mnasati-assignment
