<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Play extends Model
{
    use HasFactory;

    protected $fillable=[
        'price', 'name_play', 'date', 'hour', 'category', 'artist_id'
        
    ];

    public function artists(){
        return $this->belongsTo(Artist::class, 'artist_id');
        
    }
}
