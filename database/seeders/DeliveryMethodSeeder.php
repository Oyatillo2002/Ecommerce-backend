<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryMethod::create([
            'name' =>[
                'uz' => 'Tekin',
                'en' => 'Free',
                'ru' => 'Бесплатно',
            ],
            'estimated_time' =>[
                'uz' => '5 kun',
                'en' => '5 days',
                'ru' => '5 день ',
            ],
            'price' => 0,
        ]);

        DeliveryMethod::create([
            'name' =>[
                'uz' => 'Standart',
                'en' => 'Standart',
                'ru' => 'Стандартный',
            ],
            'estimated_time' =>[
                'uz' => '3 kun',
                'en' => '3 days',
                'ru' => '3 день ',
            ],
            'price' => 40000,
        ]);

        DeliveryMethod::create([
            'name' =>[
                'uz' => 'Tez',
                'en' => 'Quick',
                'ru' => 'Быстрый',
            ],
            'estimated_time' =>[
                'uz' => '1 kun',
                'en' => 'a day',
                'ru' => 'в день ',
            ],
            'price' => 80000,
        ]);
    }
}
