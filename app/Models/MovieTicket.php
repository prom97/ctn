<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_ticket', 'name_show', 'num_ticket', 'movie_id'
    ];

    public function movie_tickets(){
        return $this->belongsTo(Movie::class, 'movie_id');
    }
}
