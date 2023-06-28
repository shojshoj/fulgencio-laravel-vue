<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->hasUserInfo()
            ->create();
        
        User::factory()
            ->hasUserInfo([
                'first_name' => 'Aireeze',
                'last_name' => 'Estacio',
                'address_line_1' => '724 Mindoro St.',
                'address_line_2' => 'Sampaloc, Manila',
                'phone_number' => '09957155190',
                'description' => 'Sample Profile Description',
                'user_image' => 'http://localhost:8000/storage/images/users/estacio_image.JPG'
            ])
            ->create([
                'name' => 'Aireeze Estacio',
                'email' => 'estacio_test@gmail.com',
            ]);
        
        User::factory()
            ->hasUserInfo([
                'first_name' => 'Patrick',
                'last_name' => 'Pal-ing',
                'address_line_1' => '999 Meralco Village.',
                'address_line_2' => 'Meycauyan, Bulacan',
                'phone_number' => '09957155190',
                'description' => 'Sample Profile Description',
                'user_image' => 'http://localhost:8000/storage/images/users/paling_image.JPG'
            ])
            ->create([
                'name' => 'Patrick Pal-ing',
                'email' => 'paling_test@gmail.com',
            ]);
    }
}
