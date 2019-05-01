<?php

use Illuminate\Database\Seeder;
use App\Products;

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
    }
}
