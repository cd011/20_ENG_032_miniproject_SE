## Initializing steps

1. Clone project
2. Open cmd from project folder
3. Run on terminal
	* composer install
	* copy .env.example .env
4. Open .env file and change the database name (DB_DATABASE), username (DB_USERNAME) and password (DB_PASSWORD) field correspond configuration.
5. Run on terminal
	* composer require laravel/jetstream
	* php artisan jetstream:install livewire
	* npm install
	* npm run dev
	* php artisan key:generate
	* php artisan serve
	* php artisan migrate
6. Go to http://localhost:8000/

* MySQL database has to be configured separately.
