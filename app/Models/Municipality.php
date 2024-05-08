<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'postal_code',
        'name',
    ];

    public function instructors()
    {
        return $this->hasMany(Instructor::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function trackdays()
    {
        return $this->hasMany(Trackday::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}