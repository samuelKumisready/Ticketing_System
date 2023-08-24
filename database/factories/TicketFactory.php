<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
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
            'status' => $this->faker->randomElement(['open', 'in progress', 'resolved']),
            // 'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'category_id' => Category::factory()->create()->id,
            'created_by' => User::factory(),
            'assigned_to' => User::factory(),
        ];
    }
}