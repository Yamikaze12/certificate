<?php

namespace Database\Factories;

use App\Models\Certificate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CertificateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Certificate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'as' => $this->faker->text,
            'number' => $this->faker->randomNumber(),
            'date' => $this->faker->date,
            'description' => $this->faker->text,
            'status' => $this->faker->text,
        ];
    }
}


