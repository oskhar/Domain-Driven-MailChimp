<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Automation;
use App\Models\automation_step;

class AutomationStepFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AutomationStep::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'name' => $this->faker->name(),
            'value' => $this->faker->text(),
            'automation_id' => Automation::factory(),
        ];
    }
}
