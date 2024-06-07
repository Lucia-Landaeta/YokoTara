<?php

namespace Database\Factories;

use App\Models\Locality;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'title' => $this->faker->sentence(),
            // 'description' => $this->faker->paragraph(),
            // 'date_publish' => $this->faker->date(),
            // 'type' => $this->faker->randomElement(['Adopción', 'Perdido', 'Encontrado', 'Transito']),
            // 'status_id' => $this->faker->randomElement([1,2]),
            'user_id' => $this->faker->randomElement([1,2,3,4,5,6]),
            'locality_id' => Locality::all()->random()->id
        ];
    }
}
