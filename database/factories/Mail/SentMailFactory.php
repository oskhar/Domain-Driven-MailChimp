<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Sendable;
use App\Models\Subscriber;
use App\Models\sent_mail;

class SentMailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SentMail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'sendable_id' => Sendable::factory(),
            'sendable_type' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'subscriber_id' => Subscriber::factory(),
            'sent_at' => $this->faker->dateTime(),
            'opened_at' => $this->faker->dateTime(),
            'clicked_at' => $this->faker->dateTime(),
        ];
    }
}
