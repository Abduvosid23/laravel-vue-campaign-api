<?php

namespace Modules\Campaign\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Campaign\Models\Campaign;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Campaign\Models\Campaign>
 */
class CampaignFactory extends Factory
{
  protected $model = Campaign::class;
    public function definition()
    {
        return [
            'user_id' => 1,
            'companyName' => $this->faker->company,
            'brandName' => $this->faker->companySuffix,
            'type' => $this->faker->randomElement(['Digital', 'Print', 'TV', 'Radio']),
            'product' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'quantity' => $this->faker->numberBetween(1, 100),
            'totalCalculation' => $this->faker->randomFloat(2, 100, 100000),
            'country' => $this->faker->country,
            'age' => $this->faker->numberBetween(18, 65),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'image_url' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
