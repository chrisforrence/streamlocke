<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'comment',
        'nickname',
        'epitath',
        'nature',
    ];

    public function attempt()
    {
        return $this->belongsTo(Attempt::class);
    }

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }
}
