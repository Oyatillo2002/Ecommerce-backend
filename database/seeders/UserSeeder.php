<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '+998909909990',
            'password' => Hash::make('secret111'),
        ]);
        $user->assignRole('admin');
        
        $user = User::create([
            'first_name' => 'Sitora',
            'last_name' => 'Qosimova',
            'email' => 'sitora@gmail.com',
            'phone' => '+998909908880',
            'password' => Hash::make('secret111'),
        ]);
        $user->assignRole('editor');

        $user = User::create([
            'first_name' => 'Abbos',
            'last_name' => "To'rayev",
            'email' => 'abbos22@gmail.com',
            'phone' => '+998889909990',
            'password' => Hash::make('secret111'),
        ]);
        $user->assignRole('customer');

        $users = User::factory()->count(10)->create();
        foreach ($users as $user){
            $user->assignRole('customer');
        }
    }
}
