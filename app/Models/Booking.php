<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'trackday_id',
        'event_id',
    ];

    public function trackday()
    {
        return $this->belongsTo(Trackday::class, 'trackday_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}