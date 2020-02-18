<?php

use App\Entities\Apartments\ApartmentType;
use Illuminate\Database\Seeder;

class ApartmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ApartmentType::class, 15)->create();
    }
}
