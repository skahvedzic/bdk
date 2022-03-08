<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
       //create user
        $userCount = (int)$this->command->ask('How many users would you like?', 20);
       \App\Models\User::factory($userCount)->create();

        //create donors
        $donorCount = (int)$this->command->ask('How many donors would you like?', 20);
        $userWithNoRelationship = \App\Models\User::doesnthave('roles')->get();
        $userWithNoRelationship->each(function (User $user) {
            $user->roles()->attach(3);
            $user->save();

        });

       //create donations
        $donationCount = (int)$this->command->ask('How many donations would you like?', 20);
        $donors = \App\Models\User::whereHas('roles', function($query) {$query->where('name','donor');})->get();
        \App\Models\Donation::factory($donationCount)->make()->each(function($donation) use ($donors){
            $donation->user_id = $donors->random()->id;
            $donation->save();
        });


    }
}
