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
        $treads = factory('App\Tread', 20)->create();

        $treads->each(function($tread) {
        factory('App\Reply', 5)->create(['tread_id' => $tread->id]);
        });
    }
}
