<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\SliderFactory> */
    use HasFactory;


    protected $fillable = [
        'title1',
        'title2',
        'image',
        'slider_component_id'
    ];

    public function components()
    {
        return $this->hasMany(SliderComponent::class);
    }
}
