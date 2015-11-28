<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        factory('App\User','admin', 3)->create();
        factory('App\User','member', 10)->create();
        factory('App\Category',5)->create();
        factory('App\Article',20)->create();

        Model::reguard();
    }
}
