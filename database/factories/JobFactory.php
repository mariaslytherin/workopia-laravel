<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

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
            'user_id' => User::factory(),
            'title' => Str::limit($this->faker->jobTitle(), 100),
            'description' => $this->faker->paragraphs(1, true),
            'salary' => $this->faker->numberBetween(40000, 120000),
            'tags' => Str::limit(implode(', ', $this->faker->words(3)), 255),
            'job_type' => $this->faker->randomElement(['Full-Time', 'Part-Time', 'Contract']),
            'remote' => $this->faker->boolean(),
            'requirements' => Str::limit($this->faker->sentences(2, true), 255),
            'benefits' => Str::limit($this->faker->sentences(1, true), 255),
            'address' => Str::limit($this->faker->streetAddress(), 255),
            'city' => Str::limit($this->faker->city(), 100),
            'state' => Str::limit($this->faker->state(), 100),
            'zipcode' => Str::limit($this->faker->postcode(), 20),
            'contact_email' => Str::limit($this->faker->safeEmail(), 255),
            'contact_phone' => Str::limit($this->faker->phoneNumber(), 50),
            'company_name' => Str::limit($this->faker->company(), 255),
            'company_description' => Str::limit($this->faker->paragraphs(1, true), 255),
            'company_logo' => Str::limit($this->faker->imageUrl(100, 100, 'business', true, 'logo'), 255),
            'company_website' => Str::limit($this->faker->url(), 255),
        ];
    }
}
