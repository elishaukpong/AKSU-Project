<?php

use App\Entities\Apartments\Apartment;
use App\Entities\Apartments\ApartmentTag;
use Illuminate\Database\Seeder;
use App\Entities\Files\File;

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

            factory(File::class, mt_rand(1,4))->create([
                'fileable_id' => $apartment->id,
                'fileable_type' => get_class($apartment),
            ]);

            $tags = ApartmentTag::all()->random(mt_rand(1, 5))->pluck('id');

            $apartment->tags()->attach($tags);
        });
    }
}
