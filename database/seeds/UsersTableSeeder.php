<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$9B3u7foOGT14nqTi8YXhaOFu0rlg0MzQOOQbW1f8FCNrhpZyXrGnq',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
