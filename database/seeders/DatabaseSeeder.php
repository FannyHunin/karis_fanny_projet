<?php

namespace Database\Seeders;

use App\Models\Joueur;
use App\Models\Equipe;
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
        Equipe::factory(15)->create();
        Joueur::factory(20)->create();
    }
}
