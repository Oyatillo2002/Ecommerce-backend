<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
                'uz' => 'Stol',
                'en' => 'Table',
                'ru' => 'Стол'
            ],
        ]);
        
        Category::create([
            'name' => [
                'uz' => 'Divan',
                'en' => 'Sofa',
                'ru' => 'Диван'
            ],
        ]);

        $category = Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'en' => 'Armchair',
                'ru' => 'Кресло'
            ],
        ]);
        $category->childCategories()->create([
            'name' => [
                'uz' => 'Office',
                'en' => 'Office',
                'ru' => 'Office ru'
            ],
        ]);

        $childCategory = $category->childCategories()->create([
            'name' => [
                'uz' => 'Gaming',
                'en' => 'Gaming',
                'ru' => 'Gaming ru'
            ],
        ]);
        $childCategory->childCategories()->create([
            'name' => [
                'uz' => 'Rgb',
                'en' => 'Rgb',
                'ru' => 'Rgb ru'
            ],
        ]);
        $childCategory->childCategories()->create([
            'name' => [
                'uz' => 'Women',
                'en' => 'Women',
                'ru' => 'Women ru'
            ],
        ]);
        $childCategory->childCategories()->create([
            'name' => [
                'uz' => 'Black',
                'en' => 'Black',
                'ru' => 'Black ru'
            ],
        ]);

         $category->childCategories()->create([
            'name' => [
                'uz' => 'Yumshoq',
                'en' => 'Yumshoq',
                'ru' => 'Yumshoq ru'
            ],
        ]);

        Category::create([
            'name' => [
                'uz' => 'Yotoq',
                'en' => 'Bed',
                'ru' => 'Кровать'
            ],
        ]);

        Category::create([
            'name' => [
                'uz' => 'Stul',
                'en' => 'Chair',
                'ru' => 'Стул'
            ],
        ]);
    }
}
