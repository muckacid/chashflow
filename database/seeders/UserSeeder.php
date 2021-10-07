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
            'name' => 'Maximiliano Ignacio Moraga',
            'email' => 'max@gmail.com',
            'password' => bcrypt('12345678')
        ])->syncRoles(['user', 'admin']);

        User::create([
            'name' => 'Luis Astorga',
            'email' => 'luis@gmail.com',
            'password' => bcrypt('12345678')
        ])->syncRoles(['user', 'balance']);



        /* para ejecutar un cambio ingresar comando */
        //php artisan migrate:fresh --seed
    }
}
