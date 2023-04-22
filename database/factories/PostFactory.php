<?php

namespace Database\Factories;

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
        $userIds = User::all()->pluck('id');
        return [
            'user_id'     => $this->faker->randomElement($userIds),
            'title'       => $this->faker->unique()->word,
            'description' => $this->faker->text(200)
        ];
    }
}
