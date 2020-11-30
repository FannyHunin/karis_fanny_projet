<?php

namespace Database\Factories;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->company,
            "ville" => $this->faker->city,
            "pays" => $this->faker->randomElement(
                [
                    'Allemagne', 'Belgique', 'Autriche', 'Bulgarie', 'Chypre', 'Croatie', 'Danemark', 'Australie',
                    'Japon', 'Nouvelle-Zélande', 'Rwanda', 'Singapour', 'Corée du Sud', 'Thaïlande', 'Uruguay'
                ]
            ),
            "joueurs_max" => rand(1, 10)
        ];
    }
}
