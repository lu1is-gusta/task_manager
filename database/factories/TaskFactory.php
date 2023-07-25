<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(15),
            'description' => $this->faker->text(50),
            'date' => $this->faker->dateTime(),
            'user_id' => User::all()->random(),
            'category_id' => Category::all()->random(),
        ];
    }
}
