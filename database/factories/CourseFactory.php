<?php

namespace Database\Factories;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->sentence(),
            'tagline' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'learnings' => [
                $this->faker->sentence(),
                $this->faker->sentence(),
                $this->faker->sentence(),
            ],

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

    public function released(Carbon $date = null): self
    {
        return $this->state(function (array $attributes) use ($date) {
            return [
                'released_at' => $date ?? Carbon::now(),
            ];
        });

    }
}
