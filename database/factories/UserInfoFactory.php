<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInfo>
 */
class UserInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'first_name' => 'Joshua',
            'last_name' => 'Fulgencio',
            'address_line_1' => '851 Leyte St.',
            'address_line_2' => 'Sampaloc, Manila',
            'phone_number' => '09957155190',
            'description' => 'The Main Developer of this Portfolio Website',
            'user_image' => 'http://localhost:8000/storage/images/users/fulgencio_image.png'
        ];
    }
}
