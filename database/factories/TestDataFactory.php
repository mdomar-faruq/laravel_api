<?php

namespace Database\Factories;

use App\Models\TestData;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TestDataFactory extends Factory
{

    protected $model=TestData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title().$this->faker->text(6),
            'Description' => $this->faker->text(150),
        ];
    }
}
