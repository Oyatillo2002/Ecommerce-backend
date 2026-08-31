<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => rand(1, 5),
            'name' => [
                'uz' => fake()->sentence(3),
                'en' => fake()->sentence(3),
                'ru' => 'Ребёнок получил тяжёлые ранения',
            ],
            'price' => rand(50000, 10000000),
            'description' => [
                'uz' => fake()->paragraph(5),
                'en' => fake()->paragraph(5),
                'ru' => 'Водители в России смогут предъявить инспектору ГИБДД QR-код водительского удостоверения и СТС машины через «Макс».',
            ]
        ];
    }
}
