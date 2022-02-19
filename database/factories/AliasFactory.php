<?php

namespace Database\Factories;

use App\Models\Alias;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AliasFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->make()->id,
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'cc_type' => $this->faker->creditCardType(),
            'cc_number' => $this->faker->creditCardNumber(),
            'cc_expiration' => $this->faker->creditCardExpirationDate(),
            'company' => $this->faker->company(),
            'job_title' => $this->faker->jobTitle(),
            'company_email' => $this->faker->companyEmail(),
            'username' => $this->faker->userName(),
            'password' => $this->faker->password(),
            'ip_address' => $this->faker->ipv4(),
            'mac_address' => $this->faker->macAddress(),
            'profile' => $this->faker->realText(500),
            'burned' => $this->faker->boolean(),
        ];
    }
}
