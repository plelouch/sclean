<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenoms' => $this->faker->firstName,
            'password' => Hash::make('password', ['rounds' => 12,]),
            'login' => 'plelouch',
            'categ' => 'Admin',
            'contact' => $this->faker->phoneNumber,
            'dateAjout' => $this->faker->dateTime,
        ];
    }
}
