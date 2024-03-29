<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class ContactFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(50),
            'title' => $this->faker->realText(50),
            'email' => $this->faker->email(50),
            'url' => $this->faker->url(),
            'gender' => $this->faker->boolean(),
            'age' => $this->faker->numberBetween(1,6),
            'contact' => $this->faker->realText(200),
        ];
    }
}
