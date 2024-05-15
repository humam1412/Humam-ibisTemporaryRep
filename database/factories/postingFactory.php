<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\posting>
 */
class postingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->sentence(mt_rand(2, 10)),
            'slug'  =>$this->faker->slug(),
            'excerpt' =>$this->faker->paragraph(),
            'body' =>$this->faker->paragraph(mt_rand(5,10)),
            'user_id' => 1,
            'category_id' => 1
        ];
    }
}
