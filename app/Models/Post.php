<?php

namespace App\Models;

use App\Models\Administrator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'administrator_id',
        'title',
        'description',
        'date',
    ];

    public function administrator()
    {
        return $this->belongsTo(Administrator::class, 'administrator_id');
    }
}