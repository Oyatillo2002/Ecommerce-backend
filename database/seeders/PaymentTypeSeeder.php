<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentType::create([
            'name' => [
                'uz' => 'Naqd',
                'en' => 'Cash',
                'ru' => 'Наличные',
            ]
        ]);

        PaymentType::create([
            'name' => [
                'uz' => 'Terminal',
                'en' => 'Terminal',
                'ru' => 'Терминал',
            ]
        ]);

         PaymentType::create([
            'name' => [
                'uz' => 'Payme',
                'en' => 'Payme en',
                'ru' => 'Payme ru',
            ]
        ]);

         PaymentType::create([
            'name' => [
                'uz' => 'Click',
                'en' => 'Click en',
                'ru' => 'Click ru',
            ]
        ]);

         PaymentType::create([
            'name' => [
                'uz' => 'Uzum',
                'en' => 'Uzum en',
                'ru' => 'Uzum ru',
            ]
        ]);
    }
}
