# Installation 
Clone repo

	https://github.com/kashwa/clouds-technical-interview.git
Install the composer dependencies

	composer install
	
Save .env.example as .env and put your database credentials

Set application key

	php artisan key:generate        

And Migrate with

`php artisan module:seed AdminModule`
