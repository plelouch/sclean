<?php

namespace Database\Seeders;

use App\Models\Professeur;
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
        // \App\Models\User::factory(10)->create();
        Professeur::factory(30)->create();
    }
}
