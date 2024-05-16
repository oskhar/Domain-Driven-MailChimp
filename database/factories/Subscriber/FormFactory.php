<?php

namespace Database\Factories\Subscriber;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\form;

class FormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var Form
     */
    protected $model = Form::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->paragraphs(3, true),
        ];
    }
}
