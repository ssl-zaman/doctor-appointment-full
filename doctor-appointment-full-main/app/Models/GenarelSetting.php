<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenarelSetting extends Model
{
    /** @use HasFactory<\Database\Factories\GenarelSettingFactory> */
    use HasFactory;

    protected $fillable = [
        'website_name',
        'website_url',
        'author',
        'address',
        'contact_number',
        'contact_email',
        'site_logo',
        'socail_link_fb',
        'social_link_youtube'
    ];
}
