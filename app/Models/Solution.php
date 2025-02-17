<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    /** @use HasFactory<\Database\Factories\SoulutionFactory> */
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'description',
        'status'
    ];
}
