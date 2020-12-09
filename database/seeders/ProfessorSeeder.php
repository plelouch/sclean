<?php

namespace Database\Seeders;

use App\Models\Professeur;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(Professeur::class);
    }
}
