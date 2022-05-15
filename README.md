Based on Laravel 9.15 and PHP 8.1.5 (from Homestead).
The basic configurations can be and should be set in the .env file.
Dumped sql file is attached.

composer update && npm install will install the packages from their respective files.

php artisan migrate:fresh --seed will clear the database, rerun the migrations and execute the seeder for some default data.

Currently the user credentials are the following:
test@teszt.hu
teszt