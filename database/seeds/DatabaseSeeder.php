<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // quando abbiamo più di un seeder, li inseriamo tutti dentro il metodo 'call' in modo che poi, lanciando il comando 'php artisan db:seed', li lancia tutti insieme 
        $this->call([
            TrainsTableSeeder::class
        ]);
    }
}
