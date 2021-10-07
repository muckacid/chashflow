<?php

namespace Database\Factories;

use App\Models\Balance;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BalanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Balance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        //value: integer
        
        //type: enum
        //user_id: integer

        return [
            'value' => $this->faker->randomNumber(3),
            'type'  => $this->faker->randomElement(['ingreso', 'egreso']),
            'user_id' => 2
        ];
    }
}
