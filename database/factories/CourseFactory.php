<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake() -> words(3, true),
            'description' => fake() -> paragraph(),
            'code' => fake()->unique()->regexify('COURSE-[A-Z]{3}[0-9]{3}'),
        ];
    }
}
