<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Chesters',
                'costly' => '$$',
                'foodType' => 'Mexican',
                'venueType' => 'Restaurant',
                'description' => 'Authentic Mexican Food',
                'rating' => 4.5,
                'ratingAmount' => 17,
                'photo' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fjust-eat-prod-eu-res.cloudinary.com%2Fimage%2Fupload%2Fc_fill%2Cf_auto%2Cq_auto%2Cw_1200%2Ch_630%2Cd_uk%3Acuisines%3Amexican-2.jpg%2Fv1%2Fuk%2Frestaurants%2F95322.jpg',

            ],
            [
                'name' => 'Thai Gallery',
                'costly' => '$$$',
                'foodType' => 'Thai',
                'venueType' => 'Restaurant',
                'description' => 'Authentic Thai Food',
                'rating' => 5.0,
                'ratingAmount' => 31,
                'photo' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fjust-eat-prod-eu-res.cloudinary.com%2Fimage%2Fupload%2Fc_fill%2Cf_auto%2Cq_auto%2Cw_1200%2Ch_630%2Cd_uk%3Acuisines%3Athai-2.jpg%2Fv1%2Fuk%2Frestaurants%2F138572.jpg',

            ],
            [
                'name' => 'Ask Italian',
                'costly' => '$$',
                'foodType' => 'Italian',
                'venueType' => 'Restaurant',
                'description' => 'Authentic Italian Food',
                'rating' => 4.0,
                'ratingAmount' => 87,
                'photo' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ff.roocdn.com%2Fimages%2Fmenus%2F46021%2Fheader-image.jpg%3Fwidth%3D1200%26height%3D630%26auto%3Dwebp%26format%3Djpg',

            ],
            [
                'name' => 'Coffee #1',
                'costly' => '$',
                'foodType' => 'Coffee/Nibbles',
                'venueType' => 'Café',
                'description' => 'Popular chain Café',
                'rating' => 3.7,
                'ratingAmount' => 127,
                'photo' => 'https://media-cdn.tripadvisor.com/media/photo-s/0e/54/fe/d8/worcester.jpg',

            ],
            [
                'name' => 'Bills',
                'costly' => '$$$',
                'foodType' => 'Grill/Burger',
                'venueType' => 'Restaurant',
                'description' => 'Classic grill favourites',
                'rating' => 2.5,
                'ratingAmount' => 3,
                'photo' => 'https://media-cdn.tripadvisor.com/media/photo-s/0f/b1/12/96/photo0jpg.jpg',

            ],
            [
                'name' => 'Heroes Bar',
                'costly' => '$',
                'foodType' => 'Alcohol/Nibbles',
                'venueType' => 'Bar',
                'description' => 'Rock music and pints',
                'rating' => 4.2,
                'ratingAmount' => 127,
                'photo' => 'https://www.worcestermusicfestival.co.uk/venue-images/hereos-1024.jpg',

            ],
        ];

        foreach ($products as $product) {
            \App\Product::create($product);
        }
    }
}
