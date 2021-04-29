# RoundaboutFinal
## How to use

- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (populates the databse with testing data)
- Optional - Included an sql dump if you would rather use that
- Run `npm install`
- Run `npm run watch`
- In a seperate terminal window: Run `php artisan servce`
- That's it: launch the main URL. 
