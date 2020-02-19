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
        // $this->call(UsersTableSeeder::class);
         $this->call(UserRoleSeeder::class);
         $this->call(ApartmentTagSeeder::class);
         $this->call(ApartmentTypeSeeder::class);
         $this->call(ApartmentsSeeder::class);
    }
}
