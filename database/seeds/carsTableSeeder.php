<?php

use Illuminate\Database\Seeder;

class carsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\car::class, 50)->create()->each(function ($Car) {
        });
    }
}
