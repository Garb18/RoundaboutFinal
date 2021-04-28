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
                'description' => 'Mexican',
                'rating' => 4.5,
                'price' => 24.99,
                'photo' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fjust-eat-prod-eu-res.cloudinary.com%2Fimage%2Fupload%2Fc_fill%2Cf_auto%2Cq_auto%2Cw_1200%2Ch_630%2Cd_uk%3Acuisines%3Amexican-2.jpg%2Fv1%2Fuk%2Frestaurants%2F95322.jpg',

            ],
            [
                'name' => 'Thai Gallery',
                'description' => 'Thai',
                'rating' => 2.5,
                'price' => 24.99,
                'photo' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fjust-eat-prod-eu-res.cloudinary.com%2Fimage%2Fupload%2Fc_fill%2Cf_auto%2Cq_auto%2Cw_1200%2Ch_630%2Cd_uk%3Acuisines%3Athai-2.jpg%2Fv1%2Fuk%2Frestaurants%2F138572.jpg',

            ],
            [
                'name' => 'Ask Italian',
                'description' => 'Italian',
                'rating' => 5.0,
                'price' => 24.99,
                'photo' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ff.roocdn.com%2Fimages%2Fmenus%2F46021%2Fheader-image.jpg%3Fwidth%3D1200%26height%3D630%26auto%3Dwebp%26format%3Djpg',

            ],
            [
                'name' => 'Ask Italian',
                'description' => 'Italian',
                'rating' => 2.0,
                'price' => 24.99,
                'photo' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ff.roocdn.com%2Fimages%2Fmenus%2F46021%2Fheader-image.jpg%3Fwidth%3D1200%26height%3D630%26auto%3Dwebp%26format%3Djpg',

            ],
            [
                'name' => 'Item Five',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!',
                'rating' => 3.2,
                'price' => 24.99,
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Six',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.',
                'rating' => 4.0,
                'price' => 24.99,
                'photo' => 'http://placehold.it/700x400',

            ],
        ];

        foreach ($products as $product) {
            \App\Product::create($product);
        }
    }
}
