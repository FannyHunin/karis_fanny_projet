<?php

namespace Database\Factories;

use App\Models\Joueur;
use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Joueur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'age' => rand(10, 40),
            'genre' => $this->faker->randomElement(['Homme', 'Femme']),
            'pays_origine' => $this->faker->randomElement(
                [
                    'Allemagne', 'Belgique', 'Autriche', 'Bulgarie', 'Chypre', 'Croatie', 'Danemark', 'Australie',
                    'Japon', 'Nouvelle-Zélande', 'Rwanda', 'Singapour', 'Corée du Sud', 'Thaïlande', 'Uruguay'
                ]
            ),
            'role' => $this->faker->randomElement(array('avant', 'central', 'arrière', 'remplacant')),
            'telephone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->email,
            'equipe_id' => rand(1, 15)
        ];
    }
}
