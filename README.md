# chat-app


composer update
<br>
cp .env.example .env
<br>
npm install
<br>
php artisan make:auth
<br>
php artisan migrate --seed
<br>
php artisan key:generate
<br>
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"
<br>
php artisan migrate
<br>
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"
<br>
php artisan serve
<br>
npm run watch

login and then enter to chatroom 
<br>
enjoy ^_^
