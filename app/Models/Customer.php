<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'first_name',
        'address',
        'house_number',
        'municipality_id',
        'phone_number',
        'insurance_id',
    ];
}