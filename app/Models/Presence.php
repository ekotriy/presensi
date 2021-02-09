<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $fillabel = [
        'id_user',
        'time_start',
        'time_end',
        'lat_start',
        'long_start',
        'lat_end',
        'long_end',
        'at_school_start',
        'at_school_end',
        'status_start',
        'status_end',
        'note'
    ];
}
