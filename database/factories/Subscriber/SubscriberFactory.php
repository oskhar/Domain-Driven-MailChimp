<?php

namespace Database\Factories\Subscriber;

use App\Domain\Shared\Models\User;
use App\Domain\Subscriber\Models\Form;
use App\Domain\Subscriber\Models\Subscriber;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscriber::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'email' => $this->faker->safeEmail(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'user_id' => User::factory(),
            'form_id' => Form::factory(),
        ];
    }
}
