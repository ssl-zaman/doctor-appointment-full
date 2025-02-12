<?php

namespace Database\Seeders;

use App\Models\GenarelSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenarelSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GenarelSetting::factory()->create([
            'website_name' => 'My Awesome Website',
            'website_url' => 'https://www.awesome-website.com',
            'author' => 'John Doe',
            'address' => '123 Awesome Street, Cityville, Country',
            'contact_number' => '123-456-7890',
            'contact_email' => 'contact@awesome-website.com',
            'site_logo' => 'https://www.awesome-website.com/logo.png',
            'socail_link_fb' => 'https://facebook.com/awesome-website',
            'social_link_youtube' => 'https://youtube.com/awesome-website',
        ]);
    }
}
