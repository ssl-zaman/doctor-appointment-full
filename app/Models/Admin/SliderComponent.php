<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderComponent extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\SliderComponentFactory> */
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description'
    ];
}
