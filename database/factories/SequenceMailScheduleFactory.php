<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\SequenceMail;
use App\Models\sequence_mail_schedule;

class SequenceMailScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SequenceMailSchedule::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'delay' => $this->faker->numberBetween(-10000, 10000),
            'unit' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'allowed_days' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'sequence_mail_id' => SequenceMail::factory(),
        ];
    }
}
