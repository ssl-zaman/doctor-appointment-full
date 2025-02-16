<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    /** @use HasFactory<\Database\Factories\Setting\CompanySettingFactory> */
    use HasFactory;


    protected $fillable = [
        'company_name',
        'company_title',
        'phone',
        'hotline',
        'whats_app',
        'email',
        'address',
        'company_logo',
        'company_fav_icon',
        'admin_fav_icon',
        'website_link',
        'facebook_link',
        'linkdin_link',
        'x_link',
        'tiktok_link',
        'instagram_link',
        'google_tag',
        'youtube_link',
        'about',
        'footer_info'
    ];
}
