<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'dateDebutLocation' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'dateFinLocation' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'telephone' => $this->faker->e164PhoneNumber,
        'user_id' => User::factory(),
        'voiture_id' => Voiture::factory(),
        ];
    }
}
