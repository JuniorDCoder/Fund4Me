<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Auth;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campaigns = [
            ['title' => 'Campaign 1', 'slug' => 'campaign-1-new' , 'user_id' => 1 , 'description' => 'Description 1', 'target_amount' => '3000000', 'campaign_type_id' => 1, 'start_date' => now(), 'end_date' => now()->addDays(10), 'status' => 'pending'],
            ['title' => 'Campaign 2', 'slug' => 'campaign-2-new' , 'user_id' => 1 , 'description' => 'Description 2', 'target_amount' => '5000000', 'campaign_type_id' => 2, 'start_date' => now(), 'end_date' => now()->addDays(15), 'status' => 'pending'],
            ['title' => 'Campaign 3', 'slug' => 'campaign-3-new' , 'user_id' => 1 , 'description' => 'Description 3', 'target_amount' => '2000000', 'campaign_type_id' => 3, 'start_date' => now(), 'end_date' => now()->addDays(20), 'status' => 'pending'],
            ['title' => 'Campaign 4', 'slug' => 'campaign-4-new' , 'user_id' => 1 , 'description' => 'Description 4', 'target_amount' => '1000000', 'campaign_type_id' => 4, 'start_date' => now(), 'end_date' => now()->addDays(25), 'status' => 'pending'],
        ];

        foreach($campaigns as $campaign){
            Campaign::firstOrCreate($campaign);
        }
    }
}
