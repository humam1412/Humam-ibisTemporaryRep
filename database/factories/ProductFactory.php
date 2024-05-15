<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
                'name' =>$this->faker->sentence(mt_rand(1, 3)),
                'price'  => '1000 rupiah',
                'description' => $this->faker->paragraph(mt_rand(5,10)),
              
                'category_id' => 1
            
        ];
    }
}
