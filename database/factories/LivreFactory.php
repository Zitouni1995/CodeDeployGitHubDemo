<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titre"=>$this->faker->unique()->realText(20),
            "auteur"=>$this->faker->name(),
            "dateEdition"=>$this->faker->date(),
            "resume"=>$this->faker->realText(255),
            "editeur"=>$this->faker->name(),
            "exemplaire"=>$this->faker->numberBetween(5,100),
        ];
    }
}
