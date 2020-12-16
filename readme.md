# Role base login app (Current: Laravel 5.6)

- This application is basic scaffolding for role base user login.

- Demo of the onboarding user tours, you will see that on login page.

# Setup

- Run `composer install`

- Copy `.env.example` to `.env` Example for linux users : `sudo cp .env.example .env`

- set the permission to storage directory

    `sudo chmod -Rf 0777 storage/`

- Run `php artisan key:generate` to generate application key

- run the migration using following command
    
    `php artisan migrate` 
    
- ***Note:-*** if you have error then run the command in console with project directory. 
    
    `composer require doctrine/dbal` 

- Run your application with `php artisan serve` or `http://localhost/laravel-register-app/public/`
