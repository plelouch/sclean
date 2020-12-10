<?php

namespace Database\Factories;

use App\Models\Professeur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesseurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Professeur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('fr-FR');
        return [
            "nom" => $faker->lastName,
            "prenoms" => $faker->firstName,
            "contact" => "".$faker->phoneNumber,
            "addr" => $faker->address,
            "diplome" => "Licence",
            "matricule" => substr(strtoupper(uniqid('', true)), 0,8)
        ];
    }
}
