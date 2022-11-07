<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "brahim",
            'email' => "ibrahimstihi2015@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("stihi2020"), 
            'remember_token' => Str::random(10),
        ];
    }
}