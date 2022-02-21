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
                 #-----each time that create a fake user...
         factory(App\User::class, 3)->create()->each(function($user) {

            $user->questions()
                ->saveMany(
                #--- it will create fake questions
                    factory(App\Question::class, random_int(1, 5))->make()
                );
        });
    }
}
