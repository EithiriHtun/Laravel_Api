<?php

namespace Database\Factories\Model;
use Faker\Generator as Faker;
use App\Models\Model;

use Illuminate\Database\Eloquent\Factories\Factory;

// $factory->define(App\Models\Model\Review::class, function (Faker $faker) {

//     return [

//         'product_id' => function() {
//             return Product::all()->random();
//         },
//         'customer' => $faker->name,
//         'review' => $faker->paragraph,
//         'star' => $faker->numberBetween(0,5),

//     ];
// });

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

                    'product_id' => function() {
                        return Product::all()->random();
                    },
                    'customer' => $this->faker->name,
                    'review' => $this->faker->paragraph,
                    'star' => $this->faker->numberBetween(0,5),
            
                ];
    }
}
