<?php

namespace Database\Factories\Setting;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting\CompanySetting>
 */
class CompanySettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'company_name' => fake()->company(),
            'company_title' => fake()->catchPhrase(),
            'phone' => fake()->phoneNumber(),
            'hotline' => fake()->phoneNumber(),
            'whats_app' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'bookbyphone' => json_encode(['0234234234', '234234234']),
            'work_day' => 'Monday to Friday',
            'available_time' => '9AM to 10PM',
            'company_logo' => 'logos/' . fake()->word() . '.png',
            'company_fav_icon' => 'icons/' . fake()->word() . '.png',
            'admin_fav_icon' => 'icons/' . fake()->word() . '.png',
            'website_link' => fake()->url(),
            'facebook_link' => 'https://facebook.com/' . fake()->word(),
            'google_tag' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8881443927553!2d90.38322967532494!3d23.75136787866979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c766dae163a9%3A0x6f0612fa8107b57c!2z4Ka44KeN4Kau4Ka-4Kaw4KeN4KafIOCmuOCmq-Cmn-Cmk-Cmr-CmvOCnjeCmr-CmvuCmsCDgpo_gprLgpp_gpr_gpqHgpr8u!5e0!3m2!1sbn!2sbd!4v1739272984442!5m2!1sbn!2sbd',
            'youtube_link' => 'https://youtube.com/' . fake()->word(),
            'linkdin_link' => 'https://linkdin.com/' . fake()->word(),
            'x_link' => 'https://x.com/' . fake()->word(),
            'tiktok_link' => 'https://tiktok.com/' . fake()->word(),
            'instagram_link' => 'https://instagram.com/' . fake()->word(),
            'about' => 'My family trusts Dr Fischer completely, he’s been with us for years and as helped us on numerous occasions',
            'footer_info' => 'Copyright 2025 by Smart Software LTD. All rights reserved.',
        ];

    }
}
