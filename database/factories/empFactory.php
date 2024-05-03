<?php

namespace Database\Factories;

use App\Models\e;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;

class empFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\e::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'id' => $this->faker->id(),
            'created_at' => now(),
        ];
    }
}
