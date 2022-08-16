<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'title' => $this->faker->name,
      'salary' => rand(100, 10000),
      // 'enabled' => $this->faker->randomElement([true, false]),
      'desc' => $this->faker->realText,
      'cat_id' => rand(1, 10),
      // 'cgy_id'  => rand(1, 3), // 目前沒有這個表格
      'start_at' => Carbon::now()->addDays(rand(-5, 5)),
    ];
  }
}