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
            "nom"=>$this->faker->name,
            "ville"=>$this->faker->city,
            "pays"=>$this->faker->country,
            "joueurs_max"=>rand(1,10)
        ];
    }
}
