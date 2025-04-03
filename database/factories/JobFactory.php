<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id'=> Employer::factory(),
            'title' => $this->faker->jobTitle(),
            'location' => "Remote",
            'salary' => $this->faker->randomElement(["$40,000", "$50,000", "$60,000", "$70,000", "$80,000", "$90,000", "$100,000"]),
            'schedule' => $this->faker->randomElement(['full-time', 'part-time']),
            'url' => $this->faker->url(),
            'featured' => false,
        ];
    }
}
