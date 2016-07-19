Laravel project to handle Geolocation and serve page based on User's country. It uses localization feature of the laravel to serve diffrent page and detects users' country via Maxmind GEO IP API.



To setup project,

1. change .env file for database details.
2. php artisan migrate
3. php artisan db:seed
4. php artisan serve