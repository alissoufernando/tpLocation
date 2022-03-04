<?php

namespace Database\Factories;

use App\Models\Marque;
use App\Models\Plaque;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'marque' => $this->faker->lastName,
        'plaque' => $this->faker->numerify('RB: GR ####'),
        'model' => $this->faker->asciify('V6 ***'),
        'couleur' => $this->faker->hexcolor(),
        'prix' => $this->faker->numberBetween($min = 10, $max = 15) * 100,
        'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'pathImage' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
