<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notice>
 */
class NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence(10),
            'contact_number' => $this->faker->numberBetween(15000000, 159999999),
            'user_id' => '2',
            'post_id' => Post::all()->random()->id,
            'notice_status_id' => 1
        ];
    }
}
