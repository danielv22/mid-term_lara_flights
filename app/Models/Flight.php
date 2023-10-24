<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $primaryKey = 'fl_id';

    protected $fillable = [
        'fl_date',
        'fl_origin_airport',
        'fl_origin_city',
        'fl_destination_airport',
        'fl_destination_city',
        'fl_airline',
        'fl_distance',
        'fl_img'
    ];
}
