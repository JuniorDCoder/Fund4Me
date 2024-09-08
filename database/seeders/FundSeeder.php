<?php

namespace Database\Seeders;

use App\Models\Fund;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // Get all user IDs to randomly assign a fund owner
        $userIds = User::pluck('id')->all();

        for ($i = 0; $i < 10; $i++) {
            Fund::create([
                'user_id' => $faker->randomElement($userIds), // Assign to a random user
                'title' => $faker->sentence(6, true),
                'description' => $faker->paragraphs(3, true),
                'slug' => $faker->slug,
                'target_amount' => $faker->numberBetween(100000, 1000000), // Random target between 100,000 and 1,000,000 XAF
                'raised_amount' => $faker->numberBetween(10000, 900000), // Random raised amount between 10,000 and 900,000 XAF
                'image_path' => $faker->imageUrl(640, 480, 'business', true, 'FUND', false, 'png'), // Random image URL
                'is_public' => $faker->boolean(80), // 80% chance of being public
            ]);
        }
    }
}
