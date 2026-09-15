<?php

namespace Database\Seeders;
use App\Models\Attribute;
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
        $attribute = Attribute::find(1);

        $attribute->values()->create([
            'name' => [
                'uz' => 'Qizil',
                'en' => 'Red',
                'ru' => 'Красный'
            ]
        ]);

        $attribute->values()->create([
            'name' => [
                'uz' => 'Qora',
                'en' => 'Black',
                'ru' => 'Чёрный'
            ]
        ]);

       $attribute->values()->create([
            'name' => [
                'uz' => 'Jigarrang',
                'en' => 'Brown',
                'ru' => 'Коричневый'
            ]
        ]);

        $attribute = Attribute::find(2);

        $attribute->values()->create([
            'name' => [
                'uz' => 'MDF',
                'en' => 'MDF',
                'ru' => 'МДФ'
            ]
        ]);

       $attribute->values()->create([
            'name' => [
                'uz' => 'LDSF',
                'en' => 'LDSF',
                'ru' => 'ЛДСФ'
            ]
        ]);

    }
}
