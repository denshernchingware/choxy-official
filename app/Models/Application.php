<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
     use HasFactory;

    protected $fillable = [
        'name',
        'date_of_birth',
        'gender',
        'guardian_name',
        'phone',
        'email',
        'results',
        'address',
        'previous_school',
        'additional_information',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];
}
