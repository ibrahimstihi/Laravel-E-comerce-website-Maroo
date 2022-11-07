<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            //
            "title"=>"category title".Str::random(10),
            "slug"=>Str::slug("category title".Str::random(10)),
            "icon"=>$this->faker->imageUrl($width=100,$height=100),
        ];
    }
}
