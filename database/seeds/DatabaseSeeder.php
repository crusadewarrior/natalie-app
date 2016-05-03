<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role, App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'title' => 'Administrator',
            'slug' => 'admin'
        ]);

        Role::create([
            'title' => 'User',
            'slug' => 'user'
        ]);

        User::create([
            'Name' => 'GreatAdmin',
            'email' => 'marvin.bautista23@gmail.com',
            'password' => bcrypt('E096D5A00DD7FD8F42C1'),
            'role_id' => 1,
        ]);

        $this->command->info('User table seeded!');
    }
}
