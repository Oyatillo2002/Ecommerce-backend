<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qizil',
                'en' => 'Red',
                'ru' => 'Красный'
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qora',
                'en' => 'Black',
                'ru' => 'Чёрный'
            ]
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Jigarrang',
                'en' => 'Brown',
                'ru' => 'Коричневый'
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'MDF',
                'en' => 'MDF',
                'ru' => 'МДФ'
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'LDSF',
                'en' => 'LDSF',
                'ru' => 'ЛДСФ'
            ]
        ]);

    }
}
