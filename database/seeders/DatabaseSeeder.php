<?php

namespace Database\Seeders;

use App\Models\Joueur;
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
        Joueur::factory(20)->create();
    }
}
