<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable = [
        'address1',
        'address2',
        'place1',
        'place2',
        'cell1',
        'cell2',
        'cell3',
    ];
}
