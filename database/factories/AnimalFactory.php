<?php

namespace Database\Factories;

use App\Models\CaseAnimal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_animal'=>$this->faker->randomElement(['Gato','Perro','Conejo','Coballo']),
            'description'=>$this->faker->sentence(10),
            'gender'=>$this->faker->randomElement(['Macho','Hembra']),
            'stage'=>$this->faker->randomElement(['Cachorro','Joven','Adulto']),
        ];
    }
}
