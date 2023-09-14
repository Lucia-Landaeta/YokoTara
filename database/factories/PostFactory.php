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
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'date_publish' => $this->faker->date(),
            'type' => $this->faker->randomElement(['En adopción', 'Perdido', 'Encontrado', 'Transito']),
            'status_id' => Status::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'locality_id' => Locality::all()->random()->id
        ];
    }
}
