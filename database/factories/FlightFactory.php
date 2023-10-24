<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fl_date' => $this->faker->date(),
            'fl_origin_airport' => $this->faker->regexify('[A-Z]{3}'),
            'fl_origin_city' => $this->faker->city(),
            'fl_destination_airport' => $this->faker->regexify('[A-Z]{3}'),
            'fl_destination_city' => $this->faker->city(),
            'fl_airline' => ucfirst($this->faker->word()),
            'fl_distance' => $this->faker->randomNumber(null, 3),
            'fl_img' => $this->faker->imageUrl('314', '176', 'countries')
        ];
    }
}
