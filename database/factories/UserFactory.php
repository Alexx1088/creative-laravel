<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

<<<<<<< HEAD
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
=======
>>>>>>> 8b78afce37d08285ed1b47ab61c7846ccb44786d
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
<<<<<<< HEAD
     * @return array<string, mixed>
=======
     * @return array
>>>>>>> 8b78afce37d08285ed1b47ab61c7846ccb44786d
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
<<<<<<< HEAD
     * @return static
=======
     * @return \Illuminate\Database\Eloquent\Factories\Factory
>>>>>>> 8b78afce37d08285ed1b47ab61c7846ccb44786d
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
