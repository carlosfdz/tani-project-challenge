<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Carlos Fernandez',
                'email' => 'fernandez.isc@gmail.com',
                'password' => bcrypt('12345abcde')
            ],
        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
