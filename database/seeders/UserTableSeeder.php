<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@app.com',
                'password'       => '$2y$10$8fsWdV6LTkcK2z9zeTsnwuicY06CGgWCKVZvfrPUky3Vkj2xhh4JS',
                'remember_token' => null,
                'class_id'       => null,
            ],

        ];

        User::insert($users);
    }
}
