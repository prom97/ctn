<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','surname', 'play_id'
    ];

    public function plays(){
        return $this->hasMany(Play::class);
    }
}
