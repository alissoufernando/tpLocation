<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Voiture;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AddAdminTableSeeder::class);
        User::factory(4)->create();
        Voiture::factory(0)->create();
        Location::factory(0)->create();
    }
}
