<?php

use App\Entities\Apartments\Apartment;
use Illuminate\Database\Seeder;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Apartment::class, 30)->create()->each(function($apartment){

        });
    }
}
