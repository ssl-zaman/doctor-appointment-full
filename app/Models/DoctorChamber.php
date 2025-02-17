<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorChamber extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorChamberFactory> */
    use HasFactory;


    protected $fillable = [
        'location',
        'hospital_name',
        'contact_number',
        'notes'
    ];
}
