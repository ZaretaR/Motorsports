<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trackday extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'customer_id',
        'instructor_id',
        'car_id',
        'municipality_id',
    ];
}