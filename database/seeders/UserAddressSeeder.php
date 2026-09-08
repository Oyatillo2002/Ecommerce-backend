<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::find(2)
            ->addresses()
            ->create([
                'latitude' => '6797876.4563',
                'longitude' => '8787.3535',
                'region' => 'Andijon',
                'district' => 'Jalaquduq',
                'street' => "Obod ko'chasi",
                'home' => '8',
            ]);

        User::find(2)
            ->addresses()
            ->create([
                'latitude' => '4534343.4563433',
                'longitude' => '343443.453453',
                'region' => 'Andijon',
                'district' => "Do'stlik",
                'street' => "A.Temur ko'chasi",
                'home' => '54',
            ]);
    }
}
