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
            'company_logo' => 'logos/' . fake()->word() . '.png',
            'company_fav_icon' => 'icons/' . fake()->word() . '.png',
            'admin_fav_icon' => 'icons/' . fake()->word() . '.png',
            'website_link' => fake()->url(),
            'facebook_link' => 'https://facebook.com/' . fake()->word(),
            'google_tag' => 'GTM-' . fake()->regexify('[A-Z0-9]{6}'),
            'youtube_link' => 'https://youtube.com/' . fake()->word(),
            'linkdin_link' => 'https://linkdin.com/' . fake()->word(),
            'x_link' => 'https://x.com/' . fake()->word(),
            'tiktok_link' => 'https://tiktok.com/' . fake()->word(),
            'instagram_link' => 'https://instagram.com/' . fake()->word(),
            'about' => fake()->paragraph(),
            'footer_info' => fake()->sentence(),
        ];

    }
}
