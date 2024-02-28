<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Sequence;
use App\Models\sequence_mail;

class SequenceMailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SequenceMail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'subject' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'status' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'content' => $this->faker->paragraphs(3, true),
            'filters' => '{}',
            'sequence_id' => Sequence::factory(),
        ];
    }
}
