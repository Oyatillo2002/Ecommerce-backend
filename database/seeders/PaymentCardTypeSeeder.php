<?php

namespace Database\Seeders;

use App\Models\PaymentCardType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentCardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentCardType::create([
            'name' => 'uzcard',
            'code' => 'uzcard_num',
            'icon' => 'uzcard_icon',
        ]);

        PaymentCardType::create([
            'name' => 'humo',
            'code' => 'humo_num',
            'icon' => 'humo_icon',
        ]);

        PaymentCardType::create([
            'name' => 'visa',
            'code' => 'visa_num',
            'icon' => 'visa_icon',
        ]);
    }
}
