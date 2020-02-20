<?php

use Illuminate\Database\Seeder;
use App\Entities\User\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function($user){
            factory(\App\Entities\Cliques\Clique::class)->create([
                'user_id' =>$user->id
            ]);
        });
    }
}
