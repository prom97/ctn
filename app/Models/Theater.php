<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    use HasFactory;

    protected $fillable=[
        'quantity_employees','code_employee','name_employee','category_employee','movie_ticket_id','ent_id'
    ];
}
