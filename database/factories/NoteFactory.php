<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "name"=>$this->faker->name,
            "description"=>$this->faker->text,
            "category"=>$this->faker->text,
            "user_id"=>User::all()->random()->id
        ];
    }
}
