<?php

namespace Database\Seeders;

use App\Enums\SettingType;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = Setting::create([
            'name' => [
                'uz' => 'Til',
                'en' => 'Language',
                'ru' => 'Язык'
            ],
            'type' => SettingType::SELECT->value,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'Uzbekcha',
                'en' => 'Uzbekcha',
                'ru' => 'Uzbekcha'
            ]
        ]);
        $setting->values()->create([
            'name' => [
                'uz' => 'Inglizcha',
                'en' => 'Inglizcha',
                'ru' => 'Inglizcha'
            ]
        ]);
        $setting->values()->create([
            'name' => [
                'uz' => 'Ruscha',
                'en' => 'Ruscha',
                'ru' => 'Ruscha'
            ]
        ]);

        $setting = Setting::create([
            'name' => [
                'uz' => 'Pul birligi',
                'en' => 'Currency unit',
                'ru' => 'Денежная единица'
            ],
            'type' => SettingType::SELECT->value,
        ]);

        $setting->values()->create([
            'name' => [
                'uz' => 'So\'m',
                'en' => 'Soum',
                'ru' => 'Соум
'
            ]
        ]);
        $setting->values()->create([
            'name' => [
                'uz' => 'Dollar',
                'en' => 'Dollar',
                'ru' => 'Доллар'
            ]
        ]);

        $setting = Setting::create([
            'name' => [
                'uz' => 'Dark rejim',
                'en' => 'Dark Mode',
                'ru' => 'Темный режим'
            ],
            'type' => SettingType::SWITCH->value,
        ]);

        $setting = Setting::create([
            'name' => [
                'uz' => 'Xabarnomalar',
                'en' => 'Notifications',
                'ru' => 'Уведомления'
            ],
            'type' => SettingType::SWITCH->value,
        ]);
        
    }
}
