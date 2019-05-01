<?php

use Illuminate\Database\Seeder;
use App\Products;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Products::class,20)->create();

        // create admin
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin'
        ]);

        // create supplier
        DB::table('users')->insert([
            'name' => 'supplier',
            'email' => 'supplier@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'supplier'
        ]);

    }
}
