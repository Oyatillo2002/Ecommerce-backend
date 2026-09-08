<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '+998909909990',
            'password' => Hash::make('secret111'),
        ]);

        $admin->roles()->attach(1);

        $admin = User::create([
            'first_name' => 'Abbos',
            'last_name' => "To'rayev",
            'email' => 'abbos22@gmail.com',
            'phone' => '+998889909990',
            'password' => Hash::make('secret111'),
        ]);

        $admin->roles()->attach(2);

        User::factory()->count(10)->hasAttached(Role::find(2))->create();
    }
}
