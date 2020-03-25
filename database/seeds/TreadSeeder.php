<?php

use Illuminate\Database\Seeder;

class TreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treads = factory('App\Tread', 50)->create();

        $treads->each(function($tread) {
        factory('App\Reply', 10)->create(['tread_id' => $tread->id]);
        });
    }
}
