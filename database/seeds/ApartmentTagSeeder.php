<?php

use App\Entities\Apartments\ApartmentTag;
use Illuminate\Database\Seeder;

class ApartmentTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ApartmentTag::class, 15)->create();
    }
}
