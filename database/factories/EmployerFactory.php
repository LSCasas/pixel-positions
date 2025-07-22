<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployerFactory extends Factory
{
    public function definition(): array
    {

        $width = 640;
        $height = 480;
        $randomId = $this->faker->numberBetween(1, 1000);

        return [
            'name' => $this->faker->company(),
            'logo' => "https://picsum.photos/id/{$randomId}/{$width}/{$height}",
            'user_id' => User::factory(),
        ];
    }
}
