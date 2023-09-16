<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CaseAnimal>
 */
class CaseAnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::all()->random()->id,
            'date'=>now(),
            'case_animal_id'=>null,
            // 'post_id'=>Status::all()->random()->id,
            'status_id'=>Status::all()->random()->id
        ];
    }
}
