<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Anderson Gonzalez',
            'email' => 'andersongb1007@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Jesus Perera',
            'email' => 'jesus2perera3@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Carlos Perez',
            'email' => 'karlosdanielp93',
            'password' => bcrypt('12345678')
        ]);

        User::factory(20)->create();
    }
}
